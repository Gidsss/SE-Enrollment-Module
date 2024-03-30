<div>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h3><strong>Student Enlistment</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>All Students</strong></h5>
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addStudentModal">Add New Student</button>
                        <button type="button" class="btn btn-primary"style="float: right;" data-toggle="modal" data-target="#bulkEditStudentModal" wire:click="selectStudentsForBulkEdit">Batch Assign</button>
                        <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#alphabeticalEnlistmentModal" wire:click="openAlphabeticalEnlistmentModal">Assign Blocks Alphabetically</button>
                        <button type="button" class="btn btn-primary"style="float: right;"  data-toggle="modal" data-target="#randomEnlistmentModal" wire:click="openRandomEnlistmentModal">Assign Blocks Randomly</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#blockCapacityModal">Set Block Capacity</button>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                               <th></th>
                               <th>#</th>
                                <th>Student ID</th>
                                <th>Student Name
                                <button class="btn btn-sm btn-link" wire:click="sortStudents('student_name', 'asc')" wire:loading.attr="disabled">
                                        <i class="fa fa-arrow-up"></i>
                                    </button>
                                    <button class="btn btn-sm btn-link" wire:click="sortStudents('student_name', 'desc')" wire:loading.attr="disabled">
                                        <i class="fa fa-arrow-down"></i>
                                    </button>
                                </th>
                                <th>Year Level</th>
                                <th>Student Type</th>
                                <th>Block
                                <button class="btn btn-sm btn-link" wire:click="sortStudents('student_block')" wire:loading.attr="disabled">
    <i class="fa fa-arrow-up"></i>
</button>
<button class="btn btn-sm btn-link" wire:click="sortStudents('student_block', 'desc')" wire:loading.attr="disabled">
    <i class="fa fa-arrow-down"></i>
