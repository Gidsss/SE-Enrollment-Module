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
            $student = Auth::guard('student')->user(); // Retrieve the authenticated student
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
            if ($student->student_type == "Regular") {
                return redirect()->intended('regular_student/regular_schedule');
            } elseif ($student->student_type == "Irregular") {
                return redirect()->intended('irregular_student/irreg_schedule');
            }
        } else {
            // Handle authentication failure
            return redirect()->back()->with('error', 'Wrong credentials. Please try again!');
        }
    }

    //Dito yung controller for genpdf
    public function genpdf(Request $request)
    {
        // Fetch or generate the table data
        $tableData = $this->getTableData();
    
        // Pass the table data to the Blade view
        $html = View::make('student.table_data_sched', compact('tableData'))->render();
    
        // Load the HTML content into SnappyPdf
        $pdf = SnappyPdf::LoadHTML($html, []);
    
        // Return the PDF for inline display
        return $pdf->inline();
    }
    

    private function getTableData()
    {
        // Yung magiging laman naman ng tables nandito
        return [
            ['classCode' => 'CSC 0311', 'section' => '2', 'subjectTitle' => 'Programming TITE (lec)', 'units' => '2', 'schedule' => 'T 6:00p-9:00p', 'room' => 'F2F COMP LAB 4'],
            ['classCode' => 'CSC 0312', 'section' => '2', 'subjectTitle' => 'Programming Languages (lab)', 'units' => '2', 'schedule' => 'F 1:00p-3:00p', 'room' => 'F2F GCA 306'],
            ['classCode' => 'CSC 0312.1', 'section' => '2', 'subjectTitle' => 'Software Engineering (lec)', 'units' => '3', 'schedule' => 'W 2:00p-5:00p', 'room' => 'F2F COMP LAB 3'],
            ['classCode' => 'CSC 0313', 'section' => '2', 'subjectTitle' => 'Software Engineering (lab)', 'units' => '2', 'schedule' => 'Th 1:00p-3:00p', 'room' => 'F2F COMP LAB 1'],
            ['classCode' => 'CSC 0313.1', 'section' => '2', 'subjectTitle' => 'Operating System (lec)', 'units' => '3', 'schedule' => 'Th 4:00p-6:00p', 'room' => 'F2F COMP LAB 1'],
            ['classCode' => 'CSC 0314', 'section' => '2', 'subjectTitle' => 'Operating System (lab)', 'units' => '2', 'schedule' => 'Th 1:00p-3:00p', 'room' => 'F2F COMP LAB 1'],
            ['classCode' => 'CSC 0314.1', 'section' => '2', 'subjectTitle' => 'Intelligent System (lec)', 'units' => '3', 'schedule' => 'M 9:00a-12:00p', 'room' => 'F2F GV 311'],
            ['classCode' => 'CSC 0315', 'section' => '2', 'subjectTitle' => 'Intelligent System (lab)', 'units' => '2', 'schedule' => 'W 12:00p-2:00p', 'room' => 'F2F COMP LAB 4'],
            ['classCode' => 'CSC 0315.1', 'section' => '2', 'subjectTitle' => 'Intelligent System (lab)', 'units' => '2', 'schedule' => 'M 1:00p-4:00p', 'room' => 'F2F COMP LAB 4'],
        ];
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/login'));
    }
}


