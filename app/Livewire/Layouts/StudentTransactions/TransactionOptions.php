<?php

namespace App\Livewire\Layouts\StudentTransactions;

use Livewire\Component;

class TransactionOptions extends Component
{
    public function render()
    {
        return view('livewire.layouts.student-transactions.transaction-options');
    }
}
// base livewire component (grandparent) for all student transaction components (add drop etc)