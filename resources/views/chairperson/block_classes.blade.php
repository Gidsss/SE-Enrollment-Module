
@extends('layouts.chairpersonapp')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://www.flaticon.com/free-icons/plus"/>
<style>
    .custom-table-container {
        position: absolute;
        top: 230px; /* Change this value to adjust the top position */
        left: 13%; /* Change this value to adjust the left position */
        width: 85%; /* Adjust the width of the container */
        background-color: white !important;
        border-radius: 10px; /* Adjust the radius for rounded edges */
        border: 1px solid #ccc; /* Adjust the border color and thickness */
    }
    .broken-line {
        width: 95%;
        border-bottom: 2.5px dashed grey;
        white-space: pre;
        font-family: monospace;
        position: absolute;
        margin-left: 10px;
        margin-right: 10px;
    }
    .connector-blue {
        position: absolute;
        top: 75%;
        left: calc(15ch + 220px);
        width: 255px;
        height: 5px;
        background-color: #2D349A;
        z-index: 0;
    }
        
    .connector-gray {
        position: absolute;
        top: 75%;
        left: calc(49ch + 254px);
        width: 237px;
        height: 5px;
        background-color: gray;
        z-index: 0;
    }
    .nav-bar {
        max-width: 100%;
        height: 50px;
        background-color: #e0dcdc;
        position: relative;
    }
    .nav-link {
        color: black;
        font-family: Inter, sans-serif;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        text-decoration: none;
        display: block;
        line-height: 50px;
        padding: 0px 125px;
    }
    .nav-item {
        display: inline-block;
        height: 50px;
    }
    .nav-item:hover .nav-link {
        background-color: #BCBCBC;
        color: black;
    }
    .page-item .nav-link {
        background-color: #BCBCBC;
        color: black;
    }

    body {
            display: flex;
            margin: 0;
        }

    #left-card {
            padding: 20px;
            border: 1px solid #ccc;
            width: 250px;
            position: absolute;
            top: 180px;
            left: 40px;
    }

    #right-card {
            position: absolute;
            top: 150px;
            left: 300px;
            padding: 10px;
            flex-grow: 1;
            display: block;
    }
    .message {
            position: absolute;
            top: 200px;
            left: 250px;
            font-size: 18px;
            color: #777;
            text-align: center;
            display: block;
            border: 1px solid #ccc;
    }

    .year-container {
            margin-bottom: 10px;
    }

    .accordion-button {
            cursor: pointer;
            padding: 10px;
            background-color: #E3E3E3;
            margin-bottom: 5px;
            border-radius: 6px;
            font-family: Inter;
    }

    .accordion-content {
            display: none;
            padding: 10px;
            margin-bottom: 5px;
    }

    .active {
            background-color: #ddd;
    }
</style>
   <!-- Welcome Modal -->
<div id="myModal" class="modal" style="display: none;  position: fixed; z-index: 1; left: 0;  top: 0;  width: 100%; height: 100%; overflow: auto;
        background-color: rgba(0,0,0,0.5);">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Welcome, Mx. Chairperson!</h5>
                <button type="button" class="close" onclick="closeModal1()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please choose blocks from the left.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal1()">Close</button>
            </div>
        </div>
    </div>
</div>
        <div style="max-width:100%; height:auto; background-color: #30349c; position: relative;">
            <img src="{{ asset('public/backend/dist/img/plmlogo.png') }}" style="width:65px; height:65px; position:absolute; top:5%; left:1%">
            <span style="color: #d4a404; position: absolute; top: 22%; left: 5.5%; font-family: Inter, sans-serif; font-size: 13px; font-weight: bold;">PAMANTASAN NG LUNGSOD NG MAYNILA</span>
            <span style="color: white; position: absolute; top: 47%; left: 5.5%; font-family: Inter, sans-serif; font-size: 13px; font-weight: bold;">UNIVERSITY OF THE CITY OF MANILA</span>
            <br><br><br>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 50%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Schedules</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 58%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Student Records</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 69%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Enrollment</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left:76%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Print Forms</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 84%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Utilities</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 90%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Logout<i class="fas fa-sign-out-alt" style="color: white; left:5%; position: relative;"></i></span>
            </a>
        </div>

        <div class="nav-bar">
        <div class="nav-item">
            <a href="" class="nav-link">Class Creation</a>
        </div>
        <div class="nav-item page-item">
            <a href="" class="nav-link">Block Management</a>
        </div>
        <div class="nav-item">
            <a href="" class="nav-link">Student Enlistment</a>
        </div>
        <div class="nav-item">
            <a href="" class="nav-link">Transaction</a>
        </div>
