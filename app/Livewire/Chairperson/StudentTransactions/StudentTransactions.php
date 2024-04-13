<?php

namespace App\Livewire\Chairperson\StudentTransactions;

use Livewire\Component;

class StudentTransactions extends Component
{
    public function render()
    {
        return view('livewire.chairperson.student-transactions.student-transactions')->layout('livewire.chairperson.transaction-options');
    }
}
