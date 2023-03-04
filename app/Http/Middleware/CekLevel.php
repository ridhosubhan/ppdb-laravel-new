<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        // if (in_array($request->user()->level, $levels)) {
        //     return $next($request);
        // }
        // return redirect('/');

        if ((Auth::check() && Auth::user()->level == 'admin')) {
            return $next($request);
        } else if ((Auth::check() && Auth::user()->level == 'siswa')) {
            return $next($request);
        }
        abort(403);
    }
}
