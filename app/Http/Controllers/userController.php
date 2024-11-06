<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Province;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userProfiles = UserProfile::with('user')->latest()->get();
        // dd($userProfiles);
        $users = User::role('user')->get();

        return view('admin.users.index', [
            'title' => 'users',
            'users' => $users,
            'userProfile' => $userProfiles,
            'navTitle' => 'Table Users'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $provinces = Province::all();
        $users = UserProfile::with('user')->findOrFail($id);
        return view('admin.users.edit', [
            'title' =>  'Edit User',
            'navTitle' => 'Edit User',
            'users' =>  $users,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    try {
        $user = User::find($id);
        $userProfile = UserProfile::where('user_id', $id)->firstOrFail();
        
        if ($userProfile->profile_image) {
            Storage::delete($userProfile->profile_image);
        }

        $user->removeRole('user');
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User  deleted successfully.');
    } catch (\Exception $e) {
        return redirect()->route('users.index')->with('error', 'Error deleting user: ' . $e->getMessage());
    }
    }
}
