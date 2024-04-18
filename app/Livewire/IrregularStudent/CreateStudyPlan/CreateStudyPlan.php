<?php

namespace App\Livewire\IrregularStudent\CreateStudyPlan; // NOTE: Update the namespace to match the folder path

use Livewire\Component;

class CreateStudyPlan extends Component
{
    public function render()
    {
        return view('livewire.irregular-student.create-study-plan.create-study-plan')->layout('livewire.irregular-student.irregular-app');
    }
}
