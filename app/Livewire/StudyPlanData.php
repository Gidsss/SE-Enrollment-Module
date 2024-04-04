<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\StudyPlanModel; // Adjust the namespace and model class

class StudyPlanData extends Component
{
    public function render()
    {
        $studyplans = StudyPlanModel::all(); // Fetch all study plans from the other database
        
        return view('livewire.studyplan-data', ['studyplans' => $studyplans]); // Pass $studyplans to the view
    }
}
