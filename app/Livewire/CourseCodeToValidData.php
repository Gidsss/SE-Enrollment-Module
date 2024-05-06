<?php

namespace App\Livewire;
use App\Models\Course;
use App\Models\Validation;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Livewire;

class CourseCodeToValidData extends Component
{
    public $allowedCourseCodes = [
    ];
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
    public $studyPlanCodes;

    public function mount()
    {
        $this->student_id = '2021287';
        $validations = Validation::where('studentid', $this->student_id)->first(); 
        if ($validations) {
            $this->studentName = $validations->student_name;
            $this->yearlvl = $validations->yearlvl;
            $this->studyPlanCodes = $validations->study_plan_course_code;
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

    public function render(){  
        $courses = Course::all();
        $validations = Validation::all();

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

        foreach ($validations as $validation) {
            if ($validation->studentid === $this->student_id && $validation->yearlvl === 2) {
                $hasYear2 = true;
            }
            elseif ($validation->studentid === $this->student_id && $validation->yearlvl === 3) {
                $hasYear3 = true;
            }
            elseif ($validation->studentid === $this->student_id && $validation->yearlvl === 4) {
                $hasYear4 = true;
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