<?php

namespace App\Livewire\RegularStudent\CheckSchedule;  // NOTE: Update the namespace to match the folder path

use Livewire\Component;

class CheckSchedule extends Component
{
    public function render()
    {
        return view('livewire.regular-student.check-schedule.regular-schedule')->layout('livewire.regular-student.regular-app');
    }
}
