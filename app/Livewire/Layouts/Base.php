<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use Livewire\WithPagination;

class Base extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.layouts.base');
    }
}
