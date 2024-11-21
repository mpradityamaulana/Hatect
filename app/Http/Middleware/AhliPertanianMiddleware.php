<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AhliPertanianMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('ahli')->check()) {
            return $next($request);
        }

        return redirect('/login')->with('error', 'You must login as an agriculture expert to access this page.');
    }
}