</div>
     <!-- Components header -->
        <div style="width: 100%; height: 10%; text-align: right; padding-right: 0px; color: black; font-size: 20px; font-family: Inter; line-height: 33px; font-weight: 200; word-wrap: break-word; position: relative;">
            <div style="display: flex; align-items: right; padding-left: 1080px;">
                <span>Home / Enrollment / Blocklasses Management</span>
            </div>
            <div style="flex-grow: 1; height: 1px; border: 1px rgba(0, 0, 0, 0.20) solid;"></div>
        </div>

    <!-- Main components -->

    <div id="left-card" class="card">
        <div class="year-container" id="first-year-container">
            <p style="font-size: 28px; font-family: Inter; font-weight: bold;">First Year
            <img src="{{ asset('public/backend/dist/img/add.png') }}" style="margin-left: 51px; height: 20px; width: 20px; cursor: pointer;" onclick="addAccordion('First Year')"></p>
        </div>

        <div class="year-container" id="second-year-container">
        <p style="font-size: 28px; font-family: Inter; font-weight: bold;">Second Year<img src="{{ asset('public/backend/dist/img/add.png') }}" style="margin-left: 15px;height: 20px; width: 20px; cursor: pointer;" onclick="addAccordion('Second Year')"></p>
    </div>

        <div class="year-container" id="third-year-container">
            <p style="font-size: 28px; font-family: Inter; font-weight: bold;">Third Year
            <img src="{{ asset('public/backend/dist/img/add.png') }}" style="margin-left: 40px;height: 20px; width: 20px; cursor: pointer;" onclick="addAccordion('Third Year')"></p>
        </div>

        <div class="year-container" id="fourth-year-container">
            <p style="font-size: 28px; font-family: Inter; font-weight: bold;">Fourth Year<img src="{{ asset('public/backend/dist/img/add.png') }}" style="margin-left: 27px;height: 20px; width: 20px; cursor: pointer;" onclick="addAccordion('Fourth Year')"></p>
        </div>
    </div>
    <div id="right-card">
    </div>
<!-- Modal -->
<div class="modal fade" id="addClassModal" tabindex="-1" role="dialog" aria-labelledby="addClassModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addClassModalLabel">Add Class</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                 </div> 
                <div class="modal-body">
                    <!-- Add your form elements here -->
                  <form id="addClassForm">
                        <div class="form-group">
                            <label for="classNumber">#</label>
                            <input type="text" class="form-control" id="classNumber" required>
                        </div>
                        <div class="form-group">
                            <label for="className">Class</label>
                            <input type="text" class="form-control" id="className" required>
                        </div>
                        <div class="form-group">
                            <label for="section">Section</label>
                            <input type="text" class="form-control" id="section" required>
                        </div>
                        <div class="form-group">
                            <label for="units">Units</label>
                            <input type="text" class="form-control" id="units" required>
                        </div>
                        <div class="form-group">
                            <label for="schedule">Schedule</label>
                            <input type="text" class="form-control" id="schedule" required>
                        </div>
                        <div class="form-group">
                            <label for="slots">Slots</label>
                            <input type="text" class="form-control" id="slots" required>
                        </div>
                       
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveClassDetails()">Add Class</button> 
                </div>
            </div>
        </div>
