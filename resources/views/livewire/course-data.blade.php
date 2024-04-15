<div>
    <button id="findCommonCourseCodesButton">Find Common Course Codes</button>
    <button id="findCourseCodesButton">Find pre Req button</button>
    <button id="findAndLogCourseCodesForTableButton">Check button</button>

        <div id="2nd-year-tables" >
            <h1>2nd Year 1st Semester</h1>
            <body>
            <div class="dropdown" style="left: 85%">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton2_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="
                    width:15% ;
                    position:auto;
                "
                >
                <span>Add Class</span>
        
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent2_1">
                <!-- Dropdown options will be dynamically added here -->
                </div>
            </div>
            </body>
        
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
            <body>
            <div class="dropdown" style="left: 85%">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton2_2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="
                    width:15% ;
                    position:auto;
                "
                >
                <span>Add Class</span>
        
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent2_2">
                <!-- Dropdown options will be dynamically added here -->
                </div>
            </div>
            </body>
        
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
            <body>
            <div class="dropdown" style="left: 85%">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton3_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="
                    width:15% ;
                    position:auto;
                "
                >
                <span>Add Class</span>
        
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent3_1">
                @foreach($dropdownContent3_1 as $course)
                    @if(is_object($course))
                        <a wire:click.prevent="moveRowFromDropdownToTable('{{ $course->course_code }}')" class="dropdown-item" href="#">{{ $course->course_code }} - {{ $course->course_name }}</a>
                    @endif
                @endforeach
                </div>
            </div>
            </body>
        
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
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody32">
                @foreach ($courses->where('year_lvl', 3)->where('sem', 1) as $course)
                <tr id="row_{{ $course->id }}">
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->units }}</td>
                    <td>{{ $course->pre_requisites }}</td>
                    <td></td>
                    <div>
                    <td>
                        <!-- Pass course ID to the moveRowToDropdown method -->
                        <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody32')" class="btn btn-danger btn-sm">X</button>
                    </td>
                    </div>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
            <span id="totalUnits3"></span>
        
            <h1>3rd Year 2nd Semester</h1>
            
            <body>
            <div class="dropdown" style="left: 85%">
                <button type="button" class="dropdown-toggle" id="dropdownMenuButton3_2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="
                    width:15% ;
                    position:auto;
                "
                >
                <span>Add Class</span>
        
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent3_2">
                @foreach($dropdownContent3_2 as $course)
                <a class="dropdown-item" href="#">{{ $course->course_code }} - {{ $course->course_name }}</a>
                @endforeach
                </div>
            </div>
        
            </body>
        
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
                    <th></th>
                    </tr>
                </thead>  
                <tbody id="tableBody42">
                @foreach ($courses->where('year_lvl', 3)->where('sem', 2) as $course)
                <tr id="row_{{ $course->id }}">
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->units }}</td>
                    <td>{{ $course->pre_requisites }}</td>
                    <td></td>
                    <div>
                    <td>
                        <!-- Pass course ID to the moveRowToDropdown method -->
                        <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody42')" class="btn btn-danger btn-sm">X</button>
                    </td>
                    </div>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
            <span id="totalUnits4"></span>
        </div>

        <div id="4th-year-tables" >
            <h1>4th Year 1st Semester</h1>
            
            <body>
                <div class="dropdown" style="left: 85%">
                    <button type="button" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="
                            width:15% ;
                            position:auto;
                        "
                    >
                        <span>Add Class</span>
        
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent4_1">
                        <!-- Dropdown options will be dynamically added here -->
                    </div>
                </div>
        
            </body>
        
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
                                <th></th>
                            </tr>
                        </thead>  
                        <tbody id="tableBody52">
                        @foreach ($courses->where('year_lvl', 4)->where('sem', 1) as $course)
                        <tr id="row_{{ $course->id }}">
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->units }}</td>
                            <td>{{ $course->pre_requisites }}</td>
                            <td></td>
                            <div>
                            <td>
                                <!-- Pass course ID to the moveRowToDropdown method -->
                                <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody32')" class="btn btn-danger btn-sm">X</button>
                            </td>
                            </div>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <span id="totalUnits5"></span>

            <h1>4th Year 2nd Semester</h1>
            
            <body>
                <div class="dropdown" style="left: 85%">
                    <button type="button" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="
                            width:15% ;
                            position:auto;
                        "
                    >
                        <span>Add Class</span>
        
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="dropdownContent4_2">
                        <!-- Dropdown options will be dynamically added here -->
                    </div>
                </div>
        
            </body>
        
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
                                <th></th>
                            </tr>
                        </thead>  
                        <tbody id="tableBody6">
                        @foreach ($courses->where('year_lvl', 4)->where('sem', 2) as $course)
                        <tr id="row_{{ $course->id }}">
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->units }}</td>
                            <td>{{ $course->pre_requisites }}</td>
                            <td></td>
                            <div>
                            <td>
                                <!-- Pass course ID to the moveRowToDropdown method -->
                                <button wire:click="moveRowToDropdown({{ $course->id }}, 'tableBody32')" class="btn btn-danger btn-sm">X</button>
                            </td>
                            </div>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <span id="totalUnits6"></span>
        </div>
