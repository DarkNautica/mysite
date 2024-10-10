<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoFactorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and if 2FA is enabled
        if (Auth::check() && Auth::user()->google2fa_secret) {
            // If the user hasn't verified their 2FA code for this session
            if (!$request->session()->has('2fa_verified')) {
                // Redirect to the 2FA verification page
                return redirect()->route('2fa.verify');
            }
        }

        return $next($request);
    }
}
