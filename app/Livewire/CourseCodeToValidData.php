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
        'CSC 0314', 'CSC 0314.1', 'CSC 0321', 'CSC 0321.1', 'CSC 0322', 'CSC 0322.1', 'CSC 0323', 'CSC 0323.1',
        'CSC 0324', 'CSC 0324.1', 'CSC 0325', 'CSC 0411', 'CSC 0412', 'CSC 0414', 'CSC 0414.1', 'CSC 0421',
        'CSC 0422', 'CSC 0422.1', 'CSC 0423',
    ];
    public $courses;
    public $tableBody = '';
    public $tableBodyId = '';
    public $totalUnits32 = 0;
    public $totalUnits42 = 0;
    public $totalUnits72 = 0;
    public $totalUnits62 = 0;
    public $units;

    public function mount()
    {
        $this->student_id = '2021-01299';
        $this->courses = Course::all();
        $this->tableBodyId = ''; 
        $this->updateTotalUnits32();
        $this->updateTotalUnits42();
        $this->updateTotalUnits72();
        $this->updateTotalUnits62();

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

        foreach ($validations as $validation) {
            if ($validation->studentid === '2021-12983' && $validation->yearlvl === 2) {
                $hasYear2 = true;
            }
            elseif ($validation->studentid === '2021-12983' && $validation->yearlvl === 3) {
                $hasYear3 = true;
            }
            elseif ($validation->studentid === '2021-12983' && $validation->yearlvl === 4) {
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
}