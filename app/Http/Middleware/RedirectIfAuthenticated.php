<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (in_array($request->user()->group_id, [3, 4])) {
                    $redirectTo = Route('evaluation.index');
                } else if ($request->user()->group_id == 5) {
                    $redirectTo = Route('evaluation.projects');
                } else {
                    $redirectTo = RouteServiceProvider::HOME;
                }

                return redirect($redirectTo);
            }
        }

        return $next($request);
    }
}
