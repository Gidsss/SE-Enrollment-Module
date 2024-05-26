<?php

namespace App\Livewire\Chairperson\StudentTransactions\Options;

use App\Models\AddDropRequest;
use Livewire\Component;
use Livewire\WithPagination;

class AddDropRequests extends Component
{
    use WithPagination;

    public $student_id, $student_name, $year_level, $status, $date_of_request, $addDropDetails, $reason;
    public $view_student_id, $view_student_name, $view_student_year_level, $view_status;
    public $bulk_student_status, $students, $lastPage;
    public $currentPage = 1;
    public $perPage = 10;
    public $totalStudents;
    public $activeButton = '';
    public $hasAddDrop = false;
    public $addedClasses = [];
    public $droppedClasses = [];

    // Input fields validation rules
    protected $rules = [
        'student_id' => 'required|unique:students|numeric',
        'student_name' => 'required|string|max:255',
        'year_level' => 'required|integer',
        'date_of_request' => 'required|date',
        'status' => 'required|string',
    ];

    public function mount()
    {
        $this->getPaginatedStudents();
        $this->calculateTotalStudents();
    }

    public function calculateTotalStudents()
    {
        $this->totalStudents = AddDropRequest::count();
    }

    public $sortColumn = 'student_name'; // Default sorting column
    public $sortDirection = 'asc'; // Default sorting direction

    public function sortStudents($column)
    {
        // If the same column is clicked again, reverse the sorting direction
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            // Otherwise, default to ascending direction
            $this->sortDirection = 'asc';
        }

        $this->sortColumn = $column; // Update the sorting column

