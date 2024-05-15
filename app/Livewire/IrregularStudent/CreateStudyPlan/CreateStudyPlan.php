<?php

namespace App\Livewire\IrregularStudent\CreateStudyPlan;

use Livewire\Component;
use App\Models\StudyPlanValidations;
use Illuminate\Support\Facades\Auth;

class CreateStudyPlan extends Component
{  
    public $studentId;
    public $Status;
    public $hasPending = false;
    public $hasReject = false;
    public $hasApprove = false;

    public function mount()
    {
        $this->studentId = Auth::guard('student')->user()->student_id;
        $study_plan_validation = StudyPlanValidations::where('student_id', $this->studentId)->first();
        if ($study_plan_validation) {
            $this->Status = $study_plan_validation->status;
            $this->setStatusFlags();
        }
    }

    public function setStatusFlags()
    {
        if ($this->Status === 'Pending') {
            $this->hasPending = true;
        } elseif ($this->Status === 'Revise') {
            $this->hasReject = true;
        } elseif ($this->Status === 'Approved') {
            $this->hasApprove = true;
        }
    }

    public function render()
    {
        return view('livewire.irregular-student.create-study-plan.create-study-plan', [
            'hasPending' => $this->hasPending,
            'hasReject' => $this->hasReject,
            'hasApprove' => $this->hasApprove,
        ])->layout('livewire.irregular-student.irregular-app');
    }
}