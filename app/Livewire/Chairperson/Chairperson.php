<?php

namespace App\Livewire\Chairperson;  // NOTE: Update the namespace to match the folder path

use Livewire\Component;

class Chairperson extends Component
{
    public function render()
    {
        return view('livewire.chairperson.chairperson');
    }
}
// Base livewire component (grandparent) for all chairperson components