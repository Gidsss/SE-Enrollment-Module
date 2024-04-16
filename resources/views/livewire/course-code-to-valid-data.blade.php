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
            <tbody id="tableBody32">
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