<?php

namespace App\Livewire\IrregularStudent\ViewAssessment;

use Livewire\Component;

class ViewIrregularAssessment extends Component
{
    public function render()
    {
        return view('livewire.irregular-student.view-assessment.view-irregular-assessment')->layout('livewire.irregular-student.irregular-app');
    }
}
