<?php

namespace App\Livewire\IrregularStudent\DownloadSER;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class DownloadIrregularSER extends Component
{

    public $studentId;
    public $studentStatus;
    public $showModal = false;
    public $modalMessage = '';

    public function mount()
    {
        // Retrieve the authenticated student's data
        $student = Auth::guard('student')->user();
        if ($student) {
            $this->studentId = $student->id;
            $this->studentStatus = $student->enrolled ? 'Enrolled' : 'Enlisted';
        }
    }

    // Method to mark the student as enrolled
    public function markAsEnrolled()
    {
        if ($this->studentId) {
            $student = Student::find($this->studentId);

            if ($student) {
                if ($student->enrolled == 1) {
                    // Check if the student is already marked as enrolled
                    $this->modalMessage = 'You have already enrolled.';
                    $this->showModal = true;
                } else {
                    // Update the student's enrollment status
                    $student->enrolled = 1;
                    $student->save();

                    // Update the status property
                    $this->studentStatus = 'Enrolled';

                    // Set modal message and show modal
                    $this->modalMessage = 'You have successfully enrolled.';
                    $this->showModal = true;
                }
            } else {
                $this->modalMessage = 'Student not found.';
                $this->showModal = true;
            }
        } else {
            $this->modalMessage = 'No valid student ID provided.';
            $this->showModal = true;
        }
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
    public function render()
    {
        return view('livewire.irregular-student.download-ser.download-irregular-ser')->layout('livewire.irregular-student.irregular-app');
    }
}
