<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            // return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
            if(auth()->user()->hasrole('admin')) {
                return redirect()->route('adminDashboard.index');
            };
    
            if(auth()->user()->hasrole('asesor')) {
                return redirect()->route('assessorDashboard.index');
            }
            if(auth() ->user()->hasrole('user')) {
                return redirect()->route('userDashboard');
            };
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}
