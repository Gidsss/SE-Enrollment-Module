<?php

namespace App\Livewire\IrregularStudent\CreateStudyPlan;

use Livewire\Component;
use App\Models\StudyPlanValidations;
use App\Models\Validation;
use Illuminate\Support\Facades\Auth;

class CreateStudyPlan extends Component
{  
    public $studentId;
    public $Status;

    public function mount()
    {
        $this->studentId = Auth::guard('student')->user()->student_id;
        $study_plan_validation = StudyPlanValidations::where('student_id', $this->studentId)->first();
        if ($study_plan_validation) {
            $this->Status = $study_plan_validation->status;
        }
    }

    public function render()
    {
        $request = StudyPlanValidations::where('student_id', '=', Auth::guard('student')->user()->student_id);
        $tempExists = Validation::where('student_id', '=', Auth::guard('student')->user()->student_id)->exists();
        $requestExists = $request->exists();

        $requestStatus = "Pending";
        if($requestExists) {
            $requestStatus = $request->first()->status;
        }

        return view('livewire.irregular-student.create-study-plan.create-study-plan', [
            'requestExists'=>$requestExists,
            'requestStatus'=>$requestStatus
        ])->layout('livewire.irregular-student.irregular-app');
    }
}