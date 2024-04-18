<?php

namespace App\Livewire\RegularStudent\ViewAssessment;  // NOTE: Update the namespace to match the folder path

use Livewire\Component;

class ViewRegularAssessment extends Component
{
    public function render()
    {
        return view('livewire.regular-student.view-assessment.view-regular-assessment')->layout('livewire.regular-student.regular-app');
    }
}
