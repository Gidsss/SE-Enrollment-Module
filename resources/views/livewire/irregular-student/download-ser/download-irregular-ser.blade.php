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
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
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
                        <div class="media">
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
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                    data-toggle="dropdown" aria-expanded="false">
                    <img src="{{url('backend/dist/img/user2.jpg')}}" alt="">
                    {{ substr(Auth::guard('student')->user()->student_id, 0, 4) . '-' . substr(Auth::guard('student')->user()->student_id, 4) }}

                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown"
                    x-placement="bottom-start"
                    style="position: absolute; will-change: transform; top: 0px; left: 0px; right: 100px; transform: translate3d(50px, 40px, 0px);">
                    <a class="dropdown-item" href="javascript:;">Profile</a>
                    <a class="dropdown-item" href="javascript:;">
                        <span>Settings</span>
                    </a>
                    <a class="dropdown-item" href="javascript:;">Help</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i>Log
                        Out</a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- Navigation Bar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{url('backend/dist/img/plmlogo.png')}}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">PLM Student Portal</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

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
                                <a href="./index.html" class="nav-link active">
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
                                <a href="/academic_directive/shifting_request" class="nav-link">
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
                            </a>
                    </li>
                </ul>
                </li>
                <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains main page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->



            <div class="card" style="max-width: 100%; height: auto; color: #2D349A; position: relative;">
                <br>
                <span
                    style="position: absolute; top: 0.90ch; left: 1ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">Enrollment</span>
                <br><br>
                <div class="status-card" style="width:21ch; height:4ch; position: absolute; top: 3.5ch; right: 44ch; border: .25px solid #000; 
            display: flex; justify-content: center; align-items: center;">
                    <p style="margin-left: .2rem; margin-top: 1rem;">Student Type: Irregular</p>
                </div>
                <!-- Display the current status -->
                <div class="status-card"
                    style="width:20ch; height:4ch; position: absolute; top: 3.5ch; right: 22ch; border: .25px solid #000; display: flex; justify-content: center; align-items: center;">
                    <p style="margin-left: .2rem; margin-top: 1rem;">Status: {{ $studentStatus }}
                        <i class="fas fa-circle"
                            style="color: {{ $studentStatus == 'Enrolled' ? 'green' : 'yellow' }}"></i>
                    </p>
                </div>

                <div>
                    <!-- Button to trigger enrollment -->
                    <button type="button" class="btn btn-primary float-right"
                        style="color: #2D349A; position: absolute; top: 3.5ch; right: 2ch; width: 150px; height: 4ch;">
                        <i class="fas fa-download"
                            style="color: white; margin-right: .5rem; top: -0.2rem; position: relative;"></i>

                        <span
                            style="color: white; margin-right: 0.5rem; top: -0.2rem; position: relative; cursor: pointer;"
                            wire:click="markAsEnrolled">
                            Save a Copy
                        </span>
                    </button>

                    <!-- Modal for showing messages -->
                    @if ($showModal)
                        <div class="modal fade show" style="display: block;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Enrollment Status</h4>
                                        <button type="button" class="close" wire:click="closeModal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ $modalMessage }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" wire:click="closeModal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Overlay -->
                        <div class="modal-backdrop fade show"></div>
                    @endif
                </div>

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

                    @if ($studentStatus === 'Enlisted')
                        <span
                            style="position: absolute; top: 1cm; left: 12ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                            <i class="fas fa-circle" style="font-size: 50px; color: #2D349A "></i>
                            <span
                                style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
                        </span>
                        <a href="{{ route('irreg_assessment') }}" style="text-decoration: none;">
                            <span
                                style="position: absolute; top: 1cm; left: 24.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                                <i class="fas fa-circle" style="font-size: 54px; color: #2D349A"></i>
                                <span
                                    style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">2</span>
                            </span>
                        </a>
                    @else
                        <!-- Render as a non-clickable items the number 1 and 2-->
                        <span
                            style="position: absolute; top: 1cm; left: 12ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold; cursor: not-allowed;">
                            <i class="fas fa-circle" style="font-size: 50px; color: #2D349A "></i>
                            <span
                                style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
                        </span>
                        <span
                            style="position: absolute; top: 1cm; left: 24.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold; cursor: not-allowed;">
                            <i class="fas fa-circle" style="font-size: 54px; color: #2D349A"></i>
                            <span
                                style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">2</span>
                        </span>


                    @endif
                    <span
                        style="position: absolute; top: 1cm; left: 36.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                        <i class="fas fa-circle" style="font-size: 54px; color: #2D349A"></i>
                        <span
                            style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">3</span>
                    </span>
                    <!-- Connectors -->
                    <div class="connector-blue"></div>
                    <div class="connector-blue2"></div>

                    <div style="position:absolute; top: 100px;left:213px ;width:70% ;height:60%">
                        <span
                            style="position: absolute; top: 45%; left: 13.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Create
                            Study Plan</span>
                        <span
                            style="position: absolute; top: 45%; left: 50.3%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">View
                            Assessment</span>
                        <span
                            style="position: absolute; top: 45%; left: 85.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Download
                            SER</span>
                    </div>

                    <div class="card custom-bg-color"
                        style="position: absolute; top: 150px; left: 13%; width: 85%; height: 70%">
                        <span
                            style="position: absolute; top: 0.90ch; left: 1ch; font-family: sans-serif; font-size: 15px; color: black"><i
                                class="fa fa-exclamation-circle" style="color:black; position: relative  left    "
                                aria-hidden="true"></i>
                            Please save a copy of your Student Enrollment Record (SER) to be officially enrolled, and be
                            added to your subject's MS Teams.
                            The Start of classes will be on August 29, 2023.</span>
                    </div>

                    <object data="http://localhost/enrollmentmod/generate-pdf" type="application/pdf" width="80%"
                        height="500px" style="position: absolute; top: 220px; left: 16%;">
                    </object>


                </div>

            </div>
        </div>
    </div>