</button>
                                </th>
                                
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($students->count() > 0)
                                @foreach ($students as $student)
                                    <tr>
                                        <td><input type="checkbox" wire:model="selectedStudents" value="{{ $student->id }}"></td>
                                        <td>{{ $student->id }}</td>
                                            <td>{{ $student->student_id }}</td>
                                            <td>{{ $student->student_name }}</td>
                                            <td>{{ $student->year_level }}</td>
                                            <td>{{ $student->student_type }}</td>
                                            <td>{{ $student->student_block }}</td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-sm btn-secondary" wire:click="viewStudentDetails({{ $student->id }})">View</button>
                                                <button class="btn btn-sm btn-primary" wire:click="editStudents({{ $student->id }})">Edit</button>
                                                <button class="btn btn-sm btn-danger" wire:click="deleteConfirmation({{ $student->id }})">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" style="text-align: center;"><small>No Student Found</small></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
            <!-- Pagination Controls -->
    
            <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
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

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form wire:submit.prevent="storeStudentData">
                        <div class="form-group row">
                            <label for="student_id" class="col-3">Student ID</label>
                            <div class="col-9">
                                <input type="number" id="student_id" class="form-control" wire:model="student_id">
                                @error('student_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_name" class="col-3">Student Name</label>
                            <div class="col-9">
                                <input type="text" id="student_name" class="form-control" wire:model="student_name">
                                @error('student_name')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year_level" class="col-3">Year Level</label>
                            <div class="col-9">
                                <input type="number" id="year_level" class="form-control" wire:model="year_level">
                                @error('year_level')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_type" class="col-3">Student Type</label>
                            <div class="col-9">
                                <input type="text" id="student_type" class="form-control" wire:model="student_type">
                                @error('student_type')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_block" class="col-3">Block</label>
                            <div class="col-9">
                                <input type="number" id="phone" class="form-control" wire:model="student_block">
                                @error('student_block')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Add Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="editStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form wire:submit.prevent="editStudentData">
                        <div class="form-group row">
                            <label for="student_id" class="col-3">Student ID</label>
                            <div class="col-9">
                                <input type="number" id="student_id" class="form-control" wire:model="student_id">
                                @error('student_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_name" class="col-3">Student Name</label>
                            <div class="col-9">
                                <input type="text" id="student_name" class="form-control" wire:model="student_name">
                                @error('student_name')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year_level" class="col-3">Year Level</label>
                            <div class="col-9">
                                <input type="number" id="year_level" class="form-control" wire:model="year_level">
                                @error('year_level')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="student_type" class="col-3">Student Type</label>
                            <div class="col-9">
                                <input type="text" id="student_type" class="form-control" wire:model="student_type">
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
                                <button type="submit" class="btn btn-sm btn-primary">Edit Student</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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

    <div wire:ignore.self class="modal fade" id="viewStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Student Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeViewStudentModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Student ID: </th>
                                <td>{{ $view_student_id }}</td>
                            </tr>

                            <tr>
                                <th>Student Name: </th>
                                <td>{{ $view_student_name }}</td>
                            </tr>

                            <tr>
                                <th>Year Level: </th>
                                <td>{{ $view_student_year_level }}</td>
                            </tr>

                            <tr>
                                <th>Student Type: </th>
                                <td>{{ $view_student_type}}</td>
                            </tr>

                            <tr>
                                <th>Student Block: </th>
                                <td>{{ $view_student_block}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Batch Assign Modal -->
    <div wire:ignore.self class="modal fade" id="bulkEditStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
    <!-- Alphabetical Modal -->
    <div wire:ignore.self class="modal fade" id="alphabeticalEnlistmentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="alphabeticalEnlistmentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
           
                <div class="modal-header">
                    <h5 class="modal-title" id="alphabeticalEnlistmentModalLabel">Assign Blocks Alphabetically</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="numStudents">Number of students:</label>
                        <input type="number" class="form-control" id="numStudents" wire:model="numStudents" min="1">.
                        @error('numStudents')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                
                       
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="assignBlockSectionsAlphabetically">Assign Blocks</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Random Modal -->
    <div wire:ignore.self class="modal fade" id="randomEnlistmentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="randomEnlistmentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="randomEnlistmentModalLabel">Assign Blocks Randomly</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="numStudentsRandom">Number of students:</label>
                        <input type="number" class="form-control" id="numStudentsRandom" wire:model="numStudents" min="1">
                        @error('numStudents')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="assignBlockSectionsRandomly">Assign Blocks</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for setting block capacity -->
    <div class="modal fade" id="blockCapacityModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="blockCapacityModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blockCapacityModalLabel">Set Block Capacity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Input fields for block capacities -->
                    @foreach([1, 2, 3, 4] as $block)
                    <div class="form-group">
                        <label for="blockCapacity{{$block}}">Block {{$block}} Capacity:</label>
                        <input type="number" class="form-control" id="blockCapacity{{$block}}" wire:model.defer="blockCapacities.{{$block}}" min="1">
                        @error('blockCapacities.' . $block)
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="saveBlockCapacity">Save</button>
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event =>{
            $('#addStudentModal').modal('hide');
            $('#editStudentModal').modal('hide');
            $('#deleteStudentModal').modal('hide');
            $('#bulkEditStudentModal').modal('hide'); 
            $('#alphabeticalEnlistmentModal').modal('hide');
            $('#randomEnlistmentModal').modal('hide');
            $('#blockCapacityModal').modal('hide');
        });

        window.addEventListener('show-edit-student-modal', event =>{
            $('#editStudentModal').modal('show');
        });

        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#deleteStudentModal').modal('show');
        });

        window.addEventListener('show-view-student-modal', event =>{
            $('#viewStudentModal').modal('show');
        });

        window.addEventListener('open-alphabetical-enlistment-modal', event => {
        $('#alphabeticalEnlistmentModal').modal('show');
        });

        window.addEventListener('open-random-enlistment-modal', event => {
        $('#randomEnlistmentModal').modal('show');
        });

        window.addEventListener('open-bulk-edit-modal', event => {
        $('#bulkEditStudentModal').modal('show');
        });
    </script>
    
@endpush
