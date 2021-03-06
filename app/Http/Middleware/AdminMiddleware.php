<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // check if user is authenticated or not and then check the authenticated user role id
        if (Auth::check() && Auth::user()->role->id == 1) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
