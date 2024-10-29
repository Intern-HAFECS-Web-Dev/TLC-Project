<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            event(new Registered($user));
    
            Auth::login($user);
    
            // $user->assignRole('user');
    
            // return redirect(route('user', absolute: false));
            return redirect()->route('additional.form', [
                'user' => $user->id,
            ]);

        } catch(\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat mendaftar : '. $e->getMessage()])->withInput();
        };
    }

    public function showForm(User $user)
    {
        $provinces = Province::all();
        return view('auth.registerAdditionalInfo', [
            'user' => $user,
            'provinces' => $provinces,
        ]);
    }

    public function storeRegisterUser (Request $request, User $user) {
        $validated = $request->validate([
            'user' => 'required'
        ]);
    }
}