        // Fetch paginated students with the updated sorting
        $this->getPaginatedStudents();
    }

    public function getPaginatedStudents()
    {
        $total = AddDropRequest::count();
        $this->lastPage = ceil($total / $this->perPage);

        $this->currentPage = min(max(1, $this->currentPage), $this->lastPage);
        $offset = ($this->currentPage - 1) * $this->perPage;

        // Adjust the ordering for descending sorting
        $orderByDirection = $this->sortDirection === 'desc' ? 'DESC' : 'ASC';

        if ($this->sortColumn === 'year_level') {
            // Fetch first-year students sorted by student block
            $this->students = $this->getPaginatedStudentsByYear($orderByDirection, $offset);
        } else {
            // Fetch first-year students sorted by student name
            $this->students = $this->getPaginatedStudentsByName($orderByDirection, $offset);
        }
    }

    public function nextPage($pageName = 'page')
    {
        $this->currentPage++;
        $this->getPaginatedStudents();
    }

    public function previousPage($pageName = 'page')
    {
        $this->currentPage--;
        $this->getPaginatedStudents();
    }

    public function getPaginatedStudentsByName($orderByDirection, $offset)
    {
        return AddDropRequest::join("students", "add_drop_requests.student_id", "=", "students.student_id")
            ->orderBy('student_name', $orderByDirection)
            ->skip($offset)
            ->take($this->perPage)
            ->get();
    }

    public function getPaginatedStudentsByYear($orderByDirection, $offset)
    {
        return AddDropRequest::join("students", "add_drop_requests.student_id", "=", "students.student_id")
            ->orderBy('year_level', $orderByDirection)
            ->skip($offset)
            ->take($this->perPage)
            ->get();
    }

    public function toggleStudentSelection($studentId)
    {
        if (in_array($studentId, $this->selectedStudents)) {
            // Remove the student ID from the selectedStudents array if it's already selected
            $this->selectedStudents = array_diff($this->selectedStudents, [$studentId]);
        } else {
            // Add the student ID to the selectedStudents array if it's not already selected
            $this->selectedStudents[] = $studentId;
        }
    }

    public function selectStudentsForBatchUpdate()
    {
        // Check if at least one student is selected
        if (count($this->selectedStudents) < 1) {
            // Show an error message indicating that no students are selected
            session()->flash('error', 'Please select at least more than one student for batch update.');
            return;
        }

        // Check if more than one student is selected
        if (count($this->selectedStudents) === 1) {
            // Show an error message indicating that multiple students need to be selected
            session()->flash('error', 'Please select more than one student for batch update.');
            return;
        }

        // Store the selected student IDs in the component property for later use
        $this->bulkEditStudentIds = $this->selectedStudents;

        // Now, open the bulk edit modal
        $this->dispatch('open-bulk-edit-modal');
    }

    public function applyBatchUpdate()
    {
        // Validate if bulk_student_status is not empty
        $this->validate([
            'bulk_student_status' => 'required|string|in:Pending,Approved,Revise,Unhandled',
        ], [
            'bulk_student_status.required' => 'Status input is required.',
        ]);

        // Check if any students are selected for bulk edit
        if (count($this->bulkEditStudentIds) < 1) {
            // Show an error message indicating that no students are selected
            session()->flash('error', 'Please select at least more than one student for batch update.');
            return;
        }

        // Apply changes to selected students without considering block capacity
        foreach ($this->bulkEditStudentIds as $studentId) {
            $student = AddDropRequest::findOrFail($studentId);
            $student->update([
                'status' => $this->bulk_student_status,
            ]);
        }

        // Flash success message
        session()->flash('message', 'Batch update applied successfully.');

        // Clear bulk edit properties
        $this->bulk_student_status = '';
        $this->bulkEditStudentIds = [];

        // Close bulk edit modal
        $this->dispatch('close-modal');
    }

    public function closeBatchUpdateModal()
    {
        // Clear any selected student IDs and reset bulk edit properties
        $this->selectedStudents = [];
        // Now, close the bulk edit modal
        $this->dispatch('close-modal');
    }

    public function updated($field)
    {
        $this->validateOnly($field, $this->rules);
    }

    public function editStudents($id)
    {
        $student = AddDropRequest::where('student_id', $id)->first();

        $this->student_edit_id = $student->id;
        $this->student_id = $student->student_id;
        $this->student_name = $student->student_name;
        $this->year_level = $student->year_level;
        $this->status = $student->status;
        $this->date_of_request = $student->date_of_request;
        $this->parseAddDropDetails($student->add_drop_form);

        $this->dispatch('show-edit-student-modal');
    }

    public function viewStudentDetails($id)
    {
        $student = AddDropRequest::findOrFail($id);

        $this->view_student_id = $student->student_id;
        $this->view_student_name = $student->student_name;
        $this->view_student_year_level = $student->year_level;
        $this->view_status = $student->status;
        $this->date_of_request = $student->date_of_request;
        $this->parseAddDropDetails($student->add_drop_form);

        $this->dispatch('show-view-student-modal');
    }

    public function closeViewStudentModal()
    {
        $this->view_student_id = '';
        $this->view_student_name = '';
        $this->view_student_year_level = '';
        $this->view_status = '';
        $this->date_of_request = '';
        $this->addedClasses = [];
        $this->droppedClasses = [];
        $this->dispatch('close-view-student-modal');
    }

    public function changeColor($button)
    {
        $this->activeButton = $button;
    }

    public function parseAddDropDetails($addDropDetails)
    {
        $details = json_decode($addDropDetails, true);
        $this->addedClasses = $details['added'] ?? [];
        $this->droppedClasses = $details['dropped'] ?? [];
        $this->reason = $details['reason'] ?? '';
    }

    public function render()
    {
        $this->hasAddDrop = ($this->activeButton === 'adddrop');

        return view('livewire.chairperson.student-transactions.options.add-drop-requests', [
            'students' => $this->students,
            'totalStudents' => $this->totalStudents,
            'currentPage' => $this->currentPage,
            'lastPage' => $this->lastPage,
            'hasAddDrop' => $this->hasAddDrop,
            'addedClasses' => $this->addedClasses,
            'droppedClasses' => $this->droppedClasses,
            'reason' => $this->reason,
        ])->layout('livewire.chairperson.transaction-options');
    }
}
