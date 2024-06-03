<?php

namespace App\Livewire\AcademicDirective;

use Livewire\Component;
use App\Models\ShiftingRequest;
use App\Models\Validation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShiftingRequestController extends Component
{

    public $student_id;
    public function mount()
    {
        $student = Auth::guard('student')->user();
        $this->student_id = $student->student_id;
    }

    public function render()
    {
        $request = ShiftingRequest::where('student_id', '=', Auth::guard('student')->user()->student_id);
        $requestExists = $request->exists();

        $requestStatus = "Pending";
        if ($requestExists) {
            $requestStatus = $request->first()->status;
        }

        $values = [
            'requestExists' => $requestExists,
            'requestStatus' => $requestStatus
        ];
        return view('livewire.academic-directives.shifting-request.shifting-request', $values)->layout('livewire.academic-directives.acaddirect-app');
    }

    public function pushRequest(Request $request)
    {
        $this->mount();
        $shiftingRequest = ShiftingRequest::where('student_id', $this->student_id)->firstOrFail();

        $shiftingRequest->date_of_request = Carbon::now();
        $shiftingRequest->status = 'Pending';

        foreach ($request->file() as $name => $file) {
            if ($request->hasFile($name)) {
                $path = $file->store('shifting-request-files', 'public');
                $shiftingRequest->{$name} = $path;
            }
        }

        $validation = Validation::where('student_id', $this->student_id)->first();
    
        if ($validation) {
            // Create or update the corresponding record in the study_plan_validations table
            $shift_request = ShiftingRequest::firstOrNew(['student_id' => $this->student_id]);
    
            // Assign the attributes from the validation object to the study_plan_validation object
            $shift_request->student_id = $validation->student_id; 
            $shift_request->study_plan = $validation->study_plan_course_code;

            $validation->delete();
        }

        $shiftingRequest->is_finalized = true; // Set the request as finalized
        $shiftingRequest->save();
        return redirect()->back();
    }
}
