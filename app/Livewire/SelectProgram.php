<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShiftingRequest;
use App\Models\DegreeProgram;
use Carbon\Carbon;
use Illuminate\Http\Request;
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

        $existingRequest = ShiftingRequest::where('student_id', $this->student_id)->first();
        if ($existingRequest && $existingRequest->is_finalized) {
            $this->selectedProgram = $existingRequest->new_degree_program;
            $this->message = 'You have already finalized your program selection.';
            $this->isDisabled = true; // Disable if the request is finalized
        }
    }
    public function saveNewProgram()
    {
        $shiftingRequest = ShiftingRequest::firstOrNew([
            'student_id' => $this->student_id
        ]);

        $shiftingRequest->new_degree_program = $this->selectedProgram;
        $shiftingRequest->status = 'Initial'; // Set an initial status or similar
        $shiftingRequest->save();

        $this->message = 'Program successfully selected.';

    }
    public function render()
    {
        return view('livewire.select-program');
    }
}
