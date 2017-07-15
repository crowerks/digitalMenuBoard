<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use App\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $user = Auth::user();
        if (Auth::guard($guard)->check()) {
            if($user->isRole('Administrator')) {
                return redirect('/admin');
            } elseif ($user->isRole('Subscriber')) {
                return redirect('/subscriber');
            }
        }
        return $next($request);
    }
}
