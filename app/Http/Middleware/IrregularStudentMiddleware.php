<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class IrregularStudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!empty(Auth::guard('student')->check())) {
            if (Auth::guard('student')->user()->student_type == "Irregular") {
                return $next($request);
            } else {
                Auth::guard('student')->logout();
                return redirect('/')->with('error', 'You are not authorized to perform this action.');
            }
        } else {
            Auth::guard('student')->logout();
            return redirect('/')->with('error', 'You are not logged in.');
        }
    }
}
