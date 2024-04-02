<?php

namespace App\Livewire;

use Livewire\Component;

class StudyPlanValidations extends Component
{
    public function render()
    {
        return view('livewire.study-plan-validations')->layout('livewire.layouts.student-transactions.transaction-options');
    }
}
