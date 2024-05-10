<?php

namespace App\Livewire\AcademicDirective;

use Livewire\Component;
use App\Models\ShiftingRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShiftingRequestController extends Component
{

    public $student_id;
    public $student_name;
    public $year_level;

    public function mount()
    {
        $student = Auth::guard('student')->user();
        $this->student_id = $student->student_id;
        $this->student_name = $student->student_name;
        $this->year_level = $student->year_level;
    }

    public function render()
    {
        $request = ShiftingRequest::where('student_id', '=', Auth::guard('student')->user()->student_id);
        $requestExists = $request->exists();

        $requestStatus = "Pending";
        if($requestExists) {
            $requestStatus = $request->first()->status;
        }

        $values = [
            'requestExists'=>$requestExists,
            'requestStatus'=>$requestStatus
        ];
        return view('livewire.academic-directives.shifting-request.shifting-request', $values)->layout('livewire.academic-directives.acaddirect-app');
    }

    public function pushRequest(Request $request) {
        $this->mount();

        # Basic Info
        $shiftingRequest = new ShiftingRequest();
        $shiftingRequest->student_id = $this->student_id;
        $shiftingRequest->student_name = $this->student_name;
        $shiftingRequest->year_level = $this->year_level;
        $shiftingRequest->date_of_request = Carbon::now();
        $shiftingRequest->status = 'Pending';
        $shiftingRequest->study_plan = "";

        $files = $request->all();
        foreach (array_slice($files, 1) as $name => $file) {
            $path = $file->store('shifting-request-files');
            $shiftingRequest->{$name} = $path;
        }

        $shiftingRequest->save();

        return redirect()->back();
    }
}
