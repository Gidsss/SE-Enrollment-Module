<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShiftingRequest;
use App\Models\DegreeProgram;
use Illuminate\Support\Facades\Auth;

class SelectProgram extends Component
{
    public $student_id;
    public $programs;
    public $selectedProgram;
    public $message = '';
    public $isDisabled = false;

    public function mount()
    {
        $student = Auth::guard('student')->user();
        $this->student_id = $student->student_id;
        $currentProgram = $student->degree_program;  // Fetch the current program of the student (this is the name of the column in the students table as I've defined in model)

        // Fetch all programs except the current one
        $this->programs = DegreeProgram::where('program_name', '!=', $currentProgram)->get();

        $existingRequest = ShiftingRequest::where('student_id', $this->student_id)->first();
        if ($existingRequest && $existingRequest->is_finalized) {
            $this->selectedProgram = $existingRequest->new_degree_program;
            $this->message = 'You have already finalized your program selection.';
            $this->isDisabled = true;
        }
    }

    public function saveNewProgram()
    {
        $shiftingRequest = ShiftingRequest::firstOrNew([
            'student_id' => $this->student_id
        ]);

        $shiftingRequest->new_degree_program = $this->selectedProgram;
        $shiftingRequest->status = 'Initial'; // Set an initial status
        $shiftingRequest->save();

        $this->message = 'Program successfully selected.';
    }

    public function render()
    {
        return view('livewire.select-program');
    }
}