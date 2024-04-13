<?php

namespace App\Livewire\RegularStudent\DownloadSER;  // NOTE: Update the namespace to match the folder path

use Livewire\Component;

class DownloadRegularSER extends Component
{
    public function render()
    {
        return view('livewire.regular-student.download-ser.download-regular-ser')->layout('livewire.regular-student.regular-app');
    }
}
