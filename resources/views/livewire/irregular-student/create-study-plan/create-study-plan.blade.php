<div>
    <!-- Header Navigation Bar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-calendar"></i>
            <span class="badge badge-danger navbar-badge">5</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              
          <!-- Calendar -->
            <div class ="media">
              <i class="far fa-calendar img-size-40 mr-3"></i>
              <div class="media-body">
                  <h3 class="dropdown-item-title">
                      Upcoming Events Calendar
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Check out the upcoming events on the calendar.</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Just Now</p>
              </div>
          </div>
          </a>
          <!-- Calendar End -->
      </div>
          
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      <li class="nav-item dropdown open" style="padding-left: 15px; top: 5px;">
          <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <img src="{{url('backend/dist/img/user2.jpg')}}" alt="">2021-10424
              </a>
              <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; right: 100px; transform: translate3d(50px, 40px, 0px);">
              <a class="dropdown-item" href="javascript:;">Profile</a>
              <a class="dropdown-item" href="javascript:;">
              <span>Settings</span>
              </a>
              <a class="dropdown-item" href="javascript:;">Help</a>
              <a class="dropdown-item" href="#"><i class="fa fa-sign-out pull-right"></i>Log Out</a>
          </div>
      </li>
      </ul>
    </nav>
    <!-- Navigation Bar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{url('backend/dist/img/plmlogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PLM Student Portal</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
              <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
              <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Information
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Schedule</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Grades</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Violation</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item menu-open">
              <a class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Services
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Enrollment</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SFE</p>
                  </a>
                </li>
              </ul>
            </li>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


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
            <div class="status-card" style="width:21ch; height:4ch; position: absolute; top: 3.5ch; right: 44ch; border: .25px solid #000; 
            display: flex; justify-content: center; align-items: center;">
                <p style="margin-left: .2rem; margin-top: 1rem;">Student Type: Irregular</p>
            </div>
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
                    <span style="position: absolute; top: 45%; left: 13.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Create Study Plan</span>
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
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">2. Download Curriculum Checklist
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                    
                    <!-- Detailed information for Step 2 -->
                    <div class="panel">
                        <br>
                        <button type="button"  onclick="proceedToNextStep(2)" class="btn btn-primary float-right" style="color: #2D349A; position: relative; bottom: 0px; left: 5px; width: 120px; height: 4ch;">
        <i class="fas fa-download" style="color: white; margin-right: .2rem; top: -0.2rem; position: relative; font-size: 15px;"></i>
        <span style="color: white;  margin-right: 0.2rem; top: -0.2rem; position: relative; font-size: 15px;">Download</span></button>
                    <p style="font-family: Inter, sans-serif; font-size: 24px; color:black;">Curriculum Checklist</p>
                        <object data="http://localhost/enrollmentmod/generate-pdf" type="application/pdf" width="80%" height="400px" style="position: relative; top: 20px; left: 10%;">
                        </object>
                        
                           
                        
                    </div>
                </div>
            </div>
                <!-- Step 3 -->
                <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">3. Create your Study Plan
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                    <!-- Detailed information for Step 3 -->
                    <div class="panel">
                        <p style="font-family: Inter, sans-serif; font-size: 26px; color:black;">Guidelines for Study Plans</p>
                        <!-- Content for letter 'a' -->
                        <p class="body-font">&nbsp;&nbsp;a. Arrange your study plan considering the availability of courses. Major-specific subjects are exclusively offered in particular semesters.</p>
                    <!-- Content for letter 'b' -->
                    <p class="body-font">&nbsp;&nbsp;b. Mandatory major subjects should be taken during the designated semester they are available.</p>
                    <!-- Content for letter 'c' -->
                    <p class="body-font">&nbsp;&nbsp;c. A subject cannot be taken if it is a prerequisite for a previously failed subject. Ensure successful completion of prerequisites before enrolling in advanced courses.</p>
                    <!-- Content for letter 'd' -->
                    <p class="body-font">&nbsp;&nbsp;d. Failed prerequisites must be retaken and successfully completed before proceeding to higher-level courses.</p>
                    <!-- Content for letter 'e' -->
                    <p class="body-font">&nbsp;&nbsp;e. The upcoming semester should be the first one accounted for in your study plan. Plan your courses according to the sequence recommended by the academic curriculum.</p>
                    <!-- Content for letter 'f' -->
                    <p class="body-font">&nbsp;&nbsp;f. Overloaded unit enrollments are permissible only for students approaching graduation, subject to approval.</p>
                    <p class="body-font">&nbsp;&nbsp;g. Underloaded units should also be verified by the college chairperson to ensure compliance with program requirements.</p>
                        <div class="center-button">
                            <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(3)">Proceed to Submission of Documents</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">4. Submit Curriculum Checklist and Study Plan
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                    <!-- Detailed information for Step 4-->
                    <div class="panel">
                            <div class="form-group">
                            <label for="exampleInputFile">Follow the format: LastName_FirstName_Checklist</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile1" onchange="updateLabel('exampleInputFile1')">
                                <label class="custom-file-label" for="exampleInputFile1">Upload Curriculum Checklist</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Follow the format: LastName_FirstName_StudyPlan</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile2" onchange="updateLabel('exampleInputFile2')">
                                <label class="custom-file-label" for="exampleInputFile2">Upload Study Plan</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            </div>
                        </div>
                        <div class="center-button">
                            <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(4)">Submit Uploaded Documents</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 5 -->
            <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">5. Await Approval
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                    <!-- Detailed information for Step 5-->
                    <div class="panel">
                        <p style="font-family: Inter, sans-serif; font-size: 26px; color:black; font-weight:bold;">Document Status: <strong style="color: #AB830F;">For Checking</strong></p>
                        <!-- Content for letter 'a' -->
                        <p class="body-font">&nbsp;&nbsp;a. Submitted documents will be checked by corresponding department chairperson.</p>
                        <!-- Content for letter 'b' -->
                        <p class="body-font">&nbsp;&nbsp;b. Refresh this page from time-to-time to know the status of your Study Plan. </p>
                        <div class="center-button">
                            <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(5)">Change status to for submission onsite</button>
                        </div>
                    </div>
                </div>
            </div>

                

            </section>
            <!-- Modal for Alert -->
            <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="alertModalLabel">Alert</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Complete all the steps before proceeding to the assessment.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            </div>

            <!-- Modal for Confirmation -->
            <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>All steps have been completed. Please ensure that the information you have submitted is accurate. Once submitted, you will be unable to revisit this page.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary" onclick="submitForm()">Yes</button>
                    </div>
                </div>
            </div>
            </div>
        </div> 
</div>
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
            // Open the confirmation modal
            $('#confirmationModal').modal('show');
            event.preventDefault(); // Prevent the default behavior of the anchor tag
        } else {
            // Open the alert modal
            $('#alertModal').modal('show');
        }
        }

        function submitForm() {
        // Add logic to submit the form or redirect to the assessment page
        window.location.href = '{{ route("irreg_assessment") }}';
        }

        function showCheckmark(step) {
            // Assuming the step-checkmark element is a child of the accordion button
            var checkmark = acc[step - 1].querySelector(".step-checkmark");
            if (checkmark) {
                checkmark.style.display = "inline"; // Show the checkmark
            }
        }

        function updateLabel(inputId) {
        var fileName = $('#' + inputId).val().split('\\').pop();
        $('label[for=' + inputId + ']').text(fileName);
    }
</script>