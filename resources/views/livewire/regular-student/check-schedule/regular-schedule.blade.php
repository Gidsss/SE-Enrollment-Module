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
                <img src="{{url('backend/dist/img/user2.jpg')}}" alt="">2021-10687
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
                <p style="margin-left: .2rem; margin-top: 1rem;">Student Type: Regular</p>
            </div>
            <div class="status-card" style="width:20ch; height:4ch; position: absolute; top: 3.5ch; right: 22ch; border: .25px solid #000; 
            display: flex; justify-content: center; align-items: center;">
                <p style="margin-left: .2rem; margin-top: 1rem;">Status: Enlisted <i class="fas fa-circle" style="color: yellow"></i></p>
            </div>

            <button type="button" class="save-class-btn btn btn-primary float-right" style="color: #2D349A; position: absolute; top: 3.5ch; right: 2ch; width: 150px; height: 4ch;">
            <span class="hidden-info"><i class="fas fa-exclamation-triangle"></i>Please complete all the steps first!</span>
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
        <div class="card" style="max-width: 100%; height: 100ch; color: #2D349A; position: relative;">
            <div style="width:145ch; height:10ch; color: #2D349A; position: relative;">
                <br>
                
                <span style="position: absolute; top: 1cm; left: 12ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="fas fa-circle" style="font-size: 50px;"></i>
                    <span style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
                </span>
                
                <a href="#" onclick="handleClick(event)" style="text-decoration: none;">
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
                    <span style="position: absolute; top: 45%; left: 49%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">View Assessment</span>
                    <span style="position: absolute; top: 45%; left: 85.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Download SER</span>
                </div>

                <div class="card custom-bg-color" style="position: absolute; top: 170px; left: 13%; width: 85%; height: 60%">
                    <span style="position: absolute; top: 0.90ch; left: 1ch; font-family: sans-serif; font-size: 20px; color: white">A.Y 2022 - 2023, Term 1</span>    
                </div>        

                <!-- Main content -->
                <section class="content">
               
                    <div class="card custom-table-container">
                    
                        <div class="card-body">
                            <table class="table custom-table">
                                <thead>
                                    <tr id="table-headers">
                                        <!-- Header content and background color will be dynamically added here using JavaScript -->
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    <!-- Table body content goes here -->
                                </tbody>
                            </table>
                            
                        </div>
                        
                    </div>
                   
                </section>
        </div>
    
    </div>
    </div>
    </div>
    <script>
        // function handleClick(event) {
        //     // Handle the click event here
        //     event.preventDefault(); // Prevent the default behavior of the anchor tag
        //     window.location.href = ' route("regular_assessment") }}';
        // }
        document.addEventListener('DOMContentLoaded', function () {
            // Replace the following array with your custom headers, background colors, and text colors
            var customHeaders = [
                { text: 'Class Code', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Section', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Subject Title', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Units', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Schedule', bgColor: '#f0f4fc', textColor: 'black' },
                { text: 'Room', bgColor: '#f0f4fc', textColor: 'black' }
            ];

            var tableHeaders = document.getElementById('table-headers');
            var tableBody = document.getElementById('table-body');

            // Create and add th elements for each header with custom background color and text color
            customHeaders.forEach(function (header) {
                var th = document.createElement('th');
                th.textContent = header.text;
                th.style.backgroundColor = header.bgColor;
                th.style.color = header.textColor;
                tableHeaders.appendChild(th);
            });

            // Example data for the table body
            var tableData = [
                { classCode: 'CSC 0311', section: '2', subjectTitle: 'Programming Languages (lec)', units: '2', schedule: 'T 6:00p-9:00p', room: 'F2F COMP LAB 4' },
                { classCode: 'CSC 0312', section: '2', subjectTitle: 'Programming Languages (lab)', units: '2', schedule: 'F 1:00p-3:00p', room: 'F2F GCA 306' },
                { classCode: 'CSC 0312.1', section: '2', subjectTitle: 'Software Engineering (lec)', units: '3', schedule: 'W 2:00p-5:00p', room: 'F2F COMP LAB 3' },
                { classCode: 'CSC 0313', section: '2', subjectTitle: 'Software Engineering (lab)', units: '2', schedule: 'Th 1:00p-3:00p', room: 'F2F COMP LAB 1' },
                { classCode: 'CSC 0313.1', section: '2', subjectTitle: 'Operating System (lec)', units: '3', schedule: 'Th 4:00p-6:00p', room: 'F2F COMP LAB 1' },
                { classCode: 'CSC 0314', section: '2', subjectTitle: 'Operating System (lab)', units: '2', schedule: 'Th 1:00p-3:00p', room: 'F2F COMP LAB 1' },
                { classCode: 'CSC 0314.1', section: '2', subjectTitle: 'Intelligent System (lec)', units: '3', schedule: 'M 9:00a-12:00p', room: 'F2F GV 311' },
                { classCode: 'CSC 0315', section: '2', subjectTitle: 'Intelligent System (lab)', units: '2', schedule: 'W 12:00p-2:00p', room: 'F2F COMP LAB 4' },
                { classCode: 'CSC 0315.1', section: '2', subjectTitle: 'Intelligent System (lab)', units: '2', schedule: 'M 1:00p-4:00p', room: 'F2F COMP LAB 4' }
            ];

            // Create and add tr elements for each row in the table body
            tableData.forEach(function (data) {
                var tr = document.createElement('tr');
                // Create and add td elements for each cell in the row
                Object.values(data).forEach(function (value) {
                    var td = document.createElement('td');
                    td.textContent = value;
                    td.style.color = 'black'; // Set the text color to black
                    tr.appendChild(td);
                });
                tableBody.appendChild(tr);
            });
        });
        </script>

