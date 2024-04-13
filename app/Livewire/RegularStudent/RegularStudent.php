<?php

namespace App\Livewire\RegularStudent;  // NOTE: Update the namespace to match the folder path

use Livewire\Component;

class RegularStudent extends Component
{
    public function render()
    {
        return view('livewire.regular-student.regular-app');
    }
}
// Base livewire component (parent) for all regular student components