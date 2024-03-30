<?php


namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Student;
use App\Models\BlockCapacity;
use Livewire\Component;


class StudentsComponent extends Component
{
    use WithPagination;
    
    public $student_id, $student_name, $year_level, $student_type, $student_block;
    public $student_edit_id, $student_delete_id;
    public $view_student_id, $view_student_name, $view_student_year_level, $view_student_type, $view_student_block;
    public $bulk_student_block, $students, $lastPage;
    public $bulkEditStudentIds = [];
    public $selectedStudents = [];
    public $selectAll = false;
    public $perPage = 10;
    public $currentPage = 1;
    public $numStudents;
    public $blockCapacities; // Variable to store the block capacity input by the user

    // Input fields validation rules
    protected $rules = [
        'student_id' => 'required|unique:students|numeric',
        'student_name' => 'required|string|max:255',
        'year_level' => 'required|integer',
        'student_type' => 'required|string|max:255',
        'student_block' => 'required|integer',
    ];

    
    public function mount()
    {
        $this->blockCapacities = [1 => null, 2 => null, 3 => null, 4 => null];
        $this->getPaginatedStudents();
    }

    public $sortColumn; // Default sorting column
    public $sortDirection; // Default sorting direction

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
        $total = Student::count();
        $this->lastPage = ceil($total / $this->perPage);
    
        $this->currentPage = min(max(1, $this->currentPage), $this->lastPage);
        $offset = ($this->currentPage - 1) * $this->perPage;
    
        // Adjust the ordering for descending sorting
        $orderByDirection = $this->sortDirection === 'desc' ? 'DESC' : 'ASC';
    
        if ($this->sortColumn === 'student_block') {
            // Fetch students sorted by student block
            $this->students = $this->getPaginatedStudentsByBlock($orderByDirection, $offset);
        } else {
            // Fetch students sorted by student name
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
        // Fetch students sorted by student name
        return Student::orderBy('student_name', $orderByDirection)
            ->orderByRaw('ISNULL(student_block) ' . $orderByDirection)
            ->skip($offset)
            ->take($this->perPage)
            ->get();
    }
    
    public function getPaginatedStudentsByBlock($orderByDirection, $offset)
    {
        // Fetch students sorted by student block
        return Student::orderByRaw('ISNULL(student_block) ' . $orderByDirection)
            ->orderBy('student_block', $orderByDirection)
            ->orderBy('student_name', $orderByDirection)
            ->skip($offset)
            ->take($this->perPage)
            ->get();
    }

    public function openAlphabeticalEnlistmentModal()
    {
        $this->reset(['numStudents']);
        $this->dispatch('open-alphabetical-enlistment-modal');
    }

    public function openRandomEnlistmentModal()
    {
        $this->reset(['numStudents']);
        $this->dispatch('open-random-enlistment-modal');
    }
    
    // Method for alphabetical assignment
    public function assignBlockSectionsAlphabetically()
    {
        // Define block sections
        $blocks = [
            'A' => 1,
            'H' => 2,
            'N' => 3,
            'T' => 4,
        ];
    
        // Validate input field
        $this->validate([
            'numStudents' => 'required|numeric|min:0|max:40',
        ], [
            'numStudents.max' => 'You cannot assign more than 40 students alphabetically.',
        ]);
    
        // Retrieve students sorted alphabetically by their names
        $students = Student::orderBy('student_name')->get();
    
        // Assign block sections based on alphabetical ranges
        $count = 0;
        foreach ($students as $student) {
            $firstLetter = strtoupper(substr($student->student_name, 0, 1));
            $assignedBlock = null;
    
            foreach ($blocks as $letter => $block) {
                if ($firstLetter >= $letter && $this->isBlockAvailable($block)) {
                    $assignedBlock = $block;
                    break;
                }
            }
    
            // Update student's block section if a block is available
            if ($assignedBlock) {
                $student->update(['student_block' => $assignedBlock]);
                $count++; // Increment the count of assigned students
            }
        }
    
        // Flash success message
        session()->flash('message', 'Block sections assigned alphabetically based on surname.');
    
        // Close modal
        $this->dispatch('close-modal');
    }

