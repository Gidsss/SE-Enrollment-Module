<div>
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
        <div class="nav-item page-item">
            <a href="http://localhost:8000/chairperson/block_classes" class="nav-link">Block Management</a>
        </div>

        <div class="nav-item ">
            <a href="http://localhost:8000/chairperson/student_enlistment" class="nav-link">Student Enlistment</a>
        </div>
        <div class="nav-item">
            <a href="http://localhost:8000/chairperson/student_transaction" class="nav-link">Transactions</a>


        </div>
</div>
     <!-- Components header -->
        <div style="width: 100%; height: 10%; text-align: right; padding-right: 0px; color: black; font-size: 20px; font-family: Inter; line-height: 33px; font-weight: 200; word-wrap: break-word; position: relative;">
            <div style="display: flex; align-items: right; padding-left: 1095px; background-color: #F6F6F6;">
                <span>Home / Enrollment / Blocklasses Management</span>
            </div>
            <div style="flex-grow: 1; height: 1px; border: .2px rgba(0, 0, 0, 0.20) solid;"></div>
        </div>

    <!-- Main components -->

    <div id="left-card" class="card">
        <div class="year-container" id="first-year-container">
            <p style="font-size: 28px; font-family: Inter; font-weight: bold;">First Year
            <img src="{{ asset('backend/dist/img/add.png') }}" style="margin-left: 51px; height: 20px; width: 20px; cursor: pointer;" onclick="addAccordion('First Year')"></p>
        </div>

        <div class="year-container" id="second-year-container">
        <p style="font-size: 28px; font-family: Inter; font-weight: bold;">Second Year<img src="{{ asset('backend/dist/img/add.png') }}" style="margin-left: 15px;height: 20px; width: 20px; cursor: pointer;" onclick="addAccordion('Second Year')"></p>
    </div>

        <div class="year-container" id="third-year-container">
            <p style="font-size: 28px; font-family: Inter; font-weight: bold;">Third Year
            <img src="{{ asset('backend/dist/img/add.png') }}" style="margin-left: 40px;height: 20px; width: 20px; cursor: pointer;" onclick="addAccordion('Third Year')"></p>
        </div>

        <div class="year-container" id="fourth-year-container">
            <p style="font-size: 28px; font-family: Inter; font-weight: bold;">Fourth Year<img src="{{ asset('backend/dist/img/add.png') }}" style="margin-left: 27px;height: 20px; width: 20px; cursor: pointer;" onclick="addAccordion('Fourth Year')"></p>
        </div>
    </div>

    <!-- Modal for entering the number of blocks -->
<div id="addBlockModal" class="modal" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Blocks</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <label for="blockCount">Number of Blocks:</label>
                <input type="number" id="blockCount" min="1" value="1">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="createBlocks()">Add Blocks</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

        <!-- Modal for Maximum Blocks -->
        <div id="maxBlockLimitModal" class="modal" style="display: none;  position: fixed; z-index: 1; left: 0;  top: 0;  width: 100%; height: 100%; overflow: auto;
        background-color: rgba(0,0,0,0.5);">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Error</h5>
                <button type="button" class="close" onclick="closeModal()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p>The maximum limit of four blocks for the <span id="modalYear"></span> has been reached.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
    <script>
    // function handleSchedClick(event) {
    //     // Handle the click event here
    //     window.location.href = ' route("regular_schedule") }}';
    //     event.preventDefault(); // Prevent the default behavior of the anchor tag
    // }
    // function handleSERClick(event) {
    //     // Handle the click event here
    //     window.location.href = ' route("regular_ser") }}';
    //     event.preventDefault(); // Prevent the default behavior of the anchor tag
    // }
        const blockCounts = {
        'First Year': 0,
        'Second Year': 0,
        'Third Year': 0,
        'Fourth Year': 0
    };

    function createAccordionClosure(year, blockCount) {
        return function () {
            toggleAccordion(`${year.toLowerCase().replace(' ', '-')}--content${blockCount}`);
        };
    }

   // Updated addAccordion function to open the modal
   function addAccordion(year) {
    // Open the modal for entering the number of blocks
    $('#addBlockModal').modal('show');
    selectedYear = year; // Save the selected year for later use
    
    // Update the year container text
    const yearContainer = document.querySelector(`#${selectedYear.toLowerCase().replace(' ', '-')}-container`);
    yearContainer.innerHTML = ''; // Clear existing content
    const yearText = document.createElement('p');
    yearText.style.fontSize = '28px';
    yearText.style.fontFamily = 'Inter';
    yearText.style.fontWeight = 'bold';
    yearText.textContent = year;
    yearContainer.appendChild(yearText);
    }

    // Function to create blocks based on user input
    function createBlocks() {
    const blockCount = parseInt(document.getElementById('blockCount').value);
    
    // Clear existing blocks and re-append the year text
    const yearContainer = document.querySelector(`#${selectedYear.toLowerCase().replace(' ', '-')}-container`);
    yearContainer.innerHTML = '';
    
    // Re-append the year text
    const yearText = document.createElement('p');
    yearText.style.fontSize = '28px';
    yearText.style.fontFamily = 'Inter';
    yearText.style.fontWeight = 'bold';
    yearText.textContent = selectedYear;
    yearContainer.appendChild(yearText);

    // Create the desired number of blocks
    for (let i = 1; i <= blockCount; i++) {
        const accordionButton = document.createElement('div');
        accordionButton.className = 'accordion-button';
        accordionButton.textContent = `Block ${i}`;
        accordionButton.onclick = createAccordionClosure(selectedYear, i);
        yearContainer.appendChild(accordionButton);
    }

    // Close the modal
    $('#addBlockModal').modal('hide');
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
                const cellStyle = 'border: none; text-align: center;';

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

    // Close the modal when the user clicks on the close button
    function closeModal() {
        const modal = document.getElementById('maxBlockLimitModal');
        modal.style.display = 'none';
    }
    // Close the modal when the close button is clicked
    function closeModal1() {
        modal.style.display = 'none';
    }
    
    </script>

