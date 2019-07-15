<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Any
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        // dd(Auth::guard('admin')->check());
        if (Auth::guard('admin')->check()) {
            return back();
        }

        return $next($request);
    }
}
