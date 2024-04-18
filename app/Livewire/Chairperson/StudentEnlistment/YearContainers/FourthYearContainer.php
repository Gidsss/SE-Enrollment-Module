<?php

namespace App\Livewire\Chairperson\StudentEnlistment\YearContainers;  

use Livewire\Component;
use App\Models\Student;
use App\Models\BlockCapacity;
use Livewire\WithPagination;

class FourthYearContainer extends Component
{
    use WithPagination;
    
    public $student_id, $student_name, $student_type, $student_block;
    public $student_edit_id, $student_delete_id;
    public $view_student_id, $view_student_name, $view_student_type, $view_student_block;
    public $bulk_student_block, $students, $lastPage;
    public $year;
    public $bulkEditStudentIds = [];
    public $selectedStudents = [];
    public $selectAll = false;
    public $perPage = 10;
    public $currentPage = 1;
    public $numStudents;
    public $blockCapacities = []; // Variable to store the block capacity input by the user
    public $commonBlockCapacity;
    public $fourthYearStudents;
    // Input fields validation rules
    protected $rules = [
        'student_id' => 'required|unique:students|numeric',
        'student_name' => 'required|string|max:255',
        'student_type' => 'required|string|max:255',
        'student_block' => 'required|integer',
    ];

    
    public function mount()
    {
        $this->blockCapacities = [1 => null, 2 => null, 3 => null, 4 => null];
        $this->getPaginatedStudents();
        // Filter students to include only first-year students
        $this->students = $this->students->where('year_level', '4');
        $this->calculateTotalStudents();
    }
    public function calculateTotalStudents()
    {
        $this->fourthYearStudents = Student::where('year_level', '4')->count();
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
        $total = Student::where('year_level', '4')->count();
        $this->lastPage = ceil($total / $this->perPage);
    
        $this->currentPage = min(max(1, $this->currentPage), $this->lastPage);
        $offset = ($this->currentPage - 1) * $this->perPage;
    
        // Adjust the ordering for descending sorting
        $orderByDirection = $this->sortDirection === 'desc' ? 'DESC' : 'ASC';
    
        if ($this->sortColumn === 'student_block') {
            // Fetch first-year students sorted by student block
            $this->students = $this->getPaginatedStudentsByBlock($orderByDirection, $offset);
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
            // Fetch students sorted by student name, prioritizing null values
            
            return Student::where('year_level', '4')
                ->orderByRaw('IF(student_block IS NULL, 0, 1), student_name ' . $orderByDirection)
                ->skip($offset)
                ->take($this->perPage)
                ->get();
        }
                        
    public function getPaginatedStudentsByBlock($orderByDirection, $offset)
        {
            // Fetch students sorted by student block
            return Student::where('year_level', '4')
                ->orderByRaw('IF(student_block IS NULL, 0, 1), student_block ' . $orderByDirection) // Prioritize null values for student_block
                ->orderBy('student_name', 'asc') // Always sort student names in ascending order for consistent behavior
                ->skip($offset)
                ->take($this->perPage)
                ->get();
        }
        
    // Method for alphabetical assignment
    public function assignBlockSectionsAlphabetically()
    {
        // Retrieve block capacities
        $blockCapacities = BlockCapacity::pluck('capacity', 'block');
    
        // Retrieve all first-year students sorted alphabetically by their names
        $students = Student::where('year_level', '4')->orderBy('student_name')->get();
    
        // Total number of students to be assigned
        $totalStudents = $students->count();
    
        // Initialize variables
        $assignedBlocks = [];
    
        // Initialize $assignedBlocks with all block indices
        foreach ($blockCapacities as $block => $capacity) {
            $assignedBlocks[$block] = 0;
        }
    
        $currentBlock = 1;
    
        // Iterate over each student
        foreach ($students as $student) {
            // Check if the current block has reached its capacity
            if (!isset($blockCapacities[$currentBlock]) || $assignedBlocks[$currentBlock] >= $blockCapacities[$currentBlock]) {
                // Move to the next block
                $currentBlock++;
            }
    
            // Check if the current block exceeds the total number of blocks
            if ($currentBlock > count($blockCapacities)) {
                break; // Stop assigning students if all blocks are full
            }
    
            // Assign the student to the current block
            $student->update(['student_block' => $currentBlock]);
    
            // Increment the count of assigned students for the current block
            $assignedBlocks[$currentBlock]++;
        }
    
        // Flash success message
        session()->flash('message', 'Block sections assigned alphabetically based on surname.');
    }

    public function assignBlockSectionsRandomly()
    {
        // Retrieve block capacities
        $blockCapacities = BlockCapacity::pluck('capacity', 'block');

         // Retrieve all first-year students
        $students = Student::where('year_level', '4')->get();

        // Total number of students to be assigned
        $students->count();

        // Create a copy of block capacities to avoid indirect modification error
        $modifiedBlockCapacities = $blockCapacities->toArray();

        // Assign block sections randomly
        foreach ($students as $student) {
            // Get available blocks based on capacity
            $availableBlocks = collect($modifiedBlockCapacities)->filter(function ($capacity, $block) {
                return $capacity > 0;
            })->keys()->toArray();

            // If no blocks are available, break out of the loop
            if (empty($availableBlocks)) {
                break;
            }

            // Choose a random available block
            $randomBlock = $availableBlocks[array_rand($availableBlocks)];

            // Update student's block section
            $student->update(['student_block' => $randomBlock]);

            // Decrement block capacity
            $modifiedBlockCapacities[$randomBlock]--;
        }

        // Flash success message
        session()->flash('message', 'Block sections assigned randomly.');

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

    public function selectStudentsForBulkEdit()
    {
        // Check if at least one student is selected
        if (count($this->selectedStudents) < 1) {
            // Show an error message indicating that no students are selected
            session()->flash('error', 'Please select at least one student for batch assignment.');
            return;
        }
    
        // Check if more than one student is selected
        if (count($this->selectedStudents) === 1) {
            // Show an error message indicating that multiple students need to be selected
            session()->flash('error', 'Please select more than one student for batch assignment.');
            return;
        }
    
        // Store the selected student IDs in the component property for later use
        $this->bulkEditStudentIds = $this->selectedStudents;
    
        // Now, open the bulk edit modal
        $this->dispatch('open-bulk-edit-modal');
    }
    
    public function applyBulkEdit()
    {
        // Validate if bulk_student_block is not empty
        $this->validate([
            'bulk_student_block' => 'required',
        ], [
            'bulk_student_block.required' => 'The block field is required.',
        ]);
    
        // Check if any students are selected for bulk edit
        if (count($this->bulkEditStudentIds) < 1) {
            // Show an error message indicating that no students are selected
            session()->flash('error', 'Please select at least one student for batch assignment.');
            return;
        }
    
        // Apply changes to selected students without considering block capacity
        foreach ($this->bulkEditStudentIds as $studentId) {
            $student = Student::findOrFail($studentId);
            $student->update([
                'student_block' => $this->bulk_student_block,
            ]);
        }
    
        // Flash success message
        session()->flash('message', 'Batch assignment applied successfully.');
    
        // Clear bulk edit properties
        $this->bulk_student_block = '';
        $this->bulkEditStudentIds = [];
    
        // Close bulk edit modal
        $this->dispatch('close-modal');
    }
    // Method to save block capacities
    public $blockCapacitySet = false; // Declare and initialize the property to false first
    public function saveCommonBlockCapacity($year)
    {
        // Validate input
        $this->validate([
            'commonBlockCapacity' => 'required|numeric|min:1', // Validate common block capacity
        ]);

        // Save common block capacity to the database for the specified year level
        foreach (range(1, 4) as $block) {
            BlockCapacity::updateOrCreate(
                ['year' => $year, 'block' => $block],
                ['capacity' => $this->commonBlockCapacity]
            );
        }

        // Update the block capacity status property
        $this->blockCapacitySet = true;

        // Flash success message
        session()->flash('message', 'Block capacity for year ' . $year . ' saved successfully.');

        $this->dispatch('close-modal');
    }
    
    // Method to check if a block is available based on its capacity
    private function isBlockAvailable($block)
    {
        $blockCapacity = BlockCapacity::where('block', $block)->first();

        if (!$blockCapacity) {
            return true; // No capacity limit for this block
        }

        $studentsCount = Student::where('student_block', $block)->count();
        return $studentsCount < $blockCapacity->capacity;
    }

    // Method to get students for each block
    public function getBlockStudents()
    {
        $blockStudents = [];

        $blockCapacities = BlockCapacity::all();

        foreach ($blockCapacities as $blockCapacity) {
            $block = $blockCapacity->block;
            $capacity = $blockCapacity->capacity;

            // Retrieve students for the current block based on the capacity
            $blockStudents[$block] = Student::where('student_block', $block)
                ->orderBy('student_name')
                ->limit($capacity)
                ->get();
        }

        return $blockStudents;
    }

    public function closeBulkEditModal()
    {
        // Clear any selected student IDs and reset bulk edit properties
        $this->selectedStudents = [];
        $this->bulk_student_block = '';

        // Now, close the bulk edit modal
        $this->dispatch('close-modal');
    }

    public function updated($field)
    {
        $this->validateOnly($field, $this->rules);
    }

    public function editStudents($id)
    {
        $student = Student::where('id', $id)->first();

        $this->student_edit_id = $student->id;
        $this->student_id = $student->student_id;
        $this->student_name = $student->student_name;
        $this->student_type = $student->student_type;
        $this->student_block = $student->student_block;

        $this->dispatch('show-edit-student-modal',);
    }
    
    public function editStudentData()
    {
        //on form submit validation
        $this->validate([
             'student_id' => 'required|unique:students,student_id,'.$this->student_edit_id,
            'student_name' => 'required',
            'student_type' => 'required|string|max:255',
            'student_block' => 'required|numeric|in:1,2,3',
        ]);

        // Find the student by ID
        $student = Student::findOrFail($this->student_edit_id);

        // Update student's information
        $student->update([
            'student_id' => $this->student_id,
            'student_name' => $this->student_name,
            'student_type' => $this->student_type,
            'student_block' => $this->student_block,
        ]);

        // Flash message
        session()->flash('message', 'Student has been updated successfully');

        // Close modal
        $this->dispatch('close-modal');
    }

    //Delete Confirmation
    public function deleteConfirmation($id)
    {
        $this->student_delete_id = $id; //student id

        $this->dispatch('show-delete-confirmation-modal');
    }

        public function deleteStudentData()
        {
            $student = Student::where('id', $this->student_delete_id);
            $student->delete();

            session()->flash('message', 'Student has been deleted successfully');

            $this->dispatch('close-modal');

            $this->student_delete_id = '';
        }

    public function cancel()
    {
        $this->student_delete_id = '';
    }

    public function viewStudentDetails($id)
    {
        $student = Student::findOrFail($id);

        $this->view_student_id = $student->student_id;
        $this->view_student_name = $student->student_name;
        $this->view_student_type = $student->student_type;
        $this->view_student_block = $student->student_block;

        $this->dispatch('show-view-student-modal');
    }

    public function closeViewStudentModal()
        {
            $this->view_student_id = '';
            $this->view_student_name = '';
            $this->view_student_type = '';
            $this->view_student_block = '';

            $this->dispatch('close-view-student-modal');
        }

    public function render()
        {
            return view('livewire.chairperson.student-enlistment.year-containers.fourth-year-container')->with('students', Student::where('year_level', '4')->paginate($this->perPage));
        }
}

// functions and methods are created here (child component of student-enlistment)
