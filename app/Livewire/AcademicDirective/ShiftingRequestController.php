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

        // Assuming files are part of the form submission
        foreach ($request->file() as $name => $file) {
            if ($request->hasFile($name)) {
                $path = $file->store('shifting-request-files');
                $shiftingRequest->{$name} = $path;
            }
        }

        $shiftingRequest->save();
        return redirect()->back();
    }
}
