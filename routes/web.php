<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\RegularStudentMiddleware;
use App\Http\Middleware\IrregularStudentMiddleware;
use App\Http\Middleware\AcademicDirectiveMiddleware;

// Chairperson Livewire Components
use App\Livewire\Chairperson\BlockClassesManagement\BlockClassesManagement;
use App\Livewire\Chairperson\ClassCreation\ClassCreation;
use App\Livewire\Chairperson\StudentEnlistment\StudentEnlistment;
use App\Livewire\Chairperson\StudentTransactions\StudentTransactions;
use App\Livewire\Chairperson\StudentTransactions\Options\StudyPlanValidation;
use App\Livewire\Chairperson\StudentTransactions\Options\ShiftingRequests;
use App\Livewire\Chairperson\StudentTransactions\Options\AddDropRequests;
use App\Livewire\Chairperson\StudentTransactions\Options\LOARequests;

// Irregular Student Components
use App\Livewire\IrregularStudent\CreateStudyPlan\CreateStudyPlan;
use App\Livewire\CourseData;
use App\Livewire\IrregularStudent\DownloadSER\DownloadIrregularSER;
use App\Livewire\IrregularStudent\ViewAssessment\ViewIrregularAssessment;
use App\Livewire\IrregularStudent\IrregAssessment\IrregAssessment;
use App\Livewire\IrregularStudent\IrregSER\IrregSER;
use App\Livewire\CourseCodeShift;

// Regular Student Components
use App\Livewire\RegularStudent\CheckSchedule\CheckSchedule;
use App\Livewire\RegularStudent\DownloadSER\DownloadRegularSER;
use App\Livewire\RegularStudent\ViewAssessment\ViewRegularAssessment;

// Academic Directive Components
use App\Livewire\AcademicDirective\LoaRequestController;
use App\Livewire\AcademicDirective\ShiftingRequestController;
use App\Livewire\AcademicDirective\AddDropRequestController;

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

/* Chairperson Pages */

Route::get('/chairperson/create_class', ClassCreation::class); // chairperson class creation

Route::get('/chairperson/block_classes', BlockClassesManagement::class); // chairperson blockclasses management

Route::get('/chairperson/student_enlistment', StudentEnlistment::class); // chairperson student enlistment

Route::get('/chairperson/student_transaction', StudentTransactions::class); // chairperson transactions

Route::get('/chairperson/student_transaction/study_plan_validations', StudyPlanValidation::class)->name('study_plan_validations'); // chairperson study plan validations (to be moved as part of process)

Route::get('/chairperson/student_transaction/shifting_requests_validations', ShiftingRequests::class)->name('shifting_requests_validations'); // chairperson shifting requests validations

Route::get('/chairperson/student_transaction/add_drop_requests', AddDropRequests::class)->name('add_drop_requests'); // chairperson add/drop requests

Route::get('/chairperson/student_transaction/loa_requests', LOARequests::class)->name('loa_requests'); // chairperson loa requests

/* Necessary Components */

Route::get('/generate-pdf', [AuthController::class, 'genpdf']); // for pdf generation 

/* Authentication */

Route::get('/', [AuthController::class, 'login']);
Route::post('/student/login', [AuthController::class, 'AuthLogin'])->name('login.submit');
Route::get('/student/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'forgot_password']);

/* Create a middleware for regular & irregular student (not yet implemented) */

Route::middleware([RegularStudentMiddleware::class])->group(function () {
    Route::get('/regular_student/regular_schedule', CheckSchedule::class)->name('regular_schedule'); // regular student schedule
    Route::get('/regular_student/regular_assessment', ViewRegularAssessment::class)->name('regular_assessment'); // regular student assessment
    Route::get('/regular_student/regular_ser', DownloadRegularSER::class)->name('regular_ser'); // regular student ser
});

/* Irregular Student Pages with middleware */

Route::middleware([IrregularStudentMiddleware::class])->group(function () {
    Route::get('/irregular_student/irreg_schedule', CreateStudyPlan::class)->name('irreg_schedule'); // irregular student schedule
    Route::post('/irregular_student/irreg_schedule/post', [CourseData::class, 'pushCourseCodesFinal'])->name('study_plan.post'); // loa request post
    Route::get('/irregular_student/irreg_assessment', ViewIrregularAssessment::class)->name('irreg_assessment'); // irregular student assessment
    Route::get('/irregular_student/irreg_ser', DownloadIrregularSER::class)->name('irreg_ser'); // irregular student ser
});

/* Academic Directives with middleware */
Route::middleware([AcademicDirectiveMiddleware::class])->group(function () {
    Route::get('/academic_directive/loa_request', LoaRequestController::class)->name('loa_request'); // loa request
    Route::post('/academic_directive/loa_request/post', [LoaRequestController::class, 'pushRequest'])->name('loa_request.post'); // loa request post
    Route::get('/academic_directive/shifting_request', ShiftingRequestController::class)->name('shifting_request'); // shifting request
    Route::post('/academic_directive/shifting_request/post', [ShiftingRequestController::class, 'pushRequest'])->name('shifting_request.post'); // shifting request post
    Route::get('/academic_directive/add_drop_request', AddDropRequestController::class)->name('add_drop_request'); // add drop request
    Route::post('/academic_directive/add_drop_request/post', [AddDropRequestController::class, 'pushRequest'])->name('add_drop_request.post'); // add drop request post

});