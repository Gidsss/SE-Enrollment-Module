<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AddDropRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class Downloader extends Component
{
    public function download($file)
    {
        $filepath = public_path(). DIRECTORY_SEPARATOR. "download". DIRECTORY_SEPARATOR .$file;
        return Storage::download($filepath, $file);
    }
}
