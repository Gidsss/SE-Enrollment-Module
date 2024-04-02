<?php

namespace App\Livewire;

use Livewire\Component;

class Transactions extends Component
{
    public function render()
    {
        return view('livewire.transactions')->layout('livewire.layouts.student-transactions.transaction-options');
    }
}
