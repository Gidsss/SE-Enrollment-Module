<?php

namespace App\Livewire\IrregularStudent\DownloadSER;

use Livewire\Component;

class DownloadIrregularSER extends Component
{
    public function render()
    {
        return view('livewire.irregular-student.download-ser.download-irregular-ser')->layout('livewire.irregular-student.irregular-app');
    }
}
