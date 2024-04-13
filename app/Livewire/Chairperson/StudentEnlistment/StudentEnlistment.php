<?php

namespace App\Livewire\Chairperson\StudentEnlistment;

use Livewire\Component;

class StudentEnlistment extends Component
{
    public function render()
    {
        return view('livewire.chairperson.student-enlistment.student-enlistment')->layout('livewire.chairperson.chairperson');
    }
}
// Nandito yung mga functions a.k.a logic (component parent)