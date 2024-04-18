<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validation;

class ValidationController extends Controller
{
    public function showValidation(Request $request, $id)
    {
        $validation = Validation::find($id); // Fetch the validation data from the database

        // Retrieve the LONGBLOB data
        $blobData = $validation->blob_data;

        // Handle the blob data based on your needs
        // For example, you might want to:
        // - Display the blob data as an image
        // - Download the blob data as a file
        // - Perform other actions with the blob data

        // Here's an example of displaying the blob data as an image:
        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'blob_data' => base64_encode($blobData),
            ]);
        } else {
            return view('your_view', ['validation' => $validation]);
        }
    }
}
