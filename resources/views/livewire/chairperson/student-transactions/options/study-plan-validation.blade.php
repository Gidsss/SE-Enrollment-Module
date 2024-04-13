
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
                <p class="text-first-year"><strong>Study Plan Validations</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h5 style="float: left;">Total <strong>#</strong> of Records: {{ $totalStudents }}</h5>

                        <button type="button" class="btn btn-primary"style="float: right;" data-toggle="modal" data-target="#bulkEditStudentModal" wire:click="selectStudentsForBatchUpdate">Batch Update</button>
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
    <div wire:ignore.self class="modal fade" id="editStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div> 
                    <div id="2nd-year-tables" >
                        <h1>2nd Year 1st Semester</h1>
                        <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                            <table class="table " style="background-color: white">

                            <thead style="background-color: #f8f8f8">
                                <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Units</th>
                                <th>Pre(Co)-Requisites</th>
                                <th></th>
                                </tr>
                            </thead>  
                            <tbody id="tableBody">
                            </tbody>
                            </table>
                        </div>
                        </div>
                        <span id="totalUnits"></span>
                        <h1>2nd Year 2nd Semester</h1>
                        <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                            <table class="table " style="background-color: white">
                    
                            <thead style="background-color: #f8f8f8">
                                <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Units</th>
                                <th>Pre(Co)-Requisites</th>
                                <th></th>
                                </tr>
                            </thead>  
                            <tbody id="tableBody2">
                            </tbody>
                            </table>
                        </div>
                        </div>
                        <span id="totalUnits2"></span>
                    </div>
                    <div id="3rd-year-tables" >
                        <h1>3rd Year 1st Semester</h1>
                    
                        <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                            <table class="table " style="background-color: white">
                    
                            <thead style="background-color: #f8f8f8">
                                <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Units</th>
                                <th>Pre(Co)-Requisites</th>
                                <th></th>
                                </tr>
                            </thead>  
                            <tbody id="tableBody3">
                            </tbody>
                            </table>
                        </div>
                        </div>
                        <span id="totalUnits3"></span>
                        <h1>3rd Year 2nd Semester</h1>
                        <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                            <table class="table " style="background-color: white">
                            <thead style="background-color: #f8f8f8">
                                <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Units</th>
                                <th>Pre(Co)-Requisites</th>
                                <th></th>
                                </tr>
                            </thead>  
                            <tbody id="tableBody4">
                            </tbody>
                            </table>
                        </div>
                        </div>
                        <span id="totalUnits4"></span>
                    </div>
                    <div id="4th-year-tables" >
                        <h1>4th Year 1st Semester</h1>
                    
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                                <table class="table " style="background-color: white">
                                    <thead style="background-color: #f8f8f8">
                                        <tr>
                                            <th>Course Code</th>
                                            <th>Course Name</th>
                                            <th>Units</th>
                                            <th>Pre(Co)-Requisites</th>
                                            <th></th>
                                        </tr>
                                    </thead>  
                                    <tbody id="tableBody5">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <span id="totalUnits5"></span>

                        <h1>4th Year 2nd Semester</h1>
                        
                        
                    
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body" style="background-color: #f8f8f8; overflow-y: auto; max-height: 60%;">
                                <table class="table " style="background-color: white">
                                    <thead style="background-color: #f8f8f8">
                                        <tr>
                                            <th>Course Code</th>
                                            <th>Course Name</th>
                                            <th>Units</th>
                                            <th>Pre(Co)-Requisites</th>
                                            <th></th>
                                        </tr>
                                    </thead>  
                                    <tbody id="tableBody6">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <span id="totalUnits6"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

    <!-- Batch Update Modal -->
    <div wire:ignore.self class="modal fade" id="bulkEditStudentModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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

    
<script>
@foreach($validations->where('studentid', '2021-01299') as $validation)

@if ($validation->yearlvl === 2)
    document.getElementById("2nd-year-tables").style.display = "block";
    document.getElementById("3rd-year-tables").style.display = "block";
    document.getElementById("4th-year-tables").style.display = "block";
@elseif ($validation->yearlvl === 3)
    document.getElementById("2nd-year-tables").style.display = "none";
    document.getElementById("3rd-year-tables").style.display = "block";
    document.getElementById("4th-year-tables").style.display = "block";
@elseif ($validation->yearlvl === 4)
    document.getElementById("2nd-year-tables").style.display = "none";
    document.getElementById("3rd-year-tables").style.display = "none";
    document.getElementById("4th-year-tables").style.display = "block";
@endif
@endforeach
const allowedCourseCodes = [];  


