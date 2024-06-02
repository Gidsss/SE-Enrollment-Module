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

    public function pushCourseCodesFinal(){
        // Get the validation record for the current student
        $validation = Validation::where('student_id', $this->studentid)->first();
    
        if ($validation) {
            // Create or update the corresponding record in the study_plan_validations table
            $study_plan_validation = StudyPlanValidations::firstOrNew(['student_id' => $this->studentid]);
    
            // Assign the attributes from the validation object to the study_plan_validation object
            $study_plan_validation->student_id = $validation->student_id; 
            $study_plan_validation->year_level = $validation->yearlvl; 
            $study_plan_validation->status = $validation->status;
            $study_plan_validation->date_of_request = $validation->daterequest;
            $study_plan_validation->study_plan = $validation->study_plan_course_code;
    
            // Save the study_plan_validation object
            $study_plan_validation->save();

            $validation->delete();
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