<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('student/students/list', function () {
    return view('student.students.list');
});

Route::get('student/dashboard', function () {
    return view('student.dashboard');
});

Route::get('student/regular_schedule', function() {
    return view('student.regular_schedule');
})->name('regular_schedule');

Route::get('student/regular_assessment', function() {
    return view('student.regular_assessment');
})->name('regular_assessment');

Route::get('student/regular_ser', function() {
    return view('student.regular_ser');
})->name('regular_ser');

Route::get('irregularstudent/irreg_schedule', function() {
    return view('irregularstudent.irreg_schedule');
})->name('irreg_schedule');

Route::get('irregularstudent/irreg_assessment', function() {
    return view('irregularstudent.irreg_assessment');
})->name('irreg_assessment');

Route::get('irregularstudent/irreg_ser', function() {
    return view('irregularstudent.irreg_ser');
})->name('irreg_ser');

/* dapat admin ung student for all di pa napapalitan */

Route::group(['middleware' => 'admin'], function (){
    Route::get('admin/dashboard', function () {
        return view('student.dashboard');
    });
});

Route::group(['middleware' => 'chairperson'], function (){
    Route::get('chairperson/dashboard', function () {
        return view('student.dashboard');
    });
});

Route::group(['middleware' => 'student'], function (){
    Route::get('student/dashboard', function () {
        return view('student.dashboard');
    });
});

Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('forgot-password', [AuthController::class, 'forgot_password']);
Route::get('register', [AuthController::class, 'register']);