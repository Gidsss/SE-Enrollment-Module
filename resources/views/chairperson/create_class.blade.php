@extends('layouts.classcreateapp')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LQJzBrrqfmyPXYjXvKXt8CvHv5bFIYt9qBqYRg0cFxJ+98FZBvFZ52EGEWk3HPlbeXmFfZl6Ko25Xme+ERyI2g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
<style>
    html {
    background-color: #F6F6F6;
   }
   .add-div-class {
   position: relative;
   }
   .hrs-add-div-class {
   position: relative;
   }
   .section { 
   border:1px solid #ddd; 
   }
   .custom-line {
    border-left: 150ch solid #CDCDCD; /* Adjust the color as needed */
    height: 2px; /* Adjust the height of the line */
    margin-left: 115px; /* Adjust the position (indent) as needed */
  }
  .custom-checkbox {
            position: relative;
            left: 310px;
            bottom: -25px;
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

</style>

<div style="width:1536px; height:auto; background-color: #30349c; position: relative;">
            <img src="{{ asset('public/backend/dist/img/plmlogo.png') }}" style="width:65px; height:65px; position:absolute; top:5%; left:1%">
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
   <div class="nav-item page-item">
       <a href="" class="nav-link">Class Creation</a>
   </div>
   <div class="nav-item">
       <a href="http://localhost/enrollmentmod/chairperson/block_classes" class="nav-link">Block Management</a>
   </div>
   <div class="nav-item">
       <a href="" class="nav-link">Student Enlistment</a>
   </div>
   <div class="nav-item">
       <a href="" class="nav-link">Transaction</a>
   </div>
</div>
<div style="width: 100%; height: 10%; text-align: right; padding-right: 0px; color: black; font-size: 20px; font-family: Inter; line-height: 33px; font-weight: 200; word-wrap: break-word; position: relative;">
            <div style="display: flex; align-items: right; padding-left: 1190px; background-color: #F6F6F6;">
                <span>Home / Enrollment / Class Creation</span>
            </div>
            <div style="flex-grow: 1; height: 1px; border: .2px rgba(0, 0, 0, 0.20) solid;"></div>
        </div>



<!--CLASS INFORMATION DIVISION-->

<div id="expandableDiv" style="position:relative;width:100% ;height:350px; border-bottom: 2px solid #CDCDCD; background-color: #f6f6f6;">
 <div style="max-width:100%; height:50px; position: relative;">
   <br><br><br>

   <span style="color: black; position: absolute; top: 26%; left: 5%; font-family: Inter, sans-serif; font-size: 23px;font-weight: bold">Class Information</span>
   <div class="card-body" style="width: 30%;">
      <span style="color: black; position: absolute; top: 70px; left: 5%; font-family: Inter, sans-serif; font-size: 15px">Class Number<span style="color: red;">*</span></span>
      <div class="input-group mb-3" style="left: 55px">
         <input type="text" class="form-control crs_num" style="width: 300px;" required placeholder="Enter class number">
         <div class="input-group-prepend">
            <button type="button" class="btn btn-default" data-toggle="dropdown">
            <i class="fas fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
               <a class="dropdown-item crsnum-dropdown-item" href="#">124532</a>
               <a class="dropdown-item crsnum-dropdown-item" href="#">245252</a>
               <a class="dropdown-item crsnum-dropdown-item" href="#">321233</a>
            </div>
         </div>
      </div>
      <span style="color: black; position: absolute; top:70px; left: 35.1%; font-family: Inter, sans-serif; font-size: 15px">Section<span style="color: red;">*</span></span>
      <div class="input-group mb-3 section-input" style="left: 64.5ch; bottom:54px; width: 200px;">
         <input type="text" class="form-control section" required placeholder="Enter section">
      </div>
      <span style="color: black; position: absolute; top:70px; left: 51%; font-family: Inter, sans-serif; font-size: 15px">NSTP Activity<i class="far fa-question-circle" style="color:grey"></i></span>
      <div class="input-group mb-3 section-input" style="left: 94.5ch; bottom:108px; width: 200px;">
         <input type="text" class="form-control NSTP" required placeholder="Enter NSTP">
      </div>
      <span style="color: black; position: absolute; top:70px; left: 67%; font-family: Inter, sans-serif; font-size: 15px">Credits<span style="color: red;">*</span></span>
      <div class="input-group mb-3 section-input" style="left: 125.5ch; bottom:162px; width: 150px;">
         <input type="text" class="form-control credits" required placeholder="Enter credits">
      </div>
      <span style="color: black; position: absolute; top:70px; left: 80%; font-family: Inter, sans-serif; font-size: 15px">Actual Credits<span style="color: red;">*<i class="far fa-question-circle" style="color:grey"></i></span></span>
      <div class="input-group mb-3 section-input" style="left: 150ch; bottom:216px; width: 160px;">
         <input type="text" class="form-control actual-credits" required placeholder="Enter actual credits">
      </div>
      <span style="color: black; position: absolute; top: 160px; left: 5%; font-family: Inter, sans-serif; font-size: 15px">Faculty</span>
      <div>
         <div id="faculty-container">
            <section id="mainsection">
               <div class="add-div-class" style="position: relative; bottom: 180px; left: 56px; display: flex; ">
                  <input type="text" class="form-control faculty-input" style="width: 420px;" required placeholder="Select Faculty">
                  <div class="input-group-prepend">
                     <button type="button" class="btn btn-default" data-toggle="dropdown">
                     <i class="fas fa-caret-down"></i>
                     </button>
                     <div class="dropdown-menu" id="FacultyDropdownItems"></div>
                  </div>
               </div>
            </section>
         </div>
         <button type="button" class="btn btn-block btn-light" id="newsectionbtn" style=" position: relative;left:56px;width:420px;bottom:170px" ><span style="color:black">+ Add Faculty</span></button>
      </div>
      <span style="color: black; position: absolute; top:160px; left: 35.1%; font-family: Inter, sans-serif; font-size: 15px">Alloted Slots<span style="color: red;">*</span></span>
      <div class="input-group mb-3 section-input" style="position: absolute;left: 67ch; top: 182px; width: 250px;">
         <input type="text" class="form-control alloted-slots" required placeholder="Enter alloted slots">
      </div>
      <span style="color: black; position: absolute; top:160px; left: 56%; font-family: Inter, sans-serif; font-size: 15px">Parent Class Code<span style="color: red;">*</span></span>
      <div class="input-group mb-3 section-input" style="position: absolute;left: 107ch; top: 182px; width: 250px;">
         <input type="text" class="form-control class-code" required placeholder="Enter parent class code">
      </div>
      <span style="color: black; position: absolute; top:160px; left: 76%; font-family: Inter, sans-serif; font-size: 15px;">Link Type<span style="color: red;">*<i class="far fa-question-circle" style="color:grey"></i></span></span>
      <div class="input-group mb-3" style="position: absolute;left: 145ch; top: 182px; width: 300px;">
         <input type="text" class="form-control type_link" placeholder="Select Link Type" required>
         <div class="input-group-append">
            <button type="button" class="btn btn-default" data-toggle="dropdown">
            <i class="fas fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
               <div class="dropdown-item linktype-dropdown-item"><a href="#" style="color: black;">Gmeet</a></div>
               <div class="dropdown-item linktype-dropdown-item"><a href="#" style="color: black;">MS Teams</a></div>
               <div class="dropdown-item linktype-dropdown-item"><a href="#" style="color: black;">Messenger</a></div>
            </div>
         </div>
      </div>
      <span style="color: black; position: absolute; top:246px; left: 35.1%; font-family: Inter, sans-serif; font-size: 15px;">Instruction Language<span style="color: red;">*</span></span>
      <div class="input-group mb-3" style="position: absolute;left: 67ch; top: 267px; width: 300px;">
         <input type="text" class="form-control language" placeholder="Select instruction language" required>
         <div class="input-group-append">
            <button type="button" class="btn btn-default" data-toggle="dropdown">
            <i class="fas fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
               <div class="dropdown-item language-dropdown-item"><a href="#" style="color: black;">English</a></div>
               <div class="dropdown-item language-dropdown-item"><a href="#" style="color: black;">Tagalog</a></div>
               <div class="dropdown-item language-dropdown-item"><a href="#" style="color: black;">Korean</a></div>
            </div>
         </div>
      </div>
      <span style="color: black; position: absolute; top:246px; left: 65.1%; font-family: Inter, sans-serif; font-size: 15px;">Minimum Year Level<span style="color: red;">*</span></span>
      <div class="input-group mb-3" style="position: absolute;left: 124.4ch; top: 267px; width: 300px;">
         <input type="text" class="form-control yrlvl" placeholder="Select year level" required>
         <div class="input-group-append">
            <button type="button" class="btn btn-default" data-toggle="dropdown">
            <i class="fas fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
               <div class="dropdown-item yrlvl-dropdown-item"><a href="#" style="color: black;">1</a></div>
               <div class="dropdown-item yrlvl-dropdown-item"><a href="#" style="color: black;">2</a></div>
               <div class="dropdown-item yrlvl-dropdown-item"><a href="#" style="color: black;">3</a></div>
            </div>
         </div>
   </div>
</div>

<!--CLASS HOURS DIVISION-->
<div id="expandableDiv2" style="position:relative;width:100% ;height:165px; border-bottom: 2px solid #CDCDCD" >
   <div  style="position:absolute;width:100% ;height:100%">
      <div style="max-width:100%; height:auto; position: absolute;" >
         <br><br><br>
         <span style="color: black; position:absolute; bottom: 165px; left: 76px; font-family: Inter, sans-serif; font-size: 23px; font-weight: bold;width:150px">Class Hours</span>
         <div class="form-check" >
            <input type="checkbox" class="form-check-input" id="exampleCheck1" style="bottom: 135px; left:250px">
            <label class="form-check-label" for="exampleCheck1" style="position: absolute; bottom: 133px; left: 250px; font-weight: bold; font-size: 12px;width:150px">No Definite Time and Day</label>
         </div>
         <span style="color: grey; position: absolute; bottom:135px; left: 250px; font-family: Inter, sans-serif; font-size: 12px;width:150ch;">Tick this if class has NO DEFINITE TIME AND DAY (e.g. Thesis/Practicum/Field classes or College of Music Classes). The University Registrar is appealing to your department to accomplish this part PROFESSIONALLY by truthfully stating the room assignments for planning purposes.</span>
         <span style="color: black; position:absolute; bottom:80px; left: 250px; font-family: Inter, sans-serif; font-size: 18px; font-weight: bold;width:150px">Day</span>
         <span style="color: black; position:absolute; bottom:80px; left: 450px; font-family: Inter, sans-serif; font-size: 18px; font-weight: bold;width:150px">Time Start</span>
         <span style="color: black; position:absolute; bottom:80px; left: 670px; font-family: Inter, sans-serif; font-size: 18px; font-weight: bold;width:150px">Time Finish</span>
         <span style="color: black; position:absolute; bottom:80px; left: 920px; font-family: Inter, sans-serif; font-size: 18px; font-weight: bold;width:150px">Room</span>
         <span style="color: black; position:absolute; bottom:80px; left: 1115px; font-family: Inter, sans-serif; font-size: 18px; font-weight: bold;width:150px">Meeting Type</span>
         <div class="custom-line" style="position:absolute; border-left: 159ch solid #CDCDCD; height: 2px; bottom: 75px;"></div>
         <!--START CLONE DIVISION-->
         <div id="classhr-container" >
            <section id="classhrsection" >
               <div class="card-body hrs-add-div-class" >
                  <div class="card" style="position:absolute   ;background-color:#CDCDCD ; color: white; width:150ch;left:130px; height:50px;top:-25px">
                     <span id="selectday-id" style="color: black; font-family: Inter, sans-serif; font-size: 12px; font-weight: bold; position: absolute; left: 50px; bottom: 14px;"></span>
                     <div class="form-group">
                        <div class="input-group mb-3" style="position:absolute;width:200px; left:50px; top:6px">
                           <input type="text" class="form-control selectday" placeholder="Select Day" required>
                           <div class="input-group-append">
                              <button type="button" class="btn btn-default" data-toggle="dropdown">
                              <i class="fas fa-caret-down"></i>
                              </button>
                              <div class="dropdown-menu">
                                 <div class="dropdown-item selectday-dropdown-item"><a href="#" style="color: black;">Sunday</a></div>
                                 <div class="dropdown-item selectday-dropdown-item"><a href="#" style="color: black;">Monday</a></div>
                                 <div class="dropdown-item selectday-dropdown-item"><a href="#" style="color: black;">Tuesday</a></div>
                              </div>
                           </div>
                        </div>
                        <!-- time Start Picker -->
                        <div class="bootstrap-timepicker">
                           <div class="form-group">
                              <div class="input-group date" id="timepicker" data-target-input="nearest" style="width: 200px; top:6px; left:275px">
                                 <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" placeholder="Select Time Start">
                                 <div class="input-group-append timestart" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                 </div>
                              </div>
                              <!-- /.input group -->
                           </div>
                           <!-- /.form group -->
                        </div>
                     </div>
                     <!-- time End Picker -->
                     <div class="bootstrap-timepicker">
                        <div class="form-group">
                           <div class="input-group date" id="endtimepicker" data-target-input="nearest" style="width: 200px; bottom:64px; left:500px">
                              <input type="text" class="form-control datetimepicker-input" data-target="#endtimepicker" placeholder="Select Time End ">
                              <div class="input-group-append" data-target="#endtimepicker" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="far fa-clock"></i></div>
                              </div>
                           </div>
                           <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                     </div>
                     <!-- Enter Room -->
                     <div class="form-group">
                        <div class="input-group date" id="room-name" data-target-input="nearest" style="width: 200px; bottom:118px; left:725px">
                           <input type="text" class="form-control room-input" placeholder="Enter Room ">
                           <div class="input-group-append" >
                           </div>
                        </div>
                     </div>
                     <!-- Meeting Type -->
                     <div class="input-group mb-3" style="position: absolute;left: 950px;  top:7px; width: 200px;">
                        <input type="text" class="form-control meettype" placeholder="Select Meeting Type" required>
                        <div class="input-group-append">
                           <button type="button" class="btn btn-default" data-toggle="dropdown">
                           <i class="fas fa-caret-down"></i>
                           </button>
                           <div class="dropdown-menu">
                              <div class="dropdown-item meettype-dropdown-item"><a href="#" style="color: black;">Synchronous</a></div>
                              <div class="dropdown-item meettype-dropdown-item"><a href="#" style="color: black;">Asynchronous</a></div>
                              <div class="dropdown-item meettype-dropdown-item"><a href="#" style="color: black;">F2F</a></div>
                           </div>
                        </div>
                     </div>
                     <!-- end of Meeting Type -->
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- end time End Picker -->
               <!-- /.card-body -->
         </div>
         <!-- end of start picker -->
      </div>
   </div>
   </section>
   <button type="button" class="btn btn-block btn-light" id="classhrbtn" style="position: relative; width: 150ch; left: 130px; height: 50px; top: 100px;">
      <span style="color: black">+ Add Class Hour</span>
   </button>
</div>
<!-- end enter room -->

<!-- end clone-->


<!--CLASS RESTRICTION DIVISION-->
<div style="position:relative;width:100% ;height:165px;" >
   <div  style="position:absolute;width:100% ;height:100%">
      <div style="max-width:100%; height:auto; position: absolute;" >
         <span style="color: black; position:absolute; bottom: 36.3px; left: 76px; font-family: Inter, sans-serif; font-size: 23px; font-weight: bold;width:230px">Class Restrictions</span>
         <div class="custom-checkbox">
            <input type="checkbox" id="RestrictCheckbox">
            <label for="RestrictCheckbox" style="font-weight: bold; font-size: 12px;position:absolute;top:2px;left:18px">No Restrictions</label>
        </div>
         <span style="color: grey; position: relative; top:18px; left: 327px; font-family: Inter, sans-serif; font-size: 12px;width:150ch;">Tick to conceal restrictions </span>
         <span style="color: black; position:absolute; top:105px; left: 370px; font-family: Inter, sans-serif; font-size: 18px; font-weight: bold;width:150px">Scope</span>
         <span style="color: black; position:absolute; top:105px; left: 905px; font-family: Inter, sans-serif; font-size: 18px; font-weight: bold;width:150px">Restriction</span>
         <div class="custom-line" style="position:absolute; border-left: 159ch solid #CDCDCD; height: 3px; top: 20ch;"></div>
         <!--START CLONE DIVISION-->
         

         <div id="restrict-container" >
            <section id="restrictsection" >
               <div class="card-body hrs-add-div-class" >
                  <div class="card" style="position:absolute   ;background-color:#CDCDCD ; color: white; width:150ch;left:130px; height:50px;top:130px">
                    
                     <div class="form-group">
                        <div class="input-group mb-3" style="position:absolute;width:400px; left:95px; top:6px">
                           <input type="text" class="form-control scope" placeholder="Select scope" required>
                           <div class="input-group-append">
                              <button type="button" class="btn btn-default" data-toggle="dropdown">
                              <i class="fas fa-caret-down"></i>
                              </button>
                              <div class="dropdown-menu">
                                 <div class="dropdown-item scope-dropdown-item"><a href="#" style="color: black;">Year Level</a></div>
                                 <div class="dropdown-item scope-dropdown-item"><a href="#" style="color: black;">Major or Program </a></div>
                                 <div class="dropdown-item scope-dropdown-item"><a href="#" style="color: black;">Prerequisite </a></div>
                              </div>
                           </div>
                        </div>
                        <!-- time Start Picker -->
                       
                     <!-- Enter Room -->
                     <div class="form-group">
                        <div class="input-group date" id="restriction-name" data-target-input="nearest" style="width: 400px; top:6px; left:625px">
                           <input type="text" class="form-control restriction-input" placeholder="Enter Restriction">
                           <div class="input-group-append" >
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.card-body -->
               </div>      
         </div>
      </div>
   </div>
   </section>
</div>
   <button type="button" class="btn btn-block btn-light" id="restrictbtn" style="position: relative; width: 150ch; left: 130px; height: 50px; top: 232px;">
      <span style="color: black">+ Add Restriction</span>
   </button>
 
</div>
</div>
</div>

<script>
   $(document).ready(function () {
       $('.crsnum-dropdown-item').on('click', function () {
           var selectedValue = $(this).text();
           $('.crs_num').val(selectedValue);
       });
   }); 
   
   
   $(document).ready(function () {
       $('.linktype-dropdown-item').on('click', function () {
           var selectedValue = $(this).text();
           $('.type_link').val(selectedValue);
       });
   });     
   
   $(document).ready(function () {
       $('.language-dropdown-item').on('click', function () {
           var selectedValue = $(this).text();
           $('.language').val(selectedValue);
       });
   });     
   
   $(document).ready(function () {
       $('.yrlvl-dropdown-item').on('click', function () {
           var selectedValue = $(this).text();
           $('.yrlvl').val(selectedValue);
       });
   });     

   $(document).ready(function () {
       $('.meettype-dropdown-item').on('click', function () {
           var selectedValue = $(this).text();
           $('.meettype').val(selectedValue);
       });
   });     

   $(document).ready(function () {
       $('.selectday-dropdown-item').on('click', function () {
           var selectedValue = $(this).text();
           $('.selectday').val(selectedValue);
       });
   });     

   $(document).ready(function () {
       $('.restriction-dropdown-item').on('click', function () {
           var selectedValue = $(this).text();
           $('.restriction').val(selectedValue);
       });
   });     

   $(document).ready(function () {
            $('#timepicker').datetimepicker({
                format: 'LT'
            });
        });

   $(document).ready(function () {
            $('#endtimepicker').datetimepicker({
                format: 'LT'
            });
        });

   let clickCount = 0;

   function expandDiv() {
    var div = document.getElementById('expandableDiv');
    
    if (clickCount < 7) {
        div.style.height = (parseInt(div.style.height) || 290) + 35 + 'px'; // Add 30px each time
        clickCount++;
        
        // Optional: You can log the current click count if needed
        console.log("Button clicked " + clickCount + " times.");
    } else {
        // Disable the button or perform other actions when the limit is reached
        document.getElementById("newsectionbtn").disabled = true;
    }
}
   
   var clickCounter = 0;
   var button = document.getElementById("newsectionbtn");

   
   
   $(document).ready(function () {
   // Example values for the faculty dropdown
   var facultyDropdownValues = ["Juan Dela Cruz", "John Doe", "Ada Wong"];
   
   // Function to populate the faculty dropdown menu
   function populateFacultyDropdown(items, containerId) {
       var dropdown = $('#' + containerId).find('.dropdown-menu');
   
       // Clear existing content in the dropdown
       dropdown.empty();
   
       // Create and append new option elements based on the items array
       items.forEach(function (item) {
           var option = $('<a class="dropdown-item faculty-item" href="#">' + item + '</a>');
   
           // Append the new option to the dropdown
           dropdown.append(option);
       });
   }
   
   // Function to initialize the dropdown for a specific section
   function initializeDropdown(containerId) {
   $('#' + containerId).find('.faculty-input').on('click', function () {
       // Toggle the dropdown on click
       $(this).siblings('.dropdown-menu').dropdown('toggle');
   });
   
   // Event listener for faculty dropdown items in the specified section
   $(document).on('click', '#' + containerId + ' .faculty-item', function () {
       var selectedValue = $(this).text();
       $('#' + containerId + ' .faculty-input').val(selectedValue);
   
       // Close the dropdown after selecting a value
       $('#' + containerId + ' .faculty-input').siblings('.dropdown-menu').dropdown('toggle');
   });
 
   }
   
   // Example usage: populate the faculty dropdown for the main section
   populateFacultyDropdown(facultyDropdownValues, 'mainsection');
   
   // Initialize the dropdown for the main section
   initializeDropdown('mainsection');
   
   var clickCounter = 0;
   var button = document.getElementById("newsectionbtn");
   //Clone faculty
   document.getElementById("newsectionbtn").onclick = function () {
      expandDiv();
       if (clickCounter < 7) {
           var container = document.getElementById("faculty-container");
           var section = document.getElementById("mainsection");
           var clonedSection = section.cloneNode(true);
           
   
           // Update IDs for the cloned section
           var newId = "mainsection" + clickCounter;
           clonedSection.id = newId;
           clonedSection.getElementsByClassName('faculty-input')[0].id = 'faculty-input' + clickCounter;
   
           container.appendChild(clonedSection);
           clickCounter++;
   
           // Optional: You can log the current click count if needed
           console.log("Button clicked " + clickCounter + " times.");
   
           // Example usage: populate the faculty dropdown for the new section
           populateFacultyDropdown(facultyDropdownValues, newId);
   
           // Initialize the dropdown for the new section
           initializeDropdown(newId);
       } else {
           // Disable the button or perform other actions when the limit is reached
           document.getElementById("newsectionbtn").disabled = true;
       }
   }
   });

   var clickCounter2 = 0;
   let clickCount2 = 0;
   function expandDiv2() {
    var div = document.getElementById('expandableDiv2');
    
    if (clickCount2 < 7) {
        div.style.height = (parseInt(div.style.height) || 130) + 55 + 'px'; // Add 30px each time
        clickCount2++;
        
        // Optional: You can log the current click count if needed
        console.log("Button clicked " + clickCount2 + " times.");
    } else {
        // Disable the button or perform other actions when the limit is reached
        document.getElementById("classhrbtn").disabled = true;
    }
}

   //Cloning for class hr
   document.getElementById("classhrbtn").onclick = function () {
      expandDiv2();
    if (clickCounter2 < 7) {
        var container = document.getElementById("classhr-container");
        var section = document.getElementById("classhrsection");
        var clonedSection = section.cloneNode(true);

        // Update IDs for the cloned section
        var classhrnewId = "classhrsection" + clickCounter2;
        clonedSection.id = classhrnewId;
        clonedSection.getElementsByClassName('selectday')[0].id = 'selectday' + clickCounter2;

        // Update IDs for input elements inside the cloned section and clear values
        var inputElements = clonedSection.querySelectorAll('.selectday, .datetimepicker-input, .room-input, .meettype');
        inputElements.forEach(function (input, index) {
            input.id = input.id + clickCounter2;

            // Clear the input values in the cloned section
            if (input.tagName === 'INPUT') {
                input.value = '';
            }
        });

        // Increment clickCounter
        clickCounter2++;

        // Append the cloned section to the container
        container.appendChild(clonedSection);

                // Manually reinitialize the dropdowns in the cloned section
                var dropdowns = clonedSection.querySelectorAll('.dropdown-toggle');
        dropdowns.forEach(function (dropdown) {
            new bootstrap.Dropdown(dropdown);
        });

            // Handle dropdown selection for the cloned section
    var clonedDropdown = clonedSection.querySelector('.selectday');
    var clonedDropdownItems = clonedSection.querySelectorAll('.selectday-dropdown-item');

    clonedDropdownItems.forEach(function (item, index) {
        item.addEventListener('click', function () {
            clonedDropdown.value = item.textContent.trim();
        });
    });

    // Handle dropdown selection for the cloned section (meettype)
var clonedMeettype = clonedSection.querySelector('.meettype');
var clonedMeettypeItems = clonedSection.querySelectorAll('.meettype-dropdown-item');

clonedMeettypeItems.forEach(function (item, index) {
    item.addEventListener('click', function () {
        clonedMeettype.value = item.textContent.trim();
    });
});


        // Calculate the height of the original section
        var originalSectionHeight = section.getBoundingClientRect().height;

        // Set the position for the cloned section
        clonedSection.style.position = 'absolute';

        // Set the top position for the FIRST clone
        if (clickCounter2 === 1) {
            clonedSection.style.top = '122px'; // Set the desired top position for the first clone
        } else {
            // Let subsequent clones stack below the previous one
            var previousClone = container.children[clickCounter2 - 1];
            var previousCloneBottom = parseInt(previousClone.style.top) + originalSectionHeight;
            clonedSection.style.top = previousCloneBottom + 10 + 'px';
        }

        // Display the value of clickCounter inside the cloned section
        var spanElement = document.createElement('span');
spanElement.textContent = 1+ clickCounter2 + '.'; // Add the value of clickCounter
spanElement.style.color = 'black';
spanElement.style.fontFamily = 'Inter, sans-serif';
spanElement.style.fontSize = '12px';
spanElement.style.fontWeight = 'bold';
spanElement.style.position = 'absolute';
spanElement.style.left = '150px';
spanElement.style.bottom = '38px';

// Set the id for the span element
spanElement.id = 'selectday-id'; // Replace 'yourDesiredId' with the desired id

// Append the span element to the cloned section
clonedSection.appendChild(spanElement);

        // Adjust the position of the button for every clone
        var button = document.getElementById("classhrbtn");
        var buttonTop = parseInt(button.style.top);
        button.style.top = buttonTop + originalSectionHeight + 10 + 'px';

    } else {
        // Disable the button or perform other actions when the limit is reached
        document.getElementById("classhrbtn").disabled = true;
    }
};

var clickCounter3 = 0;

// Class Restriction Clone
document.getElementById("restrictbtn").onclick = function () {
    if (clickCounter3 < 7) {
        var container = document.getElementById("restrict-container");
        var section = document.getElementById("restrictsection");
        var clonedSection = section.cloneNode(true);

        // Update IDs for the cloned section
        var restrictNewId = "restrictsection" + clickCounter3;
        clonedSection.id = restrictNewId;
        clonedSection.getElementsByClassName('scope')[0].id = 'scope' + clickCounter3;

        // Update IDs for input elements inside the cloned section and clear values
        var inputElements = clonedSection.querySelectorAll('.scope, .restriction-input');
        inputElements.forEach(function (input, index) {
            input.id = input.id + clickCounter3;

            // Clear the input values in the cloned section
            if (input.tagName === 'INPUT') {
                input.value = '';
            }
        });

        // Append the cloned section to the container
        container.appendChild(clonedSection);

        // Manually reinitialize the dropdowns in the cloned section
        var dropdowns = clonedSection.querySelectorAll('.dropdown-toggle');
        dropdowns.forEach(function (dropdown) {
            new bootstrap.Dropdown(dropdown);
        });

        // Calculate the height of the original section
        var originalSectionHeight = section.getBoundingClientRect().height;

        // Set the position for the cloned section
        clonedSection.style.position = 'absolute';

        // Set the top position for the FIRST clone
        if (clickCounter3 === 0) {
            clonedSection.style.top = '99px'; // Set the desired top position for the first clone
        } else {
            // Let subsequent clones stack below the previous one
            var previousCloneRestrict = container.children[clickCounter3];
            var previousCloneBottomRestrict = parseInt(previousCloneRestrict.style.top) + originalSectionHeight;
            clonedSection.style.top = previousCloneBottomRestrict + 10 +'px';
        }

        // Increment clickCounter3
        clickCounter3++;

        // Disable the button if the limit is reached
        if (clickCounter3 === 7) {
            document.getElementById("restrictbtn").disabled = true;
        }

        // Move the button down by the height of the last added clone
        var button = document.getElementById("restrictbtn");
        var buttonTop = parseInt(button.style.top);
        button.style.top = buttonTop + originalSectionHeight + 10 + 'px';
    }
};


</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
@endsection



