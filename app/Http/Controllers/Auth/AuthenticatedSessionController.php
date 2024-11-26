<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\AuthenticationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
    return view('auth.loginPage', [
        'title' => 'Login Page',
    ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
    // Coba autentikasi
    try {
        $request->authenticate();
    } catch (AuthenticationException $e) {
        // Jika autentikasi gagal, redirect kembali dengan pesan kesalahan
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Regenerasi sesi
    $request->session()->regenerate();

    // Redirect berdasarkan peran pengguna
    switch (true) {
        case auth()->user()->hasRole('admin'):
            return redirect()->route('adminDashboard');
        case auth()->user()->hasRole('asesor'):
            return redirect()->route('assessorDashboard.index');
        default:
            return redirect()->route('userDashboard.index');
    }
}

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
