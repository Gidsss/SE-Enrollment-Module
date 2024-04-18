
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

<!-- Content Wrapper. Contains main page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">         
          </div><!-- /.col -->
    </div><!-- /.row -->



    <!-- <div class="card" style="width:13.03in; height:10ch; color: #2D349A; position: relative;"> -->
    
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

    <!-- <div class="card" style="width:13.03in; height:100ch"> -->
    <div class="card" style="max-width: 100%; height: 100ch; color: #2D349A; position: relative;">
        <div style="width:145ch; height:10ch; color: #2D349A; position: relative;">
            <br>
            
            <span style="position: absolute; top: 1cm; left: 12ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                <i class="fas fa-circle" style="font-size: 50px; color: #2D349A;"></i>
                <span style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
            </span>


            
            <span style="position: absolute; top: 1cm; left: 24.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                <i class="fas fa-circle" style="font-size: 54px; color: #2D349A; "></i>
                <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">2</span>
            </span>            

            <a href="#" onclick="handleSERClick(event)" style="text-decoration: none;">
            <span style="position: absolute; top: 1cm; left: 36.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                <i class="far fa-circle" style="font-size: 54px;color: #2D349A"></i>
                <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">3</span>
            </span>
            </a>
            <!-- Connectors -->
            <div class="connector-blue"></div>
                <div class="connector-gray"></div>

            <div  style="position:absolute; top: 100px;left:213px ;width:70% ;height:60%">
                <span style="position: absolute; top: 45%; left: 13.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Create Study Plan</span>
                <span style="position: absolute; top: 45%; left: 50.3%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">View Assessment</span>
                <span style="position: absolute; top: 45%; left: 85.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Download SER</span>
            </div>

<!-- component -->
<section class="content">
<div class="card" style="position:absolute; left:70%; top:1.75in; width:35%; border-radius: 10px; border: 1px solid black;">
    <div class="flex flex-col justify-center items-center gap-2">
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; text-decoration: underline; position: relative; left: 3%; top: 9px;">TUITION FEE</span>
        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs" style="width: 50%;">
            <table>
                <tbody id="table-tuition-fees">
                </tbody>
            </table>
        </div>
        <div class="broken-line"></div>
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; text-decoration: underline; position: relative; left: 3%; top: 9px;">MISCELLANEOUS FEE</span>
        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs">
            <table >
                <tbody id="table-misc-fees">
                </tbody>
            </table>
        </div>
        <div class="broken-line"></div>
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; text-decoration: underline; position: relative; left: 3%; top: 9px;">LABORATORY FEE</span>
        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs">
            <table >
                <tbody id="table-lab-fees">
                </tbody>
            </table>
        </div>
        <div class="broken-line"></div>
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; text-decoration: underline; position: relative; left: 3%; top: 9px;">OTHER FEES</span>
        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs">
            <table >
                <tbody id="table-other-fees">
                </tbody>
                <button type="button" class="btn btn-primary" style="color: #2D349A; position: absolute; bottom: 10px; left: 20px; width: 120px; height: 4ch;">
        <i class="fas fa-download" style="color: white; margin-right: .2rem; top: -0.2rem; position: relative; font-size: 14px;"></i>
        <span style="color: white;  margin-right: 0.2rem; top: -0.2rem; position: relative; font-size: 14px;">Save a Copy</span></button>
            </table>
        </div>
        <div class="broken-line"></div>
        <span class="font-semibold text-black" style="color: #000; font-size: 16.5px; position: relative; left: 172px; ">Total Amount: 22,156.00</span><br>
        <span class="font-semibold text-black" style="color: #000; font-size: 16.5px; position: relative; left: 172px; ">Payment Status: <b> Covered <br> by CHED Unifast(RA 10931)</b></span>
    </div>  

