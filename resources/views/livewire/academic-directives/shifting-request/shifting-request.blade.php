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
                <img src="{{url('backend/dist/img/user2.jpg')}}" alt="">{{ substr(Auth::guard('student')->user()->student_id, 0, 4) . '-' . substr(Auth::guard('student')->user()->student_id, 4) }}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; right: 100px; transform: translate3d(50px, 40px, 0px);">
                <a class="dropdown-item" href="javascript:;">Profile</a>
                <a class="dropdown-item" href="javascript:;">
                <span>Settings</span>
                </a>
                <a class="dropdown-item" href="javascript:;">Help</a>
                <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i>Log Out</a>
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
            
            <li class="nav-item menu-open">
                <a class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Academic Directives
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{
                        Auth::guard('student')->user()->student_type == 'Regular' ?
                            '/regular_student/regular_schedule' :
                            '/irregular_student/irreg_schedule'
                    }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Enrollment</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/academic_directive/add_drop_request" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add/Drop Request</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/academic_directive/shifting_request" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Shifting Request</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/academic_directive/loa_request" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>LOA Request</p>
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
        <span style="position: absolute; top: 0.90ch; left: 1ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">Shifting Request</span>   
            <br><br>
            <div class="status-card" style="width:21ch; height:4ch; position: absolute; top: 3.5ch; right: 44ch; border: .25px solid #000; 
            display: flex; justify-content: center; align-items: center;">
                <p style="margin-left: .2rem; margin-top: 1rem;">Student Type: Irregular</p>
            </div>
            <div class="status-card" style="width:20ch; height:4ch; position: absolute; top: 3.5ch; right: 22ch; border: .25px solid #000; 
            display: flex; justify-content: center; align-items: center;">
                <p style="margin-left: .2rem; margin-top: 1rem;">Status: Pending <i class="fas fa-circle" style="color: yellow"></i></p>
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
                <div class="card custom-bg-color" style="position: absolute; top: 10px; left: 13%; width: 85%; height: 60%">
                    <i class="fa fa-info-circle" style="font-size: 18px; color: black; margin-left: 3.5rem; top: .8rem; position: relative;"></i>
                    <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Follow steps one to five below. Failure to comply with a step prohibits you from proceeding forward with the request.</span>    
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
                    <p class="body-font">&nbsp;&nbsp;a. A student may seek a leave of absence by a written petition to the respective department chair for evaluation. This written permission, together with the Leave of Absence Form, must be duly endorsed by the Dean to the Vice President for Academic Affairs, for approval.</p>
                    <!-- Content for letter 'b' -->
                    <p class="body-font">&nbsp;&nbsp;b. A student who leaves the college without an approved leave of absence shall be denied re-admission.</p></p>
                    <!-- Content for letter 'c' -->
                    <p class="body-font">&nbsp;&nbsp;c. A student is entitled to a leave of absence for a period not to exceed a total of one year.</p></p>
                    <!-- Content for letter 'd' -->
                    <p class="body-font">&nbsp;&nbsp;d. Duly approved Leave of Absence (LOA) shall not be counted as part of the residency of a student.</p></p>
                    <!-- Content for letter 'e' -->
                    <p class="body-font">&nbsp;&nbsp;e. Students who have taken a Leave of Absence (LOA) not exceeding two (2) semesters as endorsed by the Dean and duly approved by the Executive Vice President (EVP) may qualify for academic honors.</p></p>
                    
                    <p style="font-family: Inter, sans-serif; font-size: 26px; color:black;">Reminders and Regulations</p> 
                    <!-- Content for letter 'f' -->
                    <p class="body-font">&nbsp;&nbsp;a. Students of respective degree programs must strictly observe the prescribed curriculum. </p>
                    <!-- Content for letter 'b' -->
                    <p class="body-font">&nbsp;&nbsp;b. Each Department shall issue a Curriculum checklist/ Course Prospectus to the student, which shall be used until he/she graduates. </p>
                    <!-- Content for letter 'c' -->
                    <p class="body-font">&nbsp;&nbsp;c. Students must enroll their subjects as scheduled on a particular semester/term with consideration of the required pre-requisites prior to enrolling. </p>
                    <!-- Content for letter 'd' -->
                    <p class="body-font">&nbsp;&nbsp;d. To avoid re-enrolling a completed subject, the respective Deans must ensure that the student has properly accomplished the “Curriculum checklist/ Course Prospectus”. </p>
                    <!-- Content for letter 'e' -->
                    <p class="body-font">&nbsp;&nbsp;e. As an irregular student, it is required of you to submit your Study Plan containing a personalized curriculum of courses to be taken based of the Curriculum checklist/ Course Prospectus provided to you by your department. </p>
                    <!-- Content for letter 'f' -->
                    <p class="body-font">&nbsp;&nbsp;f. Enlistment procedures of irregular students will be similar to enlistment of Physical Education (PE) courses. But this time, all courses will be enlisted by the student as per their approved Study Plan.</p>
                    <!-- Content for letter 'g' -->
                    <p class="body-font">&nbsp;&nbsp;g. Students shall make sure that overloading and underloading does not happen in their study plan unless approved by dedicated chairperson or advising body.</p>
                    <!-- Content for letter 'h' -->
                    <p class="body-font">&nbsp;&nbsp;h. Subjects that have Pre-requisites cannot be taken unless their required subjects are accomplished.</p>
                    <!-- Content for letter 'i' -->
                    <p class="body-font">&nbsp;&nbsp;i. Co-requisites are subjects that should be taken at the same time except in cases that they are to be taken separately as retakes.</p>
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
                        <object data="http://localhost:8000/generate-pdf" type="application/pdf" width="80%" height="400px" style="position: relative; top: 20px; left: 10%;">
                        </object>
                    </div>
                </div>
            </div>
          
                <!-- Step 3 -->
                <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">3. Select a Program and Create your Study Plan
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                
                    <!-- Detailed information for Step 3 -->
                    <div class="panel">
                    <p style="font-family: Inter, sans-serif; font-size: 26px; color:black;">Guidelines for Selecting a Program to Shift</p>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectProgramModal">Select a Program</button> 
                    </div>
                      <!-- The Modal -->
                    <div class="modal fade" id="selectProgramModal" tabindex="-1" role="dialog" aria-labelledby="selectProgramModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="selectProgramModalLabel">Select a Program</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @livewire('select-program')
                        </div>
                        
                        </div>
                    </div>
                    </div>
                    
                    
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
                        <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" data-toggle="modal" data-target="#exampleModal">Create Study Plan</button>
                      </div>  
                    
                      <div class="center-button">
                          <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(3)">Proceed to Submission of Documents</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Create Study Plan</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  @livewire('course-data')
                                  
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                          </div>
                      </div>
                      </div>
                  </div>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="card custom-table-container">
                <div class="card-body">
                <button class="accordion" style="font-family: Inter, sans-serif; font-size: 26px;">4. Download and Fill-up Documents
                <i class="fas fa-check-circle step-checkmark" style="font-size: 27px;"></i>
                </button>
                    <!-- Detailed information for Step 4-->
                    <div class="panel">
                        <br>
                        <button type="button"  onclick="" class="btn btn-primary float-right" style="color: #2D349A; position: relative; bottom: 0px; left: 5px; width: 120px; height: 4ch;">
        <i class="fas fa-download" style="color: white; margin-right: .2rem; top: -0.2rem; position: relative; font-size: 15px;"></i>
        <span style="color: white;  margin-right: 0.2rem; top: -0.2rem; position: relative; font-size: 15px;">Download</span></button>
                    <p style="font-family: Inter, sans-serif; font-size: 24px; color:black;">Shifting Form</p>
                        <object data="http://localhost:8000/generate-pdf" type="application/pdf" width="80%" height="400px" style="position: relative; top: 20px; left: 10%;">
                        </object>
                        
                        <br>
                        <button type="button"  onclick="" class="btn btn-primary float-right" style="color: #2D349A; position: relative; bottom: 0px; left: 5px; width: 120px; height: 4ch;">
        <i class="fas fa-download" style="color: white; margin-right: .2rem; top: -0.2rem; position: relative; font-size: 15px;"></i>
        <span style="color: white;  margin-right: 0.2rem; top: -0.2rem; position: relative; font-size: 15px;">Download</span></button>
                    <p style="font-family: Inter, sans-serif; font-size: 24px; color:black;">Letter of Request for LOA</p>
                        <object data="http://localhost:8000/generate-pdf" type="application/pdf" width="80%" height="400px" style="position: relative; top: 20px; left: 10%;">
                        </object>

                        <br>
                        <button type="button"  onclick="" class="btn btn-primary float-right" style="color: #2D349A; position: relative; bottom: 0px; left: 5px; width: 120px; height: 4ch;">
        <i class="fas fa-download" style="color: white; margin-right: .2rem; top: -0.2rem; position: relative; font-size: 15px;"></i>
        <span style="color: white;  margin-right: 0.2rem; top: -0.2rem; position: relative; font-size: 15px;">Download</span></button>
                    <p style="font-family: Inter, sans-serif; font-size: 24px; color:black;">Note of Undertaking</p>
                        <object data="http://localhost:8000/generate-pdf" type="application/pdf" width="80%" height="400px" style="position: relative; top: 20px; left: 10%;">
                        </object>
                        
                        <br>
                        
                        <div class="center-button">
                          <button type="button" class="btn" style="background-color: #C9AE5D; color: #535353;" onclick="proceedToNextStep(4)">Proceed to Document Submission and Approval</button>
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
                        <form action="{{ route('shifting_request.post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputFile">Follow the format: LastName_FirstName_ShiftForm</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" id="exampleInputFile1" onchange="updateLabel('exampleInputFile1')" accept="application/pdf" name="shifting_form">
                                <label class="custom-file-label" for="exampleInputFile1">Upload Shifting Form</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Follow the format: LastName_FirstName_LetterOfRequest</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" id="exampleInputFile2" onchange="updateLabel('exampleInputFile2')" accept="application/pdf" name="letter_of_intent">
                                <label class="custom-file-label" for="exampleInputFile2">Upload Letter of Intent</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Follow the format: LastName_FirstName_NoteOfUndertaking</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" id="exampleInputFile3" onchange="updateLabel('exampleInputFile3')" accept="application/pdf" name="note_of_undertaking">
                                <label class="custom-file-label" for="exampleInputFile3">Upload Note of Undertaking</label>
                            </div>
                            </div>
                        </div>
                        <div class="center-button">
                            <button type="submit" class="btn" style="background-color: #C9AE5D; color: #535353;">Submit Uploaded Documents</button>
                        </div>
                        </form>
                        <br>
                        <p style="font-family: Inter, sans-serif; font-size: 26px; color:black; font-weight:bold;">Document Status: 
                            @if( $requestStatus == "Pending")
                            <strong style="color: #AB830F;">For Checking</strong>
                            @elseif( $requestStatus == "Rejected")
                            <strong style="color: #e90c0c;">For Revision</strong>
                            @elseif( $requestStatus == "Approved")
                            <strong style="color: #14ae5c;">For Submission Onsite</strong>
                            @endif
                        </p>
                        <!-- Content for letter 'a' -->
                        <p class="body-font">&nbsp;&nbsp;a. Submitted documents will be checked by corresponding department chairperson.</p>
                        <!-- Content for letter 'b' -->
                        <p class="body-font">&nbsp;&nbsp;b. Refresh this page from time-to-time to know the status of your request. </p>
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

        // Activate all accordions when request is already submitted
        if ({{$requestExists ? 'true' : 'false'}}) {
            for (var i = 0; i< acc.length; i++) {
                acc[i].classList.remove("active");
                acc[i].classList.remove("disabled");
                showCheckmark(i+1);
            }
            acc[acc.length - 1].click();
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
        window.location.href = " {{ route('irreg_assessment') }}";
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

    document.addEventListener('livewire:load', function () {
    window.livewire.on('programSaved', () => {
        $('#selectProgramModal').modal('hide');
        });
    });
</script>