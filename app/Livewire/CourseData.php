<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Validation;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Response;

class CourseData extends Component
{
    public $courses;
    public $dropdownContent3_1 = [];
    public $dropdownContent3_2 = [];
    public $tableBody = '';

    public function mount()
    {
        $this->student_id = '2021-01299';
        $this->courses = Course::all();
        $this->tableBodyId = ''; 
    }

    public function moveRowToDropdown($courseId, $tableBody)
    {
    
        $course = $this->courses->firstWhere('id', $courseId);

        if ($tableBody === 'tableBody32') {
            // Add the course to dropdownContent3_2
            $this->dropdownContent3_2[] = $course;
    
            // Remove from courses
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        } elseif ($tableBody === 'tableBody42') {
            // Add the course to dropdownContent3_2
            $this->dropdownContent3_1[] = $course;
    
            // Remove from courses
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
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
            
        ]);
    }
    
}