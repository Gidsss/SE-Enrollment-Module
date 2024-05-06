<?php

namespace App\Livewire\AcademicDirective;

use Livewire\Component;
use App\Models\LOARequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('livewire.academic-directives.loa-request.loa-request')->layout('livewire.academic-directives.acaddirect-app');
    }

    public function pushRequest() {
        $request = new LoARequest();
        $request->student_id = $this->student_id;
        $request->student_name = $this->student_name;
        $request->year_level = $this->year_level;
        $request->date_of_request = Carbon::now();
        $request->status = 'Pending';
        $request->study_plan = "";

        $request->save();

    }
}
