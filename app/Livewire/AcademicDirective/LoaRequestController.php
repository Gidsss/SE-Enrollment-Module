<?php

namespace App\Livewire\AcademicDirective;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\LOARequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoaRequestController extends Component
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
        $request = LoARequest::where('student_id', '=', Auth::guard('student')->user()->student_id);
        $requestExists = $request->exists();

        $requestStatus = "Pending";
        if($requestExists) {
            $requestStatus = $request->first()->status;
        }

        $values = [
            'requestExists'=>$requestExists,
            'requestStatus'=>$requestStatus
        ];
        return view('livewire.academic-directives.loa-request.loa-request', $values)->layout('livewire.academic-directives.acaddirect-app');
    }

    public function pushRequest(Request $request) {
        $this->mount();

        # Basic Info
        $loaRequest = LoARequest::where('student_id', $this->student_id)->first();
        $loaRequest = $loaRequest == null? new LoARequest(): $loaRequest;
        $loaRequest->student_id = $this->student_id;
        $loaRequest->year_level = $this->year_level;
        $loaRequest->date_of_request = Carbon::now();
        $loaRequest->status = 'Pending';
        $loaRequest->study_plan = "";

        $files = $request->all();
        foreach (array_slice($files, 1) as $name => $file) {
            $path = $file->store('loa-request-files', 'public');
            $loaRequest->{$name} = $path;
        }

        $loaRequest->save();

        return redirect()->back();
    }
}
