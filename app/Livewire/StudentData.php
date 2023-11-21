<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentData extends Component
{
    public function render()
    {
        $students = Student::all(); 
        
        return view('livewire.student-data', ['students' => $students]);
    }
}
