<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Validation;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Livewire;

class CourseData extends Component
{
    public $courses;
    public $dropdownContent3_1 = [];
    public $dropdownContent3_2 = [];
    public $dropdownContent4_1 = [];
    public $dropdownContent4_2 = [];
    public $tableBody = '';
    public $tableBodyId = '';
    public $totalUnits32 = 0;
    public $totalUnits42 = 0;
    public $totalUnits72 = 0;
    public $totalUnits62 = 0;
    public $dropdownContentRef;

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

    public function moveRowToDropdown($courseId, $tableBody)
    {
        $course = $this->courses->firstWhere('id', $courseId);

        if ($tableBody === 'tableBody32') {
            $this->dropdownContent3_1[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        } elseif ($tableBody === 'tableBody42') {
            $this->dropdownContent3_2[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        } elseif ($tableBody === 'tableBody72') {
            $this->dropdownContent4_1[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        } elseif ($tableBody === 'tableBody62') {
            $this->dropdownContent4_2[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        }

        $this->updateTotalUnits32();
        $this->updateTotalUnits42();
        $this->updateTotalUnits72();
        $this->updateTotalUnits62();
    }

    public function moveRowFromDropdownToTable($courseCode, $tableBodyId)
    {
        $courseIndex = null;
        $dropdownContentRef = null;
    
        switch ($tableBodyId) {
            case 'tableBody32':
                $dropdownContentRef = &$this->dropdownContent3_1;
                break;
            case 'tableBody42':
                $dropdownContentRef = &$this->dropdownContent3_2;
                break;
            case 'tableBody72':
                $dropdownContentRef = &$this->dropdownContent4_1;
                break;
            case 'tableBody62':
                $dropdownContentRef = &$this->dropdownContent4_2;
                break;
        }
    
        // Proceed only if $dropdownContentRef is defined
        if (isset($dropdownContentRef)) {
            foreach ($dropdownContentRef as $index => $course) {
                if ($course['course_code'] === $courseCode) {
                    $courseIndex = $index;
                    break;
                }
            }
    
            if ($courseIndex !== null) {
                $course = $dropdownContentRef[$courseIndex];
                $this->courses->push($course);
                unset($dropdownContentRef[$courseIndex]);
                $dropdownContentRef = array_values($dropdownContentRef); // Reset array keys
                $this->updateTotalUnits($tableBodyId, $course->units); // Pass tableBodyId for proper update
            } else {
                // Handle course not found in dropdown (optional: error message)
            }
        }
    }

    public function updateTotalUnits($tableBodyId, $unitChange)
    {
        $totalUnitsKey = str_replace('tableBody', 'totalUnits', $tableBodyId);
        if (property_exists($this, $totalUnitsKey)) {
            $this->$totalUnitsKey += $unitChange;
        }
    }


    public function render()
    {
        
        $courses = Course::all();
        $validations = Validation::all();

        // Initialize variables to track whether each year level is present in the validations
        $hasYear2 = false;
        $hasYear3 = false;
        $hasYear4 = false;


        $this->totalUnits32 = $this->courses->where('year_lvl', 3)->where('sem', 1)->sum('units');


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

        return view('livewire.course-data', [
            'courses' => $courses,
            'validations' => $validations,
            'hasYear2' => $hasYear2,
            'hasYear3' => $hasYear3,
            'hasYear4' => $hasYear4,
            'dropdownContent3_2' => $this->dropdownContent3_2,
            'dropdownContent3_1' => $this->dropdownContent3_1,
            'dropdownContent4_1' => $this->dropdownContent4_1,
            'dropdownContent4_1' => $this->dropdownContent4_2,
            'tableBodyId' => $this->tableBodyId,
            'totalUnits32' => $this->totalUnits32, 
            'totalUnits42' => $this->totalUnits42, 
            'totalUnits72' => $this->totalUnits72, 
            'totalUnits62' => $this->totalUnits62, 
        ]);
    }
    private function updateTotalUnits32()
    {
        $this->totalUnits32 = $this->courses->where('year_lvl', 3)->where('sem', 1)->sum('units');
    }

    private function updateTotalUnits42()
    {
        $this->totalUnits42 = $this->courses->where('year_lvl', 3)->where('sem', 2)->sum('units');
    }

    private function updateTotalUnits72()
    {
        $this->totalUnits72 = $this->courses->where('year_lvl', 4)->where('sem', 1)->sum('units');
    }

    private function updateTotalUnits62()
    {
        $this->totalUnits62 = $this->courses->where('year_lvl', 4)->where('sem', 2)->sum('units');
    }
}