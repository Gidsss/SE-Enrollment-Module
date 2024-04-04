<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Validation;

class ValidationData extends Component
{
    public function render()
    {
        $validations = Validation::all(); // Fetch all validations
        
        return view('livewire.validation-data', ['validations' => $validations]); // Pass $validations to the view
    }
}
