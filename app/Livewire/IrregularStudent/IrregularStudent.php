<?php

namespace App\Livewire\IrregularStudent;  // NOTE: Update the namespace to match the folder path

use Livewire\Component;

class IrregularStudent extends Component
{
    public function render()
    {
        return view('livewire.irregular-student.irregular-app');
    }
}
// Base livewire component (parent) for all irregular student components