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

    public function render()
    {
        $courses = Course::all();
        $validations = Validation::all();
        
        return view('livewire.course-data', [
            'courses' => $courses,
            'validations' => $validations,
        ]);
    }
}