@extends('layouts.app')

@section('content')
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LQJzBrrqfmyPXYjXvKXt8CvHv5bFIYt9qBqYRg0cFxJ+98FZBvFZ52EGEWk3HPlbeXmFfZl6Ko25Xme+ERyI2g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    
    <style>
        .accordion {
            background-color: white;
            color: #000000;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #EAEAEA;
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .accordion:after {
            content: '\02795'; /* Unicode character for "plus" sign (+) */
            font-size: 25px;
            color: #000000;
            float: right;
            margin-left: 5px;
            
        }

        .active:after {
            content: "\2796"; /* Unicode character for "minus" sign (-) */
            color: #000000;
            font-size: 25px;
        }

        .body-font {
            font-family: Inter, sans-serif; 
            font-size: 20px; 
            color:black;
        }

        .custom-bg-color {
            background-color: #F0F0F0;
        }

        .custom-table-container {
            position: relative;
            top: 230px; /* Change this value to adjust the top position */
            left: 13%; /* Change this value to adjust the left position */
            width: 85%; /* Adjust the width of the container */
            background-color: white !important;
            border-radius: 10px; /* Adjust the radius for rounded edges */
            border: 1px solid #ccc; /* Adjust the border color and thickness */
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
            width: 240px;
            height: 5px;
            background-color: gray;
            z-index: 0;
        }
        .hidden {
            display: none;
        }
        .tab1 {
            tab-size: 2;
        }
        .center-button {
            text-align: center;
        }
        .step-checkmark {
            display: none;
            color: #624BFF;
        }
    </style>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">         
            </div><!-- /.col -->
        </div><!-- /.row -->



        <div class="card" style="max-width:100%; height:auto; color: #2D349A; position: relative;">
        <br>
        <span style="position: absolute; top: 0.90ch; left: 1ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">Enrollment</span>   
            <br><br>
            <div class="status-card" style="width:20ch; height:4ch; position: absolute; top: 3.5ch; right: 22ch; border: .25px solid #000; 
            display: flex; justify-content: center; align-items: center;">
                <p style="margin-left: .2rem; margin-top: 1rem;">Status: Enlisted <i class="fas fa-circle" style="color: yellow"></i></p>
            </div>

            <button type="button" class="btn btn-primary float-right" style="color: #2D349A; position: absolute; top: 3.5ch; right: 2ch; width: 150px; height: 4ch;">
        <i class="fas fa-download" style="color: white; margin-right: .5rem; top: -0.2rem; position: relative;"></i>
        <span style="color: white;  margin-right: 0.5rem; top: -0.2rem; position: relative;">Save a Copy</span>
    </button>

        </div>
    </div>
        
    <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">         
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="card" style="max-width: 100%; height: 250ch; color: #2D349A; position: relative;">
            <div style="width:145ch; height:10ch; color: #2D349A; position: relative;">
                <br>
                
                <span style="position: absolute; top: 1cm; left: 12ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="fas fa-circle" style="font-size: 50px;"></i>
                    <span style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
                </span>
                
                <a href="#" onclick="handleAssessmentClick(event)" style="text-decoration: none;">
                <span style="position: absolute; top: 1cm; left: 24.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="far fa-circle" style="font-size: 54px; color: #2D349A; "></i>
                    <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">2</span>
                </span>            
                </a>

                <span style="position: absolute; top: 1cm; left: 36.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="far fa-circle" style="font-size: 54px;color: grey"></i>
                    <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">3</span>
                </span>
                <!-- Connectors -->
                <div class="connector-blue"></div>
                <div class="connector-gray"></div>

                <div  style="position:absolute; top: 100px;left:213px ;width:70% ;height:60%">
                    <span style="position: absolute; top: 45%; left: 13.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Check Schedule</span>
                    <span style="position: absolute; top: 45%; left: 50.3%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">View Assessment</span>
                    <span style="position: absolute; top: 45%; left: 85.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Download SER</span>
                </div>

                <div class="card custom-bg-color" style="position: absolute; top: 170px; left: 13%; width: 85%; height: 60%">
                    <i class="fa fa-info-circle" style="font-size: 18px; color: black; margin-left: 3.5rem; top: .8rem; position: relative;"></i>
                    <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Follow steps one to five below. Failure to comply with a step prohibits you from proceeding forward the enrollment process.</span>    
                </div>            

                <!-- Main content -->
                <section class="content">
                <!-- Step 1 -->
                <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">1. Requirements and Reminders
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                <!-- Detailed information for Step 1 -->
                <div class="panel">
                    <p style="font-family: Inter, sans-serif; font-size: 24px; color:black;">General Rules Guidelines</p>
                    <!-- Content for letter 'a' -->
                    <p class="body-font">&nbsp;&nbsp;a. Students of respective degree programs must strictly observe the prescribed curriculum.</p>
                    <!-- Content for letter 'b' -->
                    <p class="body-font">&nbsp;&nbsp;b. Each Department shall issue a Curriculum checklist/ Course Prospectus to the student, which shall be used <p class="body-font">&nbsp;&nbsp;until he/she graduates.</p></p>
                    <!-- Content for letter 'c' -->
                    <p class="body-font">&nbsp;&nbsp;c. Students must enroll their subjects as scheduled on a particular semester/term with consideration of the <p class="body-font">&nbsp;&nbsp;required pre-requisites prior to enrolling.</p></p>
                    <!-- Content for letter 'd' -->
                    <p class="body-font">&nbsp;&nbsp;d. To avoid re-enrolling a completed subject, the respective Deans must ensure that the student has properly <p class="body-font">&nbsp;&nbsp;accomplished the “Curriculum checklist/ Course Prospectus”.</p></p>
                    <!-- Content for letter 'e' -->
                    <p class="body-font">&nbsp;&nbsp;e. As an irregular student, it is required of you to submit your Study Plan containing a personalized curriculum of <p class="body-font">&nbsp;&nbsp;courses to be taken based on the Curriculum checklist/ Course Prospectus provided to you by your department.</p></p>
                    <!-- Content for letter 'f' -->
                    <p class="body-font">&nbsp;&nbsp;f. Enlistment procedures of irregular students will be similar to enlistment of Physical Education (PE) courses. <p class="body-font">&nbsp;&nbsp;But this time, all courses will be enlisted by the student as per their approved Study Plan.</p></p>
                    <p style="font-family: Inter, sans-serif; font-size: 26px; color:black;">Reminders and Regulations</p> 
                    <p class="body-font">&nbsp;&nbsp;a. A maximum residency of seven (7) years for undergraduate programs is allowed. Meaning, a student can reside up their 6th year. Academic year skipped due to Leave of Absence (LOA) is not counted.</p>
                    <!-- Content for letter 'b' -->
                    <p class="body-font">&nbsp;&nbsp;b. In cases that students receive failing grade in a subject, they can only retake it once more. Meaning, a student can only take a course twice.</p>
                    <!-- Content for letter 'c' -->
                    <p class="body-font">&nbsp;&nbsp;c. Subjects that have Pre-requisites cannot be taken unless their required subjects are accomplished.</p>
                    <!-- Content for letter 'd' -->
                    <p class="body-font">&nbsp;&nbsp;d. Co-requisites are subjects that should be taken at the same time except in cases that they are to be taken separately as retakes.</p>
                    <!-- Content for letter 'e' -->
                    <p class="body-font">&nbsp;&nbsp;e. Students that are Irregular due to failing grade in a subject are no longer eligible for Latin Honors (Cum Laude, etc.)</p>
                    <!-- Content for letter 'f' -->
                    <p class="body-font">&nbsp;&nbsp;f. Students that are Irregular due to their approved LOA are still eligible for Latin Honors as long as their Study Plan follows the prescribed curriculum.</p>
                    <div class="center-button">
                        <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(1)">Proceed to Curriculum Checklist</button>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Repeat the structure for Steps 2 to 5 -->
                <!-- Step 2 -->
                <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">2. Requirements and Reminders
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                    
                    <!-- Detailed information for Step 2 -->
                    <div class="panel">
                        <p style="font-family: Inter, sans-serif; font-size: 26px; color:black;">Download Curriculum Checklist</p>
                        <!-- Content for letter 'a' -->
                        <p>&nbsp;&nbsp;a. Students of respective degree programs must strictly observe the prescribed curriculum.</p>
                        <!-- Content for letter 'b' -->
                        <p>&nbsp;&nbsp;b. Each Department shall issue a Curriculum checklist/ Course Prospectus to the student, which shall be used <p>&nbsp;&nbsp;until he/she graduates.</p></p>
                        <!-- Content for letter 'c' -->
                        <p>&nbsp;&nbsp;c. Students must enroll their subjects as scheduled on a particular semester/term with consideration of the <p>&nbsp;&nbsp;required pre-requisites prior to enrolling.</p></p>
                        <!-- Content for letter 'd' -->
                        <p>&nbsp;&nbsp;d. To avoid re-enrolling a completed subject, the respective Deans must ensure that the student has properly <p>&nbsp;&nbsp;accomplished the “Curriculum checklist/ Course Prospectus”.</p></p>
                        <!-- Content for letter 'e' -->
                        <p>&nbsp;&nbsp;e. As an irregular student, it is required of you to submit your Study Plan containing a personalized curriculum of <p>&nbsp;&nbsp;courses to be taken based on the Curriculum checklist/ Course Prospectus provided to you by your department.</p></p>
                        <!-- Content for letter 'f' -->
                        <p>&nbsp;&nbsp;f. Enlistment procedures of irregular students will be similar to enlistment of Physical Education (PE) courses. <p>&nbsp;&nbsp;But this time, all courses will be enlisted by the student as per their approved Study Plan.</p></p>
                        <div class="center-button">
                            <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(2)">Proceed to Curriculum Checklist</button>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Step 3 -->
                <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">3. Requirements and Reminders
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                    <!-- Detailed information for Step 3 -->
                    <div class="panel">
                        <p style="font-family: Inter, sans-serif; font-size: 26px; color:black;">Download Curriculum Checklist</p>
                        <!-- Content for letter 'a' -->
                        <p>&nbsp;&nbsp;a. Students of respective degree programs must strictly observe the prescribed curriculum.</p>
                        <!-- Content for letter 'b' -->
                        <p>&nbsp;&nbsp;b. Each Department shall issue a Curriculum checklist/ Course Prospectus to the student, which shall be used <p>&nbsp;&nbsp;until he/she graduates.</p></p>
                        <!-- Content for letter 'c' -->
                        <p>&nbsp;&nbsp;c. Students must enroll their subjects as scheduled on a particular semester/term with consideration of the <p>&nbsp;&nbsp;required pre-requisites prior to enrolling.</p></p>
                        <!-- Content for letter 'd' -->
                        <p>&nbsp;&nbsp;d. To avoid re-enrolling a completed subject, the respective Deans must ensure that the student has properly <p>&nbsp;&nbsp;accomplished the “Curriculum checklist/ Course Prospectus”.</p></p>
                        <!-- Content for letter 'e' -->
                        <p>&nbsp;&nbsp;e. As an irregular student, it is required of you to submit your Study Plan containing a personalized curriculum of <p>&nbsp;&nbsp;courses to be taken based on the Curriculum checklist/ Course Prospectus provided to you by your department.</p></p>
                        <!-- Content for letter 'f' -->
                        <p>&nbsp;&nbsp;f. Enlistment procedures of irregular students will be similar to enlistment of Physical Education (PE) courses. <p>&nbsp;&nbsp;But this time, all courses will be enlisted by the student as per their approved Study Plan.</p></p>
                        <div class="center-button">
                            <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(3)">Proceed to Curriculum Checklist</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">4. Requirements and Reminders
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                    <!-- Detailed information for Step 4-->
                    <div class="panel">
                        <p style="font-family: Inter, sans-serif; font-size: 26px; color:black;">Download Curriculum Checklist</p>
                        <!-- Content for letter 'a' -->
                        <p>&nbsp;&nbsp;a. Students of respective degree programs must strictly observe the prescribed curriculum.</p>
                        <!-- Content for letter 'b' -->
                        <p>&nbsp;&nbsp;b. Each Department shall issue a Curriculum checklist/ Course Prospectus to the student, which shall be used <p>&nbsp;&nbsp;until he/she graduates.</p></p>
                        <!-- Content for letter 'c' -->
                        <p>&nbsp;&nbsp;c. Students must enroll their subjects as scheduled on a particular semester/term with consideration of the <p>&nbsp;&nbsp;required pre-requisites prior to enrolling.</p></p>
                        <!-- Content for letter 'd' -->
                        <p>&nbsp;&nbsp;d. To avoid re-enrolling a completed subject, the respective Deans must ensure that the student has properly <p>&nbsp;&nbsp;accomplished the “Curriculum checklist/ Course Prospectus”.</p></p>
                        <!-- Content for letter 'e' -->
                        <p>&nbsp;&nbsp;e. As an irregular student, it is required of you to submit your Study Plan containing a personalized curriculum of <p>&nbsp;&nbsp;courses to be taken based on the Curriculum checklist/ Course Prospectus provided to you by your department.</p></p>
                        <!-- Content for letter 'f' -->
                        <p>&nbsp;&nbsp;f. Enlistment procedures of irregular students will be similar to enlistment of Physical Education (PE) courses. <p>&nbsp;&nbsp;But this time, all courses will be enlisted by the student as per their approved Study Plan.</p></p>
                        <div class="center-button">
                            <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(4)">Proceed to Curriculum Checklist</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 5 -->
            <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">5. Requirements and Reminders
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                    <!-- Detailed information for Step 5-->
                    <div class="panel">
                        <p style="font-family: Inter, sans-serif; font-size: 26px; color:black;">Download Curriculum Checklist</p>
                        <!-- Content for letter 'a' -->
                        <p>&nbsp;&nbsp;a. Students of respective degree programs must strictly observe the prescribed curriculum.</p>
                        <!-- Content for letter 'b' -->
                        <p>&nbsp;&nbsp;b. Each Department shall issue a Curriculum checklist/ Course Prospectus to the student, which shall be used <p>&nbsp;&nbsp;until he/she graduates.</p></p>
                        <!-- Content for letter 'c' -->
                        <p>&nbsp;&nbsp;c. Students must enroll their subjects as scheduled on a particular semester/term with consideration of the <p>&nbsp;&nbsp;required pre-requisites prior to enrolling.</p></p>
                        <!-- Content for letter 'd' -->
                        <p>&nbsp;&nbsp;d. To avoid re-enrolling a completed subject, the respective Deans must ensure that the student has properly <p>&nbsp;&nbsp;accomplished the “Curriculum checklist/ Course Prospectus”.</p></p>
                        <!-- Content for letter 'e' -->
                        <p>&nbsp;&nbsp;e. As an irregular student, it is required of you to submit your Study Plan containing a personalized curriculum of <p>&nbsp;&nbsp;courses to be taken based on the Curriculum checklist/ Course Prospectus provided to you by your department.</p></p>
                        <!-- Content for letter 'f' -->
                        <p>&nbsp;&nbsp;f. Enlistment procedures of irregular students will be similar to enlistment of Physical Education (PE) courses. <p>&nbsp;&nbsp;But this time, all courses will be enlisted by the student as per their approved Study Plan.</p></p>
                        <div class="center-button">
                            <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(5)">Proceed to Curriculum Checklist</button>
                        </div>
                    </div>
                </div>
            </div>

                

                </section>



        </div>
    
        
    </div>
     
        <script>
       
        var acc = document.getElementsByClassName("accordion");
        var currentIndex = 0;

        for (var i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                if (!this.classList.contains("disabled")) {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                }
            });
        }

        // Disable all accordions except the first one
        for (var i = 1; i < acc.length; i++) {
            acc[i].classList.add("disabled");
        }

        function proceedToNextStep(step) {
        // Close the panel for the current step
            acc[step - 1].classList.remove("active");
            acc[step - 1].nextElementSibling.style.maxHeight = null;

            // Open the accordion for the next step
            if (step < acc.length) {
                currentIndex = step - 1; // Update the currentIndex
                acc[step].classList.remove("disabled"); // Enable the next accordion
                acc[step].click();
                showCheckmark(step);
                alert("Proceeding to Step " + (step + 1));
            } else {
                showCheckmark(step);
                alert("You have reached the last step. You can now click the 'View Assessment' button.");
                // Enable the handleAssessmentClick function after the last step
                handleAssessmentClickEnabled = true;
            }
        }

        var handleAssessmentClickEnabled = false;

        function handleAssessmentClick(event) {
            // Handle the click event here
            if (handleAssessmentClickEnabled) {
                window.location.href = '{{ route("irreg_assessment") }}';
                event.preventDefault(); // Prevent the default behavior of the anchor tag
            } else {
                alert("Complete all the steps before proceeding to the assessment.");
            }
        }
       
        function showCheckmark(step) {
            // Assuming the step-checkmark element is a child of the accordion button
            var checkmark = acc[step - 1].querySelector(".step-checkmark");
            if (checkmark) {
                checkmark.style.display = "inline"; // Show the checkmark
            }
        }
        </script>
<!-- include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<!-- include AdminLTE JS -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>

  <!-- Include jQuery first -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection