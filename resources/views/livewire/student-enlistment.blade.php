<!-- Parent Component for 1st to 4th Year Container (Student Enlistment) -->
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
        <div class="nav-item">
            <a href="http://localhost:8000/chairperson/block_classes" class="nav-link">Block Management</a>
        </div>
        <div class="nav-item page-item">
            <a href="http://localhost:8000/chairperson/student_enlistment" class="nav-link">Student Enlistment</a>
        </div>
        <div class="nav-item">
            <a href="http://localhost:8000/chairperson/student_transaction" class="nav-link">Transactions</a>
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
    
    let previousYearLevel = null;

    function loadYearLevelScripts(year) {
        // Remove scripts for the previously clicked year level
        if (previousYearLevel !== null) {
            removeYearLevelScripts(previousYearLevel);
        }

        // Load scripts for the selected year level
        const script = document.createElement('script');
        script.src = `/js/year${year}.js`; // Assuming your script files are named yearFirst.js etc.
        script.setAttribute('data-year-level', year); // Set a custom attribute to identify the script by year level
        document.body.appendChild(script);

        // Update the previousYearLevel variable
        previousYearLevel = year;
    }

    function removeYearLevelScripts(year) {
        // Select all scripts with data-year-level attribute equal to the year level
        const scripts = document.querySelectorAll(`script[data-year-level="${year}"]`);

        // Remove each script
        scripts.forEach(script => {
            console.log('Removing script:', script.src);
            script.parentNode.removeChild(script);
        });
    }

    // Attach the loadYearLevelScripts function to the click event of accordion buttons
    const accordionButtons = document.querySelectorAll('.accordion-button');
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const year = this.textContent.trim().split(' ')[0]; // Extract the year level from the button text
            loadYearLevelScripts(year);
        });
    });
    
</script>
