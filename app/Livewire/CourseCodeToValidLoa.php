<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Validation;
use App\Models\Student;
use App\Models\LOARequest;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Livewire;

class CourseCodeToValidLoa extends Component
{
    public $allowedCourseCodes = [];
    public $courses;
    public $tableBody = '';
    public $tableBodyId = '';
    public $totalUnits32 = 0;
    public $totalUnits42 = 0;
    public $totalUnits72 = 0;
    public $totalUnits62 = 0;
    public $totalUnits22 = 0;
    public $units;
    public $studentName;
    public $yearlvl;
    public $student_id;
    public $studyPlanCodes;
    public $studentId;
    public $yearLevel;
    public $status;


    protected $listeners = ['studentSelected' => 'updateStudentId']; 

    public function mount($studentId)
    {

        $this->student_id = $studentId; // Assigning the value passed from Livewire component invocation to $this->student_id
        $this->loadStudentData();

        $this->courses = Course::all();
        $this->tableBodyId = '';
        $this->updateTotalUnits32();
        $this->updateTotalUnits42();
        $this->updateTotalUnits72();
        $this->updateTotalUnits62();
        $this->updateTotalUnits22();
    }

    public function updateStudentId($studentId)
    {
        $this->studentId = $studentId;
        $this->loadStudentData();
    }


    public function loadStudentData()
    {
        $loa_request = LOARequest::where('student_id', $this->studentId)->first();
        if ($loa_request) {
            $this->studentName = $loa_request->student_name;
            $this->yearLevel = $loa_request->yearlvl;
            $this->studyPlanCodes = $loa_request->study_plan;
            $this->allowedCourseCodes = json_decode($this->studyPlanCodes);
            $this->status = $loa_request->status;
        }
    }

    public function updateTotalUnits($tableBodyId, $unitChange)
    {
        $totalUnitsKey = str_replace('tableBody', 'totalUnits', $tableBodyId);
        if (property_exists($this, $totalUnitsKey)) {
            $this->$totalUnitsKey += $unitChange;
        }
    }

    public function getDisplayedCourseCodes()
    {
        $courseCodes = $this->courses->filter(function ($course) {
            return in_array($course->course_code, $this->allowedCourseCodes);
        })->pluck('course_code');

        return $courseCodes;
    }

    public function pushReject(){
        // Get the validation record for the current student
        $loa_request = LOARequest::where('student_id', $this->student_id)->first();
    
        if ($loa_request) {
            $loa_request->status = 'Revise';
            $loa_request->save();
        }

    }

    public function pushApprove(){
        // Get the validation record for the current student
        $loa_request = LOARequest::where('student_id', $this->student_id)->first();
    
        if ($loa_request) {
            $loa_request->status = 'Approved';
            $loa_request->save();
        }

    }

    public function render(){  
        $courses = Course::all();
        $validations = Validation::all();
        $students = Student::all();
        $loa_request = LOARequest::all();

        $displayedCourseCodes = $this->getDisplayedCourseCodes();

        // Initialize variables to track whether each year level is present in the validations
        $hasYear2 = false;
        $hasYear3 = false;
        $hasYear4 = false;

        $totalUnits32 = 0;
        $totalUnits42 = 0;
        $totalUnits72 = 0;
        $totalUnits62 = 0;
        $totalUnits22 = 0;

        foreach ($students as $student) {
            if ($student->student_id === $this->student_id) {
                if ($student->year_level === 2 && !$hasYear2) {
                    $hasYear2 = true;
                    $hasYear3 = true;
                    $hasYear4 = true;
                } elseif ($student->year_level === 3 && !$hasYear3) {
                    $hasYear3 = true;
                    $hasYear4 = true;
                } elseif ($student->year_level=== 4 && !$hasYear4) {
                    $hasYear4 = true;
                }
            }
        }

        return view('livewire.course-code-to-valid-loa', [
            'validations' => $validations,
            'hasYear2' => $hasYear2,
            'hasYear3' => $hasYear3,
            'hasYear4' => $hasYear4,
            'totalUnits32' => $this->totalUnits32, 
            'totalUnits42' => $this->totalUnits42, 
            'totalUnits72' => $this->totalUnits72, 
            'totalUnits62' => $this->totalUnits62, 
            'displayedCourseCodes' => $displayedCourseCodes,
            'displayedCourseCodes' => $this->getDisplayedCourseCodes(),
            'studentName' => $this->studentName,
            'yearLevel' => $this->yearLevel,
            'studyPlanCodes' => $this->studyPlanCodes,
            'allowedCourseCodes' => $this->allowedCourseCodes,
            'status' => $this->status,
        ]);
    }
    private function updateTotalUnits32()
    {
        $this->totalUnits32 = $this->courses
            ->whereIn('course_code', $this->allowedCourseCodes)
            ->where('year_lvl', 3)
            ->where('sem', 1)
            ->sum('units');
    }

    private function updateTotalUnits42()
    {
        $this->totalUnits42 = $this->courses
            ->whereIn('course_code', $this->allowedCourseCodes)
            ->where('year_lvl', 3)
            ->where('sem', 2)
            ->sum('units');
    }

    private function updateTotalUnits72()
    {
        $this->totalUnits72 = $this->courses
            ->whereIn('course_code', $this->allowedCourseCodes)
            ->where('year_lvl', 4)
            ->where('sem', 1)
            ->sum('units');
    }

    private function updateTotalUnits62()
    {
        $this->totalUnits62 = $this->courses
            ->whereIn('course_code', $this->allowedCourseCodes)
            ->where('year_lvl', 4)
            ->where('sem', 2)
            ->sum('units');
    }

    private function updateTotalUnits22()
    {
        $this->totalUnits22 = $this->courses
            ->whereIn('course_code', $this->allowedCourseCodes)
            ->where('year_lvl', 2)
            ->where('sem', 2)
            ->sum('units');
    }
}

