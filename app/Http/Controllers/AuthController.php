<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\View;
use App\Models\Student;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::guard('student')->check()) { // Check if the student is authenticated using the 'student' guard
            $student = Auth::guard('student')->user(); // Retrieve the authenticated student; we can perform various actions using this like getting the student's ID, name, for enrollment etc.
            if ($student) {
                if ($student->student_type == "Regular") {
                    return redirect()->intended('regular_student/regular_schedule');
                } elseif ($student->student_type == "Irregular") {
                    return redirect()->intended('irregular_student/irreg_schedule');
                }
            }
        }

        return view('auth.student-login');
    }

    public function AuthLogin(Request $request)
    {
        $credentials = $request->only('student_id', 'password');
        $remember = !empty($request->remember);

        if (Auth::guard('student')->attempt($credentials, $remember)) {
            // Authentication successful for student
            $student = Auth::guard('student')->user();

            // Check the student type and enrollment status
            if ($student->student_type == "Regular") {
                if ($student->enrolled == 1) {
                    // Redirect to regular ser page if the student is enrolled
                    return redirect()->intended('/regular_student/regular_ser');
                } else {
                    // Redirect to the regular schedule page if yet not enrolled
                    return redirect()->intended('/regular_student/regular_schedule');
                }
            } elseif ($student->student_type == "Irregular") {
                if ($student->enrolled == 1) {
                    // Redirect to irregular ser page for enrolled irregular students
                    return redirect()->intended('/irregular_student/irreg_ser');
                } else {
                    // Redirect to the irregular schedule if not yet enrolled
                    return redirect()->intended('/irregular_student/irreg_schedule');
                }
            }
        } else {
            // Handle authentication failure
            return redirect()->back()->with('error', 'Wrong credentials. Please try again!');
        }
    }



    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect(url('/'))->with('success', 'You have been successfully logged out.');
    }
}