</div>
    <script>
    function handleSchedClick(event) {
        // Handle the click event here
        window.location.href = '{{ route("regular_schedule") }}';
        event.preventDefault(); // Prevent the default behavior of the anchor tag
    }
    function handleSERClick(event) {
        // Handle the click event here
        window.location.href = '{{ route("regular_ser") }}';
        event.preventDefault(); // Prevent the default behavior of the anchor tag
    }
    const blockCounts = {
        'First Year': 0,
        'Second Year': 0,
        'Third Year': 0,
        'Fourth Year': 0
    };
    let activeAccordionContent = null;

    function createAccordionClosure(year, blockCount) {
        return function () {
            toggleAccordion(`${year.toLowerCase().replace(' ', '-')}--content${blockCount}`);
            activeAccordionContent = document.getElementById(`${year.toLowerCase().replace(' ', '-')}--content${blockCount}`)
        };
    }

    function addAccordion(year) {
        blockCounts[year]++;


            // Create accordion button
        const blockCount = blockCounts[year];
        const accordionButton = document.createElement('div');
        accordionButton.className = 'accordion-button';
        accordionButton.textContent = `Block ${blockCount}`;
        accordionButton.onclick = createAccordionClosure(year, blockCount);

        // Create accordion content
        const accordionContent = document.createElement('div');
        accordionContent.id = `${year.toLowerCase().replace(' ', '-')}--content${blockCount}`;
        accordionContent.className = 'accordion-content';
        accordionContent.style.display = 'none'; // Hide the content by default

        // Create and append the heading
        const paragraph = document.createElement('p');
        paragraph.textContent = `BSCS ${year} Block ${blockCount}`;
        paragraph.style.fontFamily = 'Inter, sans-serif'; // Example style
        paragraph.style.fontSize = '48px';

        // Create a button and append it next to the heading
        const addButton = document.createElement('button');
        addButton.textContent = 'Add class';
        addButton.type = 'button';
        addButton.className = 'btn';
        addButton.setAttribute('data-toggle', 'modal'); // Add this line
        addButton.setAttribute('data-target', '#addClassModal'); // Add this line
        addButton.style.fontSize = '14px';
        addButton.style.fontFamily = 'Inter, sans-serif';
        addButton.style.backgroundColor = 'white';
        addButton.style.color = 'black';
        addButton.style.border = '1.5px solid #000';
        addButton.style.boxSizing = 'border-box'; // Set box-sizing to border-box
        addButton.style.marginLeft = '40px'; // Reset margin
        addButton.style.marginBottom = '10px'; // Reset margin
        addButton.style.padding = '6px 12px';

        // Use display: flex for the container to align items horizontally
        const container = document.createElement('div');
        container.style.display = 'flex';
        container.style.alignItems = 'center';

        // Append both the paragraph and button to the container
        container.appendChild(paragraph);
        container.appendChild(addButton);

        // Append the container to the accordionContent
        accordionContent.appendChild(container);

        // Append button to the corresponding year container in the left card
        const yearContainer = document.querySelector(`#${year.toLowerCase().replace(' ', '-')}-container`);
        yearContainer.appendChild(accordionButton);

        // Append content to the right card
        document.getElementById('right-card').appendChild(accordionContent);

         // Create card and table within accordion content
        const card = document.createElement('div');
        card.className = 'card';
        card.style.border = '1px solid #ccc';
        card.style.padding = '16px';
        card.style.marginTop = '20px';
        // Create form and table within accordion content
        const table = document.createElement('table');
        table.className = 'table';
        table.style.width = '1140px'; // Set the width of the table
        table.style.borderCollapse = 'collapse';

        const thead = document.createElement('thead');
        const headerRow = document.createElement('tr');

        const headers = ['#', 'Class', 'Sec', 'Units', 'Schedule', 'Slots'];

        headers.forEach(headerText => {
            const th = document.createElement('th');
            th.textContent = headerText;
            th.style.border = '1px solid #ccc';
            th.style.padding = '8px'; // Adjusted padding value
            th.style.textAlign = 'center';
            headerRow.appendChild(th);
        });

        thead.appendChild(headerRow);
        table.appendChild(thead);

        card.appendChild(table)

        accordionContent.appendChild(card);
        
        

    }

    function toggleAccordion(contentId) {
        const content = document.getElementById(contentId);
        const allContents = document.querySelectorAll('.accordion-content');

        allContents.forEach(function (element) {
            if (element.id === contentId) {
                element.style.display = element.style.display === 'none' ? 'block' : 'none';
            } else {
                element.style.display = 'none';
            }
        });
    }

    function addClass() {
        // Show the "Add Class" modal
        $('#addClassModal').modal('show');
    }
    function closeModal() {
    // Close the modal
    $('#addClassModal').modal('hide');
    }
    // Function to handle saving the class details
    function saveClassDetails() {
        if (activeAccordionContent) {
            // Find the table within the active accordion content
            const table = activeAccordionContent.querySelector('.table');

            if (table) {
                // Retrieve values from form fields
                const classNumber = document.getElementById('classNumber').value;
                const className = document.getElementById('className').value;
                const section = document.getElementById('section').value;
                const units = document.getElementById('units').value;
                const schedule = document.getElementById('schedule').value;
                const slots = document.getElementById('slots').value;

                // Create a new row in the table
                const newRow = table.insertRow(-1); // -1 appends a new row at the end

                // Array of header texts
                const headers = ['#', 'Class', 'Sec', 'Units', 'Schedule', 'Slots'];

                // Set additional styles for the cells (you can adjust as needed)
                const cellStyle = 'border: 1px solid #ccc; padding: 8px; text-align: center;';

                // Loop through headers to create cells
                for (let j = 0; j < headers.length; j++) {
                    const td = document.createElement('td');
                    td.setAttribute('style', cellStyle);

                    // Set the values of the cells based on the header
                    switch (headers[j]) {
                        case '#':
                            td.textContent = classNumber;
                            break;
                        case 'Class':
                            td.textContent = className;
                            break;
                        case 'Sec':
                            td.textContent = section;
                            break;
                        case 'Units':
                            td.textContent = units;
                            break;
                        case 'Schedule':
                            td.textContent = schedule;
                            break;
                        case 'Slots':
                            td.textContent = slots;
                            break;
                        default:
                            // Handle default case if needed
                            break;
                    }

                    // Append the cell to the row
                    newRow.appendChild(td);
                }

                // Close the modal
                $('#addClassModal').modal('hide');

                // Clear the form
                document.getElementById('addClassForm').reset();
            }
        }
    }
        // Get the modal element
    const modal = document.getElementById('myModal');

    // Show the modal when the page loads
    window.onload = function() {
        modal.style.display = 'block';
    };

    // Close the modal when the close button is clicked
    function closeModal1() {
        modal.style.display = 'none';
    }
    
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>


@endsection

