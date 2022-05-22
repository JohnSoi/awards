<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\UserGroup;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            if (Auth::user()->group_id) {
                $group = UserGroup::find(Auth::user()->group_id);
                if ($group) {
                    foreach ($roles as $role) {
                        if ($group->slug == $role) {
                            return $next($request);
                        }
                    }
                }
            }
        }

        return redirect('login');
    }
}
