<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\FirstYearContainer;
class StudentEnlistment extends Component
{
    public function render()
    {
        return view('livewire.student-enlistment')->layout('livewire.layouts.chairperson');
    }
}
// Nandito yung mga functions a.k.a logic (component parent)