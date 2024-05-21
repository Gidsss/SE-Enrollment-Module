<?php

namespace App\Livewire\AcademicDirective;

use Livewire\Component;
use App\Models\AddDropRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddDropRequestController extends Component
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
        $request = AddDropRequest::where('student_id', '=', Auth::guard('student')->user()->student_id);
        $requestExists = $request->exists();

        $requestStatus = "Pending";
        if($requestExists) {
            $requestStatus = $request->first()->status;
        }

        $values = [
            'requestExists'=>$requestExists,
            'requestStatus'=>$requestStatus
        ];
        return view('livewire.academic-directives.add-drop-request.add-drop-request', $values)->layout('livewire.academic-directives.acaddirect-app');
    }

    public function pushRequest(Request $request) {
        $this->mount();

        # Basic Info
        $addDropRequest = AddDropRequest::where('student_id', $this->student_id)->first();
        $addDropRequest = $addDropRequest == null ? new AddDropRequest() : $addDropRequest;
        $addDropRequest->student_id = $this->student_id;
        $addDropRequest->date_of_request = Carbon::now();
        $addDropRequest->status = 'Pending';
        $addDropRequest->study_plan = "";

        $files = $request->all();
        foreach (array_slice($files, 1) as $name => $file) {
            $path = $file->store('add-drop-request-files', 'public');
            $addDropRequest->{$name} = $path;
        }

        $addDropRequest->save();

        return redirect()->back();
    }
}