</div>

<script>
    function adjustYearTables(hasYear2, hasYear3, hasYear4) {
        if (hasYear2) {
            document.getElementById("2nd-year-tables").style.display = "block";
            document.getElementById("3rd-year-tables").style.display = "block";
            document.getElementById("4th-year-tables").style.display = "block";
        }

        if (hasYear3) {
            document.getElementById("2nd-year-tables").style.display = "none";
            document.getElementById("3rd-year-tables").style.display = "block";
            document.getElementById("4th-year-tables").style.display = "block";
        }

        if (hasYear4) {
            document.getElementById("2nd-year-tables").style.display = "none";
            document.getElementById("3rd-year-tables").style.display = "none";
            document.getElementById("4th-year-tables").style.display = "block";
        }
    }

    // Call the adjustYearTables function after the DOM content is loaded
    document.addEventListener("DOMContentLoaded", function() {
        adjustYearTables({{ $hasYear2 ? 'true' : 'false' }}, {{ $hasYear3 ? 'true' : 'false' }}, {{ $hasYear4 ? 'true' : 'false' }});
    });

    @foreach($validations->where('studentid', '2021-01299') as $validation) 
    // Function to delete a row and add its course code and name to the dropdown
    function deleteRow(rowId, courseCode, courseName, courseUnit, preRequisites, year_lvl, sem, grades) {
            const row = document.getElementById(rowId);

            // Create a new option for the dropdown
            const option = document.createElement('a');
            option.classList.add('dropdown-item');
            option.href = '#';
            option.textContent = `${courseCode} - ${courseName}`;
            option.dataset.courseCode = courseCode; 
            option.dataset.courseName = courseName;


            option.addEventListener('click', function() {
                handleDropdownSelection(courseCode, courseName, courseUnit, preRequisites, year_lvl, sem, grades);
                console.log("Deleted grades:", grades);
            });

                // Example logic based on course code (modify as needed)
                if (Number(year_lvl) === 2 && Number(sem) === 1) {
                dropdownContent2_1.appendChild(option);
                } else if (Number(year_lvl) === 2 && Number(sem) === 2) {
                dropdownContent2_2.appendChild(option);
                } else if (Number(year_lvl) === 3 && Number(sem) === 1) {
                dropdownContent3_1.appendChild(option);
                } else if (Number(year_lvl) === 3 && Number(sem) === 2 || grades === 5) {
                dropdownContent3_2.appendChild(option);
                } else if (Number(year_lvl) === 4 && Number(sem) === 1) {
                dropdownContent4_1.appendChild(option);
                } else if (Number(year_lvl) === 4 && Number(sem) === 2) {
                dropdownContent4_2.appendChild(option);
                }
            


            // Update total units for the first table
            updateTotalUnits('tableBody', 'totalUnits');
            updateTotalUnits('tableBody2', 'totalUnits2');
            updateTotalUnits('tableBody3', 'totalUnits3');
            updateTotalUnits('tableBody4', 'totalUnits4');
        }

    async function findPrerequisites(courseCode, coursesData) {
            try {
                // Look for the course with the matching course code in the coursesData array
                const course = coursesData.find(course => course.course_code === courseCode);

                // If the course is found, return its prerequisites
                if (course) {
                    return course.pre_requisites || 'None';
                } else {
                    return 'Course not found'; // Return this message if the course is not found
                }
            } catch (error) {
                console.error('Error finding prerequisites:', error);
                return ''; // Return an empty string if there's an error
            }
    }

    async function findPrerequisiteGrade(preRequisites, coursesData) {
        try {
            // Look for the matching prerequisite course in the coursesData array
            const prerequisiteCourse = coursesData.find(course => course.course_code === preRequisites);

            // If the prerequisite course is found, return its grade and course code
            if (prerequisiteCourse) {
                return {
                    grade: prerequisiteCourse.grades,
                    courseCode: prerequisiteCourse.course_code
                };
            } else {
                return { grade: ' ', courseCode: ' ' }; // Return 'N/A' if the prerequisite course is not found
            }
        } catch (error) {
            console.error('Error finding prerequisite grade:', error);
            return { grade: '', courseCode: '' }; // Return 'N/A' if there's an error
        }
    }
    async function addRowBackToTable(course) {
        // Fetch prerequisite grade
        const { grade: prerequisiteGrade, courseCode: prerequisiteCourseCode } = await findPrerequisiteGrade(course.pre_requisites, coursesData);

        // Create a new row element
        const newRow = document.createElement('tr');
        newRow.id = `row-${course.id}`;
        
        newRow.innerHTML = `
            <td>${course.course_code || ''}</td>
            <td>${course.course_name || ''}</td>
            <td>${course.units || ''}</td>
            <td>${course.pre_requisites || ''}</td>
            <td style="color: ${prerequisiteGrade === 5 ? 'red' : 'inherit'}">
                ${prerequisiteGrade === 5 ? 'FAILED PREREQ: ' + prerequisiteCourseCode : prerequisiteGrade || ''}
            </td>
            <td><button class="btn btn-danger btn-sm" onclick="deleteRow('row-${course.id}', '${course.course_code}', '${course.course_name}', '${course.units}', '${course.pre_requisites}', '${course.year_lvl}', '${course.sem}', '${course.grades}')">X</button></td>
        `;

        const grade = Number(course.grades);
        const targetTableId = determineTableId(course.year_lvl, course.sem);
        let dropdownContent;
        

            // Function to append the new row to the target table
            function appendRowToTable(dropdownContent) {
                if (dropdownContent === dropdownContent3_2) {
                    document.getElementById('tableBody4').appendChild(newRow);
                } else if ((dropdownContent === dropdownContent4_2)){
                    document.getElementById('tableBody6').appendChild(newRow);  
                } else if (dropdownContent === dropdownContent4_1) {
                    document.getElementById('tableBody5').appendChild(newRow); // Append to tableBody5
                }
                // Update total units
                updateTotalUnits(targetTableId, `totalUnits${targetTableId.slice(-1)}`);
            }

        if (grade === 5 && course.sem === 2) {
            const option = document.createElement('a');
            option.classList.add('dropdown-item');
            option.href = '#';
            option.textContent = `${course.course_code} - ${course.course_name}`;

            // Clone the option element
            const clonedOption = option.cloneNode(true);

            // Append the cloned option to dropdownContent3_2
            if (Number(course.year_lvl) === 2) {
                dropdownContent3_2.appendChild(clonedOption);
            }

            // Append the original option to dropdownContent4_2
            dropdownContent4_2.appendChild(option);

            // Add event listener for both original and cloned options
            option.addEventListener('click', function () {
                // Append the new row to tableBody6
                appendRowToTable(dropdownContent4_2);

                // Remove the option from the dropdown
                dropdownContent4_2.removeChild(option);
            });

            clonedOption.addEventListener('click', function () {
                // Append the new row to tableBody6
                appendRowToTable(dropdownContent3_2);

                console.log("Dropdown Content", dropdownContent);


                // Remove the cloned option from the dropdown
                dropdownContent3_2.removeChild(clonedOption);
            });
        } else if (Number(prerequisiteGrade) === 5 && course.sem === 1) { 
        // Check if prerequisite course is found in tableBody4
        const prerequisiteFound = await findAndLogCourseCodesForTable('tableBody4', 'CSC 0221', coursesData);
        if (prerequisiteFound) {
            const option = document.createElement('a');
            option.classList.add('dropdown-item');
            option.href = '#';
            option.textContent = `${course.course_code} - ${course.course_name}`;
            dropdownContent4_1.appendChild(option);

            option.addEventListener('click', function () {
                dropdownContent4_1.removeChild(option);
                appendRowToTable(dropdownContent4_1);
            });
        } else {
            console.log('Prerequisite course not found in tableBody4, so option not appended.');
        }
        } else {
                let prerequisiteFound; 
                document.getElementById(targetTableId).appendChild(newRow);
                console.log("Added course:", course.course_code, course.year_lvl);
                console.log("Pre-requisite found???:", prerequisiteFound);
                
                updateTotalUnits('tableBody', 'totalUnits');
                updateTotalUnits('tableBody2', 'totalUnits2');
                updateTotalUnits('tableBody3', 'totalUnits3');
                updateTotalUnits('tableBody4', 'totalUnits4');
            }
    }
    // Pass courses data to JavaScript
    const coursesData = {!! json_encode($courses) !!};

    // Loop through courses data and add rows
    coursesData.forEach(course => addRowBackToTable(course));

    const dropdownCourseCodes2_1 = new Set();
    const dropdownCourseCodes2_2 = new Set();
    const dropdownCourseCodes3_1 = new Set();
    const dropdownCourseCodes3_2 = new Set();
    const dropdownCourseCodes4_1 = new Set();
    const dropdownCourseCodes4_2 = new Set();

    // Function to handle the selection from dropdown
    function handleDropdownSelection(courseCode, courseName, courseUnit, preRequisites, year_lvl, sem, grades) {
        // Remove the selected course from the dropdown
        const dropdownItem = document.querySelector(`a.dropdown-item[href="#"][data-course-code="${courseCode}"][data-course-name="${courseName}"]`);
        dropdownItem.remove();

        // Add the course code to the respective set based on year_lvl and sem
        if (Number(year_lvl) === 2 && Number(sem) === 1) {
            dropdownCourseCodes2_1.add(courseCode);
        } else if (Number(year_lvl) === 2 && Number(sem) === 2) {
            dropdownCourseCodes2_2.add(courseCode);
        } else if (Number(year_lvl) === 3 && Number(sem) === 1) {
            dropdownCourseCodes3_1.add(courseCode);
        } else if (Number(year_lvl) === 3 && Number(sem) === 2) {
            dropdownCourseCodes3_2.add(courseCode);
        } else if (Number(year_lvl) === 4 && Number(sem) === 1) {
            dropdownCourseCodes4_1.add(courseCode);
        } else if (Number(year_lvl) === 4 && Number(sem) === 2) {
            dropdownCourseCodes4_2.add(courseCode);
        }

        addRowBackToTable({
        course_code: courseCode,
        course_name: courseName,
        units: courseUnit,
        pre_requisites: preRequisites,
        year_lvl: year_lvl,
        sem: sem, // Pass the provided sem
        grades: grades
        });
    }

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

    function determineDropdown(year_lvl, sem) {
        // Logic to determine the dropdown based on year_lvl and sem
        if (Number(year_lvl) === 2 && Number(sem) === 1) {
            return dropdownContent2_1; // Assuming dropdownContent2_1 is the dropdown for year 2, sem 1
        } else if (Number(year_lvl) === 2 && Number(sem) === 2) {
            return dropdownContent2_2; // Assuming dropdownContent2_2 is the dropdown for year 2, sem 2
        } else if (Number(year_lvl) === 3 && Number(sem) === 1) {
            return dropdownContent3_1; // Assuming dropdownContent3_1 is the dropdown for year 3, sem 1
        } else if (Number(year_lvl) === 3 && Number(sem) === 2) {
            return dropdownContent3_2; // Assuming dropdownContent3_2 is the dropdown for year 3, sem 2
        } else if (Number(year_lvl) === 4 && Number(sem) === 1) {
            return dropdownContent4_1; // Assuming dropdownContent4_1 is the dropdown for year 4, sem 1
        } else if (Number(year_lvl) === 4 && Number(sem) === 2) {
            return dropdownContent4_2; // Assuming dropdownContent4_2 is the dropdown for year 4, sem 2
        } else {
            console.error("Could not determine dropdown for year_lvl:", year_lvl, "and sem:", sem);
            // Handle cases where the year_lvl and sem combination doesn't match an existing dropdown
            return null; // Or return a default dropdown if applicable
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

    function findAndLogCommonCourseCodes() {
        // Get all tables
        const tables = document.querySelectorAll('.table');

        // Array to store course codes
        const courseCodes = [];

        // Iterate through each table
        tables.forEach(table => {
            // Get all rows in the table body
            const rows = table.querySelectorAll('tbody tr');

            // Iterate through each row
            rows.forEach(row => {
                // Get the course code from the first column
                const courseCode = row.cells[0].textContent.trim();

                // Add the course code to the array if it's not empty
                if (courseCode) {
                    courseCodes.push(courseCode);
                }
            });
        });

        // Log the course codes to the console
        console.log('All Course Codes:', courseCodes);
    }

    document.getElementById('findCommonCourseCodesButton').addEventListener('click', function() {
        // Call a function to find common course codes and log them to the console
        findAndLogCommonCourseCodes();
    });

    async function findAndLogCourseCodesForTable(tableId, courseCode, coursesData) {
        // Get the specified table by its ID
        const table = document.getElementById(tableId);
        // Variables for prerequisite course code and target table ID
        const prerequisiteCourseCode = await findPrerequisites(courseCode, coursesData);
        const targetTableId = 'tableBody4'; // Define or retrieve target table ID

        // Check if the table exists
        if (!table) {
            console.error(`Table with ID '${tableId}' not found.`);
            return;
        }

        // Array to store course codes
        const courseCodes = [];

        // Get all rows in the table body
        const rows = table.querySelectorAll('tbody tr');

        // Iterate through each row
        rows.forEach(row => {
            // Get the course code from the first column
            const courseCode = row.cells[0].textContent.trim();

            // Add the course code to the array if it's not empty
            if (courseCode) {
                courseCodes.push(courseCode);
            }
        });

        if (courseCodes.includes("CSC 0221") && targetTableId === 'tableBody4') {
            console.log('Prerequisite course found in tableBody4');
            return "true";
            // Send a message to the console when CSC 0221 is found in tableBody4
        } else {
            console.log('Prerequisite course not found in tableBody4');
            return "false";
        }

        // Log the course codes and prerequisites to the console
        console.log(`Course Codes for Table '${tableId}':`, courseCodes);
        
    }

    document.getElementById('findCourseCodesButton').addEventListener('click', async function() {
        // Assuming you have a course code available, replace 'CSC 0221' with that course code
        const courseCode = 'CSC 0221';
        // Assuming you have coursesData available, replace 'coursesData' with that variable
        const coursesData = []; // Replace with your actual data
        await findAndLogCourseCodesForTable('tableBody4', courseCode, coursesData);
    });

@endforeach

</script>

