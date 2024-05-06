
<div>
<div style="width:1536px; height:auto; background-color: #30349c; position: relative;">
            <img src="{{ asset('backend/dist/img/plmlogo.png') }}" style="width:65px; height:65px; position:absolute; top:5%; left:1%">
            <span style="color: #d4a404; position: absolute; top: 22%; left: 5.5%; font-family: Inter, sans-serif; font-size: 13px; font-weight: bold;">PAMANTASAN NG LUNGSOD NG MAYNILA</span>
            <span style="color: white; position: absolute; top: 47%; left: 5.5%; font-family: Inter, sans-serif; font-size: 13px; font-weight: bold;">UNIVERSITY OF THE CITY OF MANILA</span>
            <br><br><br>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 56.5%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Schedules</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 63.5%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Student Records</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 73.5%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Enrollment</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 80.5%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Print Forms</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 88%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Utilities</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 94%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Logout<i class="fas fa-sign-out-alt" style="color: white; left:5%; position: relative;"></i></span>
            </a>
        </div>

        <div class="nav-bar">
        <div class="nav-item">
            <a href="http://localhost:8000/chairperson/create_class" class="nav-link">Class Creation</a>
        </div>
        <div class="nav-item ">
            <a href="http://localhost:8000/chairperson/block_classes" class="nav-link">Block Management</a>
        </div>
        <div class="nav-item">
            <a href="http://localhost:8000/chairperson/student_enlistment" class="nav-link">Student Enlistment</a>
        </div>
        <div class="nav-item page-item">
            <a href="http://localhost:8000/chairperson/student_transaction" class="nav-link">Transactions</a>
        </div>

     <!-- Components header -->
        <div style="width: 100%; height: 10%; text-align: right; padding-right: 0px; color: black; font-size: 20px; font-family: Inter; line-height: 33px; font-weight: 200; word-wrap: break-word; position: relative;">
            <div style="display: flex; align-items: right; padding-left: 1210px; background-color: #F6F6F6;">
                <span>Home / Enrollment / Transactions</span>
            </div>
            <div style="flex-grow: 1; height: 1px; border: 1px rgba(0, 0, 0, 0.20) solid;"></div>
        </div>
        </div>
        <!-- Main components -->
        
    <div class="container mt-5">
        <div class="row mb-1">
            <div class="col-md-12">
                <p class="text-first-year"><strong>Shifting Requests</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h5 style="float: left;">Total <strong>#</strong> of Records: {{ $totalStudents }}</h5>

                        <button type="button" class="btn btn-primary"style="float: right;" data-toggle="modal" data-target="#bulkEditStudentModal4" wire:click="selectStudentsForBatchUpdate">Batch Update</button>
                    </div>
                    <div class="card-body" style="background-color: #F6F6F6;">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif
                        <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                               <th></th>
                                <th style="text-align: center;">Student ID</th>
                                <th>Student Name
                                <button class="btn btn-sm btn-link" wire:click="sortStudents('student_name', 'asc')" wire:loading.attr="disabled">
                                        <i class="fa fa-arrow-up"></i>
                                    </button>
                                    <button class="btn btn-sm btn-link" wire:click="sortStudents('student_name', 'desc')" wire:loading.attr="disabled">
                                        <i class="fa fa-arrow-down"></i>
                                    </button>
                                </th>
                                <th>Year Level
                                <button class="btn btn-sm btn-link" wire:click="sortStudents('year_level')" wire:loading.attr="disabled">
                                    <i class="fa fa-arrow-up"></i>
                                </button>
                                <button class="btn btn-sm btn-link" wire:click="sortStudents('year_level', 'desc')" wire:loading.attr="disabled">
                                    <i class="fa fa-arrow-down"></i>
                                </button>
                                </th>
                                <th style="text-align: center;">Date Request</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($students->count() > 0)
                                @foreach ($students as $student)
                                    <tr>
                                        <td><input type="checkbox" wire:model="selectedStudents" value="{{ $student->id }}"></td>
                                        
                                            <td>{{ $student->student_id }}</td>
                                            <td>{{ $student->student_name }}</td>
                                            <td>{{ $student->year_level }}</td>
                                            <td>{{ $student->date_of_request }}</td>
                                            <td>{{ $student->status }}</td>
                                            <td style="text-align: center;">
                                            <button class="btn btn-sm btn-primary" wire:click="editStudents({{ $student->id }})">View Student</button>
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
</div>
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

    <!-- Modals -->
    <div wire:ignore.self class="modal fade" id="editStudentModal4" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width:80%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeBatchUpdateModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-9">
                                <span id="student_name" style="font-weight: bold; font-size: 200%;">{{ $student_name }}</span>
                                @error('student_name')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                            <label for="student_id" class="col-3" style="color: darkred;">Student ID:</label>
                            <span id="student_id">{{ $student_id }}</span>
                                @error('student_id')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror


                            <label for="year_level" class="col-3" style="color: darkred;">Year Level:</label>
                            <span id="year_level">{{ $year_level }}</span>
                                @error('year_level')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror


                            <label for="date_of_request" class="col-3" style="color: darkred;">Date Request:</label>
                            <span id="date_of_request">{{ $date_of_request }}</span>
                                @error('date_of_request')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror


                            <label for="status" class="col-3" style="color: darkred;">Status:</label>
                            <span id="status">{{ $status }}</span>
                                @error('status')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror

                        <hr style="color: #333; background-color: grey; height: .5px; margin: 20px 0;">
                        <div class="form-group row justify-content-center">
                            <button wire:click="changeColor('shifting')" class="btn btn-sm @if($activeButton === 'shifting') btn-primary @else btn-outline-dark @endif font-weight-bold mr-2">Review Shifting Form</button>
                            <button wire:click="changeColor('intent')" class="btn btn-sm @if($activeButton === 'intent') btn-primary @else btn-outline-dark @endif font-weight-bold mr-2">Review Letter of Intent</button>
                            <button wire:click="changeColor('undertaking')" class="btn btn-sm @if($activeButton === 'undertaking') btn-primary @else btn-outline-dark @endif font-weight-bold mr-2">Review Note of Undertaking</button>
                            <button wire:click="changeColor('checklist')" class="btn btn-sm @if($activeButton === 'checklist') btn-primary @else btn-outline-dark @endif font-weight-bold mr-2">Review Student Checklist</button>
                            <button wire:click="changeColor('plan')" class="btn btn-sm @if($activeButton === 'plan') btn-primary @else btn-outline-dark @endif font-weight-bold">Review Study Plan</button>
                        </div>

                        @if ($hasStudyPlan)
                        <div>
                            @livewire('course-code-to-valid-data')
                        </div>
                        @endif

                        @if ($hasChecklist)
                        <div>
                            <!-- livewire kunwari -->
                            Checklist
                        </div>
                        @endif

                        @if ($hasUndertaking)
                        <div>
                            <!-- livewire kunwari -->
                            Undertaking
                        </div>
                        @endif

                        @if ($hasIntent)
                        <div>
                            <!-- livewire kunwari -->
                            Intent
                        </div>
                        @endif

                        @if ($hasShifting)
                        <div>
                            <!-- livewire kunwari -->
                            Shifting
                        </div>
                        @endif

                        <div class="form-group row justify-content-center">
                            <button type="button" class="btn btn-sm font-weight-bold mr-2" data-dismiss="modal" wire:click="closeBatchUpdateModal" style="background-color: #C9AE5D">Close</button>
                            <button wire:click="editStudentData" type="submit" class="btn btn-sm font-weight-bold mr-2" style="background-color: #C9AE5D">Reject</button>
                            <button wire:click="editStudentData" type="submit" class="btn btn-sm font-weight-bold" style="background-color: #C9AE5D">Approve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Batch Update Modal -->
    <div wire:ignore.self class="modal fade" id="bulkEditStudentModal4" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Batch Update Students</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeBatchUpdateModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                            @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @elseif (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        <!-- Input field for batch assigning of status -->
                <div class="form-group">
                    <label for="bulk_student_status">Status</label>
                    <input type="text" class="form-control" id="bulk_student_status" wire:model="bulk_student_status">
                    @error('bulk_student_status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="closeBatchUpdateModal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="applyBatchUpdate">Apply Changes</button>
            </div>
        </div>
    </div>
    </div>



