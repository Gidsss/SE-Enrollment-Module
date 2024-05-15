<?php

namespace App\Livewire\IrregularStudent\CreateStudyPlan;

use Livewire\Component;
use App\Models\StudyPlanValidations;

class CreateStudyPlan extends Component
{  
    public $Status;

    public function mount()
    {
        $this->student_id = '202120095';
        $study_plan_validation = StudyPlanValidations::where('student_id', $this->student_id)->first();
        if ($study_plan_validation) {
            $this->Status = $study_plan_validation->status;
        }
    }

    public function render()
    {
        return view('livewire.irregular-student.create-study-plan.create-study-plan', [
            'hasPending' => $this->Status === 'Pending',
            'hasReject' => $this->Status === 'Revise',
            'hasApprove' => $this->Status === 'Approved',
        ])->layout('livewire.irregular-student.irregular-app');
    }
}