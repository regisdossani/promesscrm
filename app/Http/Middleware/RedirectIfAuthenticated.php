<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

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
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            // return redirect(RouteServiceProvider::HOME);
            return redirect('/admin');
        }
        if ($guard == "apprenant" && Auth::guard($guard)->check()) {
            // return redirect(RouteServiceProvider::HOME);
            return redirect('/apprenant');
        }

        if ($guard == "formateur" && Auth::guard($guard)->check()) {
            // return redirect(RouteServiceProvider::HOME);
            return redirect('/formateur');
        }
        if ($guard == "equipe" && Auth::guard($guard)->check()) {
            // return redirect(RouteServiceProvider::HOME);
            return redirect('/equipe');
        }


        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        return $next($request);
    }
}
