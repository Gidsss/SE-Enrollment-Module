<!-- Dont declare styles here!!! -->
<div>
<div>
<div class="container mt-5">
        <div class="row mb-1">
            <div class="col-md-12">
            <p class="text-first-year"><strong>Student Enlistment</strong>  <button type="button" class="btn btn-primary" style="margin-left: 560px; margin-right: 0px; font-family: Inter, sans-serif;" data-toggle="modal" data-target="#blockCapacityModal2">Set Block Capacity</button></p>            
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                        <p style="float: left; font-family: Inter, sans-serif;" >Total <strong>#</strong> of Records: {{ $thirdYearStudents }}</p>
                        <div class="relative inline-block" style="float: right;">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" aria-haspopup="true" aria-expanded="false" style="font-family: Inter, sans-serif;">
                            Assign Button
                        </button>
                        <div class="absolute right-0 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="dropdownMenuButton" style="display: none;">
                            <div class="py-1" role="none">
                                <button class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100" type="button" data-toggle="modal" data-target="#bulkEditStudentModal2" wire:click="selectStudentsForBulkEdit" role="menuitem">Batch Assign</button>
                            </div>
                            <div class="py-1" role="none">
                                <hr class="dropdown-divider">
                                <button class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 @if(!$blockCapacitySet) opacity-50 cursor-not-allowed pointer-events-none @endif" type="button" wire:click="assignBlockSectionsAlphabetically(4)" role="menuitem">Assign Blocks Alphabetically</button>
                                <button class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 @if(!$blockCapacitySet) opacity-50 cursor-not-allowed pointer-events-none @endif" type="button" wire:click="assignBlockSectionsRandomly" role="menuitem">Assign Blocks Randomly</button>
                            </div>
                        </div>
                    </div>

                    </div>
                    
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif
                        <div class="table-responsive shadow-md">
    <table class="w-full table-auto">
        <thead class="bg-gray-50 dark:bg-gray-700">
            <tr class="text-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3">
                </th>
                <th scope="col" class="px-6 py-3" style="font-family: Inter, sans-serif;">
                    Student ID
                </th>
                <th scope="col" class="px-6 py-3" style="font-family: Inter, sans-serif;">
                    Student Name
                    <button class="btn btn-sm btn-link" wire:click="sortStudents('student_name', 'asc')" wire:loading.attr="disabled">
                        <i class="fa fa-arrow-up"></i>
                    </button>
                    <button class="btn btn-sm btn-link" wire:click="sortStudents('student_name', 'desc')" wire:loading.attr="disabled">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </th>
                <th scope="col" class="px-6 py-3" style="font-family: Inter, sans-serif;">
                    Student Type
                </th>
                <th scope="col" class="px-6 py-3" style="font-family: Inter, sans-serif;">
                    Block
                    <button class="btn btn-sm btn-link" wire:click="sortStudents('student_block')" wire:loading.attr="disabled">
                        <i class="fa fa-arrow-up"></i>
                    </button>
                    <button class="btn btn-sm btn-link" wire:click="sortStudents('student_block', 'desc')" wire:loading.attr="disabled">
                        <i class="fa fa-arrow-down"></i>
                    </button>
                </th>
                <th scope="col" class="px-6 py-3 text-center" style="font-family: Inter, sans-serif;">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($students->count() > 0)
                @foreach ($students as $student)
                <tr class="{{ $loop->iteration % 2 === 0 ? 'bg-white' : 'bg-gray-100' }} border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-3">
                            <input type="checkbox" wire:model="selectedStudents" value="{{ $student->id }}">
                        </td>
                        <td class="px-6 py-1 text-gray-900 whitespace-nowrap dark:text-white" style="font-size: 15px; font-family: Inter, sans-serif;">{{ $student->student_id }}</td>
                        <td class="px-6 py-1" style="font-size: 15px; font-family: Inter, sans-serif;">{{ $student->student_name }}</td>
                        <td class="px-6 py-1" style="font-size: 15px; font-family: Inter, sans-serif;">{{ $student->student_type }}</td>
                        <td class="px-6 py-1" style="font-size: 15px; font-family: Inter, sans-serif;">{{ $student->student_block }}</td>
                        <td class="px-6 py-1 text-center" style="font-size: 15px; font-family: Inter, sans-serif;">
                            <button class="btn btn-sm" style="border: 1px solid #000;"wire:click="editStudents({{ $student->id }})">View</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center"><small>No Student Found</small></td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
            <!-- Pagination Controls -->
    
            <nav aria-label="Page navigation example">
    <ul class="pagination flex justify-end -space-x-px text-sm ">
        <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
            <a class="page-link" href="#" wire:click.prevent="previousPage" tabindex="-1">Previous</a>
        </li>
        @for ($page = 1; $page <= $lastPage; $page++)
            <li class="page-item {{ $currentPage == $page ? 'active' : '' }}">
                <a class="page-link" href="#" wire:click.prevent="getPaginatedStudents({{ $page }})">{{ $page }}</a>
            </li>
        @endfor
        <li class="page-item {{ $currentPage == $lastPage ? 'disabled' : '' }}">
            <a class="page-link" href="#" wire:click.prevent="nextPage">Next</a>
        </li>
    </ul>
</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div wire:ignore.self class="modal fade" id="editStudentModal2" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeBulkEditModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form wire:submit.prevent="editStudentData">
                        <div class="form-group row">
                            <label for="student_id" class="col-3">Student ID</label>
                            <div class="col-9">
                                <input type="number" id="student_id" class="form-control" wire:model="student_id" disabled>
                                @error('student_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_name" class="col-3">Student Name</label>
                            <div class="col-9">
                                <input type="text" id="student_name" class="form-control" wire:model="student_name" disabled>
                                @error('student_name')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

        
                        <div class="form-group row">
                            <label for="student_type" class="col-3">Student Type</label>
                            <div class="col-9">
                                <input type="text" id="student_type" class="form-control" wire:model="student_type" disabled>
                                @error('student_type')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="block" class="col-3">Block</label>
                            <div class="col-9">
                                <input type="number" id="student_block" class="form-control" wire:model="student_block">
                                @error('student_block')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" wire:click="closeBulkEditModal">Close</button>
                                <button type="submit" class="btn btn-sm btn-primary">Edit Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteStudentModal2" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-4">
                    <h6>Are you sure? You want to delete this student data!</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" wire:click="cancel()" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-sm btn-danger" wire:click="deleteStudentData()">Yes! Delete</button>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Batch Assign Modal -->
    <div wire:ignore.self class="modal fade" id="bulkEditStudentModal2" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Batch Assign Students</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeBulkEditModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                        @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <!-- Input field for batch assigning of student_block -->
                <div class="form-group">
                    <label for="bulk_student_block">Block</label>
                    <input type="number" class="form-control" id="bulk_student_block" wire:model="bulk_student_block">
                    @error('bulk_student_block')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeBulkEditModal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="applyBulkEdit">Apply Changes</button>
            </div>
        </div>
    </div>
    </div>
    
<!-- Modal for setting common block capacity -->
<div class="modal fade" id="blockCapacityModal2" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="blockCapacityModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blockCapacityModalLabel">Block Capacity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Input field for common block capacity -->
                <div class="form-group">
                    <label for="commonBlockCapacity">Input the number of students per block:</label>
                    <input type="text" class="form-control" id="commonBlockCapacity" onkeypress="return isNumeric(event)" wire:model.defer="commonBlockCapacity" min="1">     
                    @error('commonBlockCapacity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="saveCommonBlockCapacity(3)">Save</button>
            </div>
        </div>
    </div>
</div>

</div>
