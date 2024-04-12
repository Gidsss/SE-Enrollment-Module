<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\StudyPlanValidations;
use Livewire\WithPagination;

class StudyPlanValidation extends Component
{
    use WithPagination;
    
    public $student_id, $student_name, $year_level, $status, $date_of_request, $study_plan;
    public $student_edit_id, $student_delete_id;
    public $view_student_id, $view_student_name, $view_student_year_level, $view_status;
    public $bulk_student_status, $students, $lastPage;
    public $year;
    public $bulkEditStudentIds = [];
    public $selectedStudents = [];
    public $selectAll = false;
    public $perPage = 10;
    public $currentPage = 1;
    public $numStudents;
    public $totalStudents;

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
        $this->totalStudents = StudyPlanValidations::count();
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
        $total = StudyPlanValidations::count();
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
            return StudyPlanValidations::orderBy('student_name', $orderByDirection)
                ->skip($offset)
                ->take($this->perPage)
                ->get();
        }

    public function getPaginatedStudentsByYear($orderByDirection, $offset)
        {
            return StudyPlanValidations::orderBy('year_level', $orderByDirection)
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
            $student = StudyPlanValidations::findOrFail($studentId);
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
        $student = StudyPlanValidations::where('id', $id)->first();

        $this->student_edit_id = $student->id;
        $this->student_id = $student->student_id;
        $this->student_name = $student->student_name;
        $this->year_level = $student->year_level;
        $this->status = $student->status;
        $this->date_of_request = $student->date_of_request;
        $this->study_plan = $student->study_plan;
        $this->dispatch('show-edit-student-modal',);
    }
    
    public function editStudentData()
    {
        //on form submit validation
        $this->validate([
             'student_id' => 'required|unique:students,student_id,'.$this->student_edit_id,
            'student_name' => 'required',
            'year_level'=> 'required|integer',
            'status' => 'required|string|in:Pending,Approved,Revise,Unhandled',
            'date_of_request' => 'required|date',
            'study_plan' => 'required|string',
        ]);

        // Find the student by ID
        $student = StudyPlanValidations::findOrFail($this->student_edit_id);

        // Update student's information
        $student->update([
            'student_id' => $this->student_id,
            'student_name' => $this->student_name,
            'year_level' => $this->year_level,
            'status' => $this->status,
            'date_of_request' => $this->date_of_request,
            'study_plan' => $this->study_plan,
        ]);

        // Flash message
        session()->flash('message', 'Student has been updated successfully');

        // Close modal
        $this->dispatch('close-modal');
    }

    public function cancel()
    {
        $this->student_delete_id = '';
    }

    public function viewStudentDetails($id)
    {
        $student = StudyPlanValidations::findOrFail($id);

        $this->view_student_id = $student->student_id;
        $this->view_student_name = $student->student_name;
        $this->view_student_year_level = $student->year_level;
        $this->view_status = $student->status;
        $this->date_of_request = $student->date_of_request;
        $this->dispatch('show-view-student-modal');
    }

    public function closeViewStudentModal()
        {
            $this->view_student_id = '';
            $this->view_student_name = '';
            $this->view_student_year_level = '';
            $this->view_status = '';
            $this->date_of_request = '';
            $this->dispatch('close-view-student-modal');
        }

    public function render()
        {
            return view('livewire.study-plan-validation')->layout('livewire.layouts.student-transactions.transaction-options');
        }
}

    