    public function assignBlockSectionsRandomly()
    {
        // Validate input field
        $this->validate([
            'numStudents' => 'required|numeric|min:0|max:40',
        ], [
            'numStudents.max' => 'You cannot assign more than 40 students randomly.',
        ]);

        // Retrieve block capacities
        $blockCapacities = BlockCapacity::pluck('capacity', 'block');

        // Total number of students to be assigned
        $totalStudents = min($this->numStudents, $blockCapacities->sum());

        // Retrieve students in random order
        $students = Student::inRandomOrder()->limit($totalStudents)->get();

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

        // Close modal
        $this->dispatch('close-modal');
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
        // Check if more than one student is selected
        if (count($this->selectedStudents) > 1) {
            // Store the selected student IDs in the component property for later use
            $this->bulkEditStudentIds = $this->selectedStudents;

            // Now, open the bulk edit modal
            $this->dispatch('open-bulk-edit-modal');
        } elseif (count($this->selectedStudents) === 1) {
            // Show an error message indicating that multiple students need to be selected
            session()->flash('error', 'Please select more than one student for batch assignment.');
        } else {
            // Show an error message indicating that no students are selected
            session()->flash('error', 'Please select at least one student for batch assignment.');
        }
    }
    public function applyBulkEdit()
    {
        // Validate input field
        $this->validate([
            'bulk_student_block' => 'required|numeric|min:1|max:4',
        ]);

        $selectedBlock = $this->bulk_student_block;

        // Check if the selected block is available and has capacity
        if (!$this->isBlockAvailable($selectedBlock)) {
            session()->flash('error', 'Selected block is already full.');
            return;
        }

        // Apply changes to selected students if there is capacity in the block
        foreach ($this->bulkEditStudentIds as $studentId) {
            // Check if the block still has capacity before updating
            if ($this->isBlockAvailable($selectedBlock)) {
                $student = Student::findOrFail($studentId);
                $student->update([
                    'student_block' => $selectedBlock,
                ]);
            } else {
                session()->flash('error', 'Selected block no longer has available capacity.');
                return;
            }
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
    public function saveBlockCapacity()
    {
        // Validate input
        $this->validate([
            'blockCapacities.*' => 'required|numeric|min:1', // Validate each block capacity
        ]);

        // Save block capacities to the database
        foreach ($this->blockCapacities as $block => $capacity) {
            BlockCapacity::updateOrCreate(
                ['block' => $block],
                ['capacity' => $capacity]
            );
        }

        // Flash success message
        session()->flash('message', 'Block capacities saved successfully.');

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

    public function storeStudentData()
    {
        $this->validate($this->rules);

        Student::create([
            'student_id' => $this->student_id,
            'student_name' => $this->student_name,
            'year_level' => $this->year_level,
            'student_type' => $this->student_type,
            'student_block' => $this->student_block,
        ]);

        session()->flash('message', 'New student has been added successfully');
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->student_id = '';
        $this->student_name = '';
        $this->year_level = '';
        $this->student_type = '';
        $this->student_block = '';
        $this->student_edit_id = '';
    }

    public function close()
    {
        $this->resetInputs();
    }

    public function editStudents($id)
    {
        $student = Student::where('id', $id)->first();

        $this->student_edit_id = $student->id;
        $this->student_id = $student->student_id;
        $this->student_name = $student->student_name;
        $this->year_level = $student->year_level;
        $this->student_type = $student->student_type;
        $this->student_block = $student->student_block;

        $this->dispatch('show-edit-student-modal');
    }
    
    public function editStudentData()
    {
        //on form submit validation
        $this->validate([
             'student_id' => 'required|unique:students,student_id,'.$this->student_edit_id,
            'student_name' => 'required',
            'year_level' => 'required|numeric',
            'student_type' => 'required|string|max:255',
            'student_block' => 'required|numeric',
        ]);

        // Find the student by ID
        $student = Student::findOrFail($this->student_edit_id);

        // Update student's information
        $student->update([
            'student_id' => $this->student_id,
            'student_name' => $this->student_name,
            'year_level' => $this->year_level,
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
        $this->view_student_year_level = $student->year_level;
        $this->view_student_type = $student->student_type;
        $this->view_student_block = $student->student_block;

        $this->dispatch('show-view-student-modal');
    }

    public function closeViewStudentModal()
        {
            $this->view_student_id = '';
            $this->view_student_name = '';
            $this->view_student_year_level = '';
            $this->view_student_type = '';
            $this->view_student_block = '';

            $this->dispatch('close-view-student-modal');
        }

        
        public function render()
        {
            return view('livewire.students-component', [
                'students' => $this->students,
                'lastPage' => $this->lastPage
            ])->layout('livewire.layouts.base');
        }
}

