<!-- Parent Component for Student Enlistment -->
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

    #left-card1 {
            padding: 20px;
            border: 1px solid #ccc;
            width: 250px;
            position: absolute;
            top: 503px;
            left: 40px;
    }


    #right-card {
            position: absolute;
            top: 120px;
            left: 280px;
            padding: 8px;
            flex-grow: 1;
            display: block;
            width: 80%;
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

    .accordion-button.active {
    background-color: #A0A0A0;
    color: #FFF; 
    }

    .accordion-content {
            display: none;
            padding: 10px;
            margin-bottom: 5px;
    }

    .active {
            background-color: #ddd;
    }
    .text-first-year {
            font-size: 48px;
            font-family: 'Inter', sans-serif; 
    }
    html {
            background-color: #F6F6F6;
    }
    
</style>
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
            <a href="http://localhost/enrollmentmod/chairperson/create_class" class="nav-link">Class Creation</a>
        </div>
        <div class="nav-item ">
            <a href="http://localhost/enrollmentmod/chairperson/block_classes" class="nav-link">Block Management</a>
        </div>
        <div class="nav-item page-item">
            <a href="http://localhost/enrollmentmod/chairperson/student_enlistment" class="nav-link">Student Enlistment</a>
        </div>
        <div class="nav-item">
            <a href="http://localhost/enrollmentmod/chairperson/student_transaction" class="nav-link">Validation</a>
        </div>
</div>
     <!-- Components header -->
        <div style="width: 100%; height: 10%; text-align: right; padding-right: 0px; color: black; font-size: 20px; font-family: Inter; line-height: 33px; font-weight: 200; word-wrap: break-word; position: relative;">
            <div style="display: flex; align-items: right; padding-left: 1158px; background-color: #F6F6F6;">
                <span>Home / Enrollment / Student Enlistment</span>
            </div>
            <div style="flex-grow: 1; height: 1px; border: 1px rgba(0, 0, 0, 0.20) solid;"></div>
        </div>

        <!-- Main components -->
        <div id="left-card" class="card">
            <div class="year-container" id="accordion-container">
                <p style="font-size: 28px; font-family: Inter; font-weight: bold;">Year Level</p>
              
            </div>
        </div>
        <div id="right-card">
            <div id="livewire-component-container">
                <div id="first-year-container" class="livewire-component"  style="display: none;">
                    <livewire:first-year-container />
                </div>
                <div id="second-year-container" class="livewire-component" style="display: none;">
                    <livewire:second-year-container />
                </div>
                <div id="third-year-container" class="livewire-component" style="display: none;">
                    <livewire:third-year-container />
                </div>
                <div id="fourth-year-container" class="livewire-component" style="display: none;">
                    <livewire:fourth-year-container />                   
                </div>
            </div>
        </div>
        
          <!-- <button class="accordion-button" onclick="toggleAccordion('first-year')">First Year</button>
            <button class="accordion-button" onclick="toggleAccordion('second-year')">Second Year</button>
            <button class="accordion-button" onclick="toggleAccordion('third-year')">Third Year</button>
            <button class="accordion-button" onclick="toggleAccordion('fourth-year')">Fourth Year</button> -->
 <!-- Welcome Modal -->
 <div id="welcomeModal" class="modal" style="display: none;  position: fixed; z-index: 1; left: 0;  top: 0;  width: 100%; height: 100%; overflow: auto;
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
                <p>Please choose year from the left.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal1()">Close</button>
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

   
    // JavaScript for dynamic generation of accordion buttons and Livewire component containers
    const years = ['First Year', 'Second Year', 'Third Year', 'Fourth Year'];

    const accordionContainer = document.getElementById('accordion-container');
    const livewireContainer = document.getElementById('livewire-component-container');

    years.forEach((year, index) => {
        // Create accordion button
        const accordionButton = document.createElement('div');
        accordionButton.className = 'accordion-button';
        accordionButton.textContent = year;
        accordionButton.onclick = () => toggleAccordion(index);

        // Append button to the accordion container
        accordionContainer.appendChild(accordionButton);
    });

    function toggleAccordion(index) {
        // Remove active class from all accordion buttons
        const allButtons = document.querySelectorAll('.accordion-button');
        allButtons.forEach(button => {
            button.classList.remove('active');
        });

        // Add active class to the clicked button
        const clickedButton = document.querySelectorAll('.accordion-button')[index];
        clickedButton.classList.add('active');

        // Hide all Livewire component containers
        const allContainers = document.querySelectorAll('.livewire-component');
        allContainers.forEach(container => {
            container.style.display = 'none';
        });

        // Show the selected Livewire component container
        const selectedContainerId = `${years[index].toLowerCase().replace(' ', '-')}-container`;
        const selectedContainer = document.getElementById(selectedContainerId);
        if (selectedContainer) {
            selectedContainer.style.display = 'block';
        } else {
            console.error(`Livewire component container with ID ${selectedContainerId} not found.`);
        }
    }
    // function toggleAccordion(yearLevel) {
    //         // Hide all Livewire component containers
    //         const allContainers = document.querySelectorAll('.livewire-component');
    //         allContainers.forEach(container => {
    //             container.style.display = 'none';
    //         });

    //         // Show the selected Livewire component container
    //         const selectedContainer = document.getElementById(yearLevel + '-container');
    //         selectedContainer.style.display = 'block';
    //     }
    // Get the modal element
    const modal = document.getElementById('welcomeModal');

    // Show the modal when the page loads
    window.onload = function() {
        modal.style.display = 'block';
    };

    // Close the modal when the close button is clicked
    function closeModal1() {
        modal.style.display = 'none';
    }
    
    </script>
