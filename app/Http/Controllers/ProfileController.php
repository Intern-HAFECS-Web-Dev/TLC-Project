<?php

namespace App\Http\Controllers;

use App\Models\userAdmin;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $profile = $request->user();
        $profileId = $profile->id;

        $userAdmin = userAdmin::with('user',)
        ->where('user_id', $profileId)
        ->whereHas('user', function ($query) {
            $query->role('admin');
        })->first();
        
        return view('admin.settings.userAdminEdit', [
            'user' => $request->user(), 
            'img' => $userAdmin,
            'title' => 'Admin Settings',
            'navTitle' => 'Admin Settings'
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        Alert::success('Success', 'Your Profile has been updated!');
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function editImg(Request $request) 
{
    $request->validate([
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $userId = $request->user()->id;

    $userAdmin = UserAdmin::with('user')->findOrFail($userId);

    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $userAdmin->profile_image = $imageName;
    }

    $userAdmin->update();

    return redirect()->back()->with('success', 'Profile image updated successfully.');
}
}
