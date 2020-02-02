<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckIfLoggedIn
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
        if(Auth::check()) {
            // permit the request (by doing nothing lol)
        } else {
            // gtfo N I B B A
            return redirect('/login');
        }
        return $next($request);
    }
}
