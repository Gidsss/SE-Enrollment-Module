<?php

namespace App\Livewire;
use App\Models\Course;
use App\Models\Validation;
use Livewire\Component;

class CourseCodeToValidData extends Component
{
    public function render()
    {
        $courses = Course::all();
        $validations = Validation::all();
        
        return view('livewire.course-code-to-valid-data', [
            'courses' => $courses,
            'validations' => $validations,
        ]);
        
    }
}
