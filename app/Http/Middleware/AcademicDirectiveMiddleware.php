<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class AcademicDirectiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!empty(Auth::guard('student')->check())) {
            return $next($request);
        } else {
            Auth::guard('student')->logout();
            return redirect('/login')->with('error', 'You are not logged in.');
        }
    }
}
