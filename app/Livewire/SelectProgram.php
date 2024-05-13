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
        $this->programs = DegreeProgram::all();

        // Check if a program has already been selected
        $existingRequest = ShiftingRequest::where('student_id', $this->student_id)->first();
        if ($existingRequest && $existingRequest->new_degree_program) {
            $this->selectedProgram = $existingRequest->new_degree_program;
            $this->isDisabled = true;
            $this->message = 'You have already selected a program.';
        }
    }

    public function saveNewProgram()
    {
        if ($this->isDisabled) {
            // If disabled, do not proceed to save
            $this->message = 'You cannot change the selected program.';
            return;
        }

        $shiftingRequest = ShiftingRequest::firstOrNew([
            'student_id' => $this->student_id
        ]);

        $shiftingRequest->new_degree_program = $this->selectedProgram;
        $shiftingRequest->status = 'Initial'; // Set an initial status or similar
        $shiftingRequest->save();

        $this->message = 'Program successfully selected.';
        $this->isDisabled = true;
    }

    public function render()
    {
        return view('livewire.select-program');
    }
}
