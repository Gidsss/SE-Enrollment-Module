<?php

namespace App\Livewire\AcademicDirective;

use Livewire\Component;

class LoaRequest extends Component
{
    public function render()
    {
        return view('livewire.academic-directives.loa-request.loa-request')->layout('livewire.academic-directives.acaddirect-app');
    }
}
