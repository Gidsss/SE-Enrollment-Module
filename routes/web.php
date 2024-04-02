<?php

use App\Livewire\FirstYearContainer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\StudentsComponent;
use App\Livewire\StudentEnlistment;
use App\Livewire\Transactions;
use App\Livewire\StudyPlanValidations;
use App\Livewire\ShiftingRequestsValidations;

Route::get('/students', StudentsComponent::class);
Route::get('/chairperson/student_enlistment', StudentEnlistment::class);
Route::get('/chairperson/student_transaction', Transactions::class);
Route::get('/chairperson/student_transaction/study_plan_validations', StudyPlanValidations::class)->name('study_plan_validations');
Route::get('/chairperson/student_transaction/shifting_requests_validations', ShiftingRequestsValidations::class)->name('shifting_requests_validations');
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

Route::get('chairperson/create_class', function() {
    return view('chairperson.create_class');
});

Route::get('chairperson/block_classes', function() {
    return view('chairperson.block_classes');
});




/* dapat admin ung student for all di pa napapalitan */

Route::group(['middleware' => 'admin'], function (){
    Route::get('admin/dashboard', function () {
        return view('student.dashboard');
    });
});

Route::get('/generate-pdf', [AuthController::class,'genpdf']);


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