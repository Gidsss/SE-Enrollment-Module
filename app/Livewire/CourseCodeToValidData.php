<?php

namespace App\Livewire;
use App\Models\Course;
use App\Models\Validation;
use App\Models\Student;
use App\Models\StudyPlanValidations;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Livewire;

class CourseCodeToValidData extends Component
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

    public function mount($studentId)
    {
        $this->student_id = $studentId; // Assigning the value passed from Livewire component invocation to $this->student_id
        $study_plan_validations = StudyPlanValidations::where('student_id', $this->student_id)->first();
        if ($study_plan_validations) {
            $this->studentName = $study_plan_validations->student_name;
            $this->yearlvl = $study_plan_validations->yearlvl;
            $this->studyPlanCodes = $study_plan_validations->study_plan;
            $this->allowedCourseCodes = json_decode($this->studyPlanCodes);
        }
        $this->courses = Course::all();
        $this->tableBodyId = '';
        $this->updateTotalUnits32();
        $this->updateTotalUnits42();
        $this->updateTotalUnits72();
        $this->updateTotalUnits62();
        $this->updateTotalUnits22();
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
        $study_plan_validations = StudyPlanValidations::where('student_id', $this->student_id)->first();
    
        if ($study_plan_validations) {
            $study_plan_validations->status = 'Revise';
            $study_plan_validations->save();
        }

    }

    public function pushApprove(){
        // Get the validation record for the current student
        $study_plan_validations = StudyPlanValidations::where('student_id', $this->student_id)->first();
    
        if ($study_plan_validations) {
            $study_plan_validations->status = 'Approved';
            $study_plan_validations->save();
        }

    }

    public function render(){  
        $courses = Course::all();
        $validations = Validation::all();
        $students = Student::all();
        $study_plan_validations = StudyPlanValidations::all();

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

        foreach ($study_plan_validations as $study_plan_validation) {
            if ($study_plan_validation->student_id === $this->student_id) {
                if ($study_plan_validation->year_level === 2 && !$hasYear2) {
                    $hasYear2 = true;
                    $hasYear3 = true;
                    $hasYear4 = true;
                } elseif ($study_plan_validation->year_level === 3 && !$hasYear3) {
                    $hasYear3 = true;
                    $hasYear4 = true;
                } elseif ($study_plan_validation->year_level=== 4 && !$hasYear4) {
                    $hasYear4 = true;
                }
            }
        }

        return view('livewire.course-code-to-valid-data', [
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