</div>
  </div>
  <div class="card" style="position:absolute; left:3%; top:1.75in; width:60%; border-radius: 10px; border: 1px solid black;">
    <div class="flex flex-col justify-center items-center gap-2">
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; text-decoration: underline; position: relative; left: 3%; top: 9px;">STUDY PLAN</span>
        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs" style="width: 50%;">
        <div class="broken-line"></div>
            <table>
            <tr>
            <td style="height: 20px;"></td>
            </tr>
            <tr>
                <td style="position: relative; color: black; font-family: Inter, regular; font-size: 20px; left:20px;">ONLINE</td>
            </tr>
            <tr>
            <td style="height: 20px;"></td>
            </tr>
            <tr>
                <td style="position: relative; color: black;font-family: Inter, regular; font-size: 18px; left: 20px;">Submitted Online: November 21, 2023</td>
            </tr>
            <tr>
            <td style="position: relative; color: black;font-family: Inter, regular; font-size: 18px; left: 20px;">Approved Online: November 22, 2023</td>
            </tr>
            <tr>
            <td style="height: 20px;"></td>
             </tr>
            <tr>
                <td style="position: relative; font-family: Inter, regular;color: black; font-size: 20px; left:20px;">ONSITE</td>
            </tr>
            <tr>
            <td style="height: 20px;"></td>
            </tr>
            <tr>
                <td style="position: relative; font-family: Inter, regular;color: black; font-size: 18px; left:20px;">Submitted Onsite: November 23, 2023</td>
            </tr>
            <tr>
                <td style="position: relative; font-family: Inter, regular;color: black; font-size: 18px; left:20px;">Approved Onsite: November 23, 2023</td>
            </tr>
            </table>
        </div>
        <div class="broken-line"></div>
        <table>
        <tr>
            <td style="height: 20px;"></td>
             </tr>
            <tr>
                <td style="position: relative; font-family: Inter, regular;color: black; font-size: 20px; left:20px;">Remarks: Remarks here</td>
                <td style="position: relative; font-family: Inter, regular;color: black; font-size: 20px; left:180px;">Study Plan Status:<strong> Approved</strong></td>
            </tr>
            <tr>
            <tr>
            <td style="height: 20px;"></td>
             </tr>
            <td style="position: relative; font-family: Inter, regular;color: black; font-size: 20px; left:20px;"></td>
            
            <td style="position: relative; font-family: Inter, regular;color: black; font-size: 20px; left:180px;">APPROVED BY:</td>
            <tr>
            <td style="height: 20px;"></td>
             </tr>
            </tr>
            <tr>
            <td style="position: relative; font-family: Inter, regular;color: black; font-size: 20px; left:20px;"></td>
            <td style="position: relative; font-family: Inter, regular;color: black; font-size: 20px; left:180px;">Name of Advising Body</td>
            </tr>
            <tr>
            <td style="position: relative; font-family: Inter, regular;color: black; font-size: 20px; left:20px;"></td>
            <td style="position: relative; font-family: Inter, regular;color: black; font-size: 20px; left:180px;">Position</td>
            </tr>
            <tr>
            <td style="height: 60px;"></td>
             </tr>
            <tr>
        <td colspan="4">
            <!-- Add your button here -->
            <button type="button" class="btn btn-primary" style="color: #2D349A; position: absolute; bottom: 10px; left: 20px; width: 150px; height: 4ch;">
        <i class="fas fa-download" style="color: white; margin-right: .5rem; top: -0.2rem; position: relative;"></i>
        <span style="color: white;  margin-right: 0.5rem; top: -0.2rem; position: relative;">Save a Copy</span>
        </td>
    </tr>
    
        </table>
        
    </div>  

</div>
</div>
</div>
</section>
</div>
    <script>

    var tableBody1 = document.getElementById('table-misc-fees');
    var tableData1 = [
        { misc_fees: 'Cultural Activity', misc_amount: '74.00' },
        { misc_fees: 'Library Fee', misc_amount: '732.00' },
        { misc_fees: 'Medical/Dental Fee', misc_amount: '293.00' },
        { misc_fees: 'Guidance Fee', misc_amount: '146.00' },
        { misc_fees: 'Athletic Fee without PE', misc_amount: '117.00' },
        { misc_fees: 'Student Welfare', misc_amount: '74.00' },
        { misc_fees: 'Registration Fee', misc_amount: '1,510.00' }
    ];
    var tableBody2 = document.getElementById('table-tuition-fees');
    var tableData2 = [
        { tuition_fees: 'Cultural Activity', tuition_amount: '18,000.00' }
    ];
    var tableBody3 = document.getElementById('table-lab-fees');
    var tableData3 = [
        { lab_fees: 'Category 3 Laboratory', lab_amount: '2,400.00' }
    ];
    var tableBody4 = document.getElementById('table-other-fees');
    var tableData4 = [
        { other_fees: 'Development Fund', other_amount: '146.00' },
        { other_fees: 'Ang Pamantasan Fee', other_amount: '50.00' },
        { other_fees: 'Supreme Student Council', other_amount: '246.00' },
    ];
    
    

    function adjustPosition(tableBody, tableData, columnPositions) {
    // Create and add tr elements for each row in the table body
    tableData.forEach(function (data) {
        var tr = document.createElement('tr');
        // Create and add td elements for each cell in the row
        Object.values(data).forEach(function (value, cellIndex) {
            var td = document.createElement('td');
            td.textContent = value;
            td.style.fontFamily = 'Inter, sans-serif';
            td.style.color = 'black'; // Set the text color to black
            td.style.fontSize = '16.2px'; // Adjust the font size as needed
            // Calculate the left position for each cell in the specified column
            var leftChange = 0;
            for (var i = 0; i < columnPositions.length; i++) {
                if (cellIndex === columnPositions[i].columnIndex) {
                    leftChange = columnPositions[i].leftChange;
                    break;
                }
            }
            // Set left position for each cell
            td.style.position = 'relative';
            td.style.left = leftChange + 'px';
            tr.appendChild(td);
        });
        tableBody.appendChild(tr);
    });
}
    // Define an array of objects to store column index and left change
    var columnPositions = [
        { columnIndex: 0, leftChange: 15 },
        { columnIndex: 1, leftChange: 100 }
    ];
    // Adjust position for the specified columns
    adjustPosition(tableBody1, tableData1, columnPositions);
    adjustPosition(tableBody2, tableData2, columnPositions);
    adjustPosition(tableBody3, tableData3, columnPositions);
    adjustPosition(tableBody4, tableData4, columnPositions);
    </script>