async function addRowBackToTable(course) {
// Check if the course code is allowed
const allowedCourseCodes = [
    'CSC 0213', 'CSC 0213.1', 'CSC 0212', 'CSC 0212.1', 'CSC 0224', 'ICC 0105', 'ICC 0105.1', 'ITE 0001', 'ETH 0008', 'UTS 0003', 'PATHFIT 3', 'CSC 0222', 'CSC 0222.1', 'ICC 0106', 'ICC 0106.1', 'GES 0013', 'AAP 0007', 'AAP 0008', 'CSC 0312', 'CSC 0312.1', 'CSC 0313', 'CSC 0313.1', 'CSC 0314', 'CSC 0314.1', 'CSC 0321', 'CSC 0321.1', 'CSC 0322', 'CSC 0322.1', 'CSC 0323', 'CSC 0323.1', 'CSC 0324', 'CSC 0324.1', 'CSC 0325', 'CSC 0411', 'CSC 0412', 'CSC 0414', 'CSC 0414.1', 'CSC 0421', 'CSC 0422', 'CSC 0422.1', 'CSC 0423', 'CSC 0424', 'CSC 0424.1'
];
if (!allowedCourseCodes.includes(course.course_code)) {
    return; // Skip adding the row if the course code is not allowed
}

// Create a new row element
const newRow = document.createElement('tr');
newRow.id = `row-${course.id}`;

newRow.innerHTML = `
    <td>${course.course_code || ''}</td>
    <td>${course.course_name || ''}</td>
    <td>${course.units || ''}</td>
    <td>${course.pre_requisites || ''}</td>
`;

const grade = Number(course.grades);
const targetTableId = determineTableId(course.year_lvl, course.sem);

document.getElementById(targetTableId).appendChild(newRow);
console.log("Added course:", course.course_code, course.year_lvl);
console.log("Pre-requisite found???:", prerequisiteFound);

updateTotalUnits('tableBody', 'totalUnits');
                updateTotalUnits('tableBody2', 'totalUnits2');
                updateTotalUnits('tableBody3', 'totalUnits3');
                updateTotalUnits('tableBody4', 'totalUnits4');
}
    // Pass courses data to JavaScript
    const coursesData = {!! json_encode($courses) !!};

    // Loop through courses data and add rows
    coursesData.forEach(course => addRowBackToTable(course));   

// Loop through filtered courses data and add rows
filteredCoursesData.forEach(course => addRowBackToTable(course));

// New function to determine table ID based on year_lvl and sem
function determineTableId(year_lvl, sem) {
    console.log("determineTableId called with:", year_lvl, sem);

    if (Number(year_lvl) === 2 && Number(sem) === 1 ) {
        return 'tableBody';
    } else if (Number(year_lvl) === 2 && Number(sem) === 2) {
        return 'tableBody2';
    } else if (Number(year_lvl) === 3 && Number(sem) === 1 ) {
        return 'tableBody3';
    } else if (Number(year_lvl) === 3 && Number(sem) === 2) {
        return 'tableBody4';
    } else if (Number(year_lvl) === 4 && Number(sem) === 1) {
        return 'tableBody5';
    } else if (Number(year_lvl) === 4 && Number(sem) === 2) {
        return 'tableBody6';
    } 
}

    // Function to calculate the total units in a table
    function calculateTotalUnits(tableId) {
        let totalUnits = 0;

        // Get all rows in the specified table
        const tableRows = document.querySelectorAll('#' + tableId + ' tr');

        // Iterate through each row and sum up the units
        tableRows.forEach(row => {
            // Get the units from the row
            const unitsText = row.cells[2].textContent.trim(); // Assuming units are in the third column
            const units = parseInt(unitsText) || 0; // Parse units as integer, default to 0 if not a valid number
            totalUnits += units; // Add units to the total
        });

        return totalUnits;
    }

    // Function to update the total units displayed on the page for a specific table
    function updateTotalUnits(tableId, totalUnitsElementId) {
        const totalUnitsElement = document.getElementById(totalUnitsElementId);
        const totalUnits = calculateTotalUnits(tableId);

        // Update total units display
        totalUnitsElement.innerHTML = "Total Units: " + totalUnits;

        // Check for underload or overload
        if (totalUnits < 10) {
            totalUnitsElement.innerHTML += ' (Underload)';
        } else if (totalUnits > 11) {
            totalUnitsElement.innerHTML += ' (Overload)';
        } else {
            totalUnitsElement.innerHTML += ' (Normal Load)';
        }
    } 

</script>