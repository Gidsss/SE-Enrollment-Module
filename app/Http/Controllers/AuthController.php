<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            if(Auth::user()->user_type == 1)
            {
                return redirect()->intended('admin/dashboard');
            }
            else if(Auth::user()->user_type == 2)
            {
                return redirect()->intended('chairperson/dashboard');
            }
            else if(Auth::user()->user_type == 3)
            {
                return redirect()->intended('student/dashboard');
            }
        }

        return view('auth.login');
    }

    public function AuthLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = !empty($request->remember);

        if (Auth::attempt($credentials, $remember)) {
            if(Auth::user()->user_type == 1)
            {
                return redirect()->intended('admin/dashboard');
            }
            else if(Auth::user()->user_type == 2)
            {
                return redirect()->intended('chairperson/dashboard');
            }
            else if(Auth::user()->user_type == 3)
            {
                return redirect()->intended('student/dashboard');
            }
        } 
        else {
            return redirect()->back()->with('error', 'Wrong credentials. Please try again!');
        }
    }

    public function schedule(Request $request)
    {
        return view('student/regular_schedule');
    }

    public function assessment(Request $request)
    {
        return view('student/view_assessment');
    }

    public function download_ser(Request $request)
    {
        return view('student/download_ser');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
    public function forgot_password(Request $request)
    {
        return view('forgot_password');
    }
    public function register(Request $request)
    {
        return view('register');
    }

}


?>