@extends('layouts.chairpersonapp')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://www.flaticon.com/free-icons/plus"/>
<style>
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

    .card {
            border: 1px solid #d3d3d3; /* Light gray border */
            padding: 20px; /* Add padding for better visibility */
        }

        #data-table {
        position: absolute;
        left: 90px;
        top: 400px;
        width: 130ch;
        border-spacing: 1px; /* Adjust this value to set the space between columns */
    }

    #data-table th,
    #data-table td {
        padding: 13px;
        text-align: center;
        font-family: Inter;
        font-size: 14px;
    }

    #btn-table {
        position: absolute;
        left: 150ch;
        top: 393px;
        border-spacing: 1px; 
        padding: 8px;
    }
    #btn-table td{
        padding: 8px;
        text-align: center;
        font-family: Inter;
        font-size: 14px;
    }
    .btn {
  width: 65px ;
  height: 30px;
  border-color: black;
  color: black;
  font-size: 10px;
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
        <div class="nav-item">
            <a href="http://localhost/enrollmentmod/chairperson/create_class" class="nav-link">Class Creation</a>
        </div>
        <div class="nav-item ">
            <a href="http://localhost/enrollmentmod/chairperson/block_classes" class="nav-link">Block Management</a>
        </div>
        <div class="nav-item ">
            <a href="http://localhost/enrollmentmod/chairperson/student_enlistment" class="nav-link">Student Enlistment</a>
        </div>
        <div class="nav-item page-item">
            <a href="http://localhost/enrollmentmod/chairperson/student_transaction" class="nav-link">Transaction</a>
        </div>
</div>
     <!-- Components header -->
        <div style="width: 100%; height: 10%; text-align: right; padding-right: 0px; color: black; font-size: 20px; font-family: Inter; line-height: 33px; font-weight: 200; word-wrap: break-word; position: relative;">
            <div style="display: flex; align-items: right; padding-left: 1058px; background-color: #F6F6F6;">
                <span>Home / Enrollment / Transactions / Study Plan</span>
            </div>
            <div style="flex-grow: 1; height: 1px; border: 1px rgba(0, 0, 0, 0.20) solid;"></div>
        </div>

        <!-- Main components -->
        <p style="font-size: 28px; font-family: Inter; font-weight: bold; position: absolute; top: 225px; left: 100px;">Year Level </p>
        <p style="font-size: 28px; font-family: Inter; font-weight: bold; position: absolute; top: 225px; left:250px;color:grey">| Transaction</p>
        <p style="font-size: 32px; font-family: Inter; font-weight: bold; position: absolute; top: 280px; left:100px">List of Study Plan Validations</p>
        


        <table id="data-table" style="top:340px; left:110px;" >
            <div class="card" style="position:absolute;left:100px;width:130ch;top:340px">
            <tbody id="table-header" >
            </tbody>
        </div>
            <tbody id="table-body">
            </tbody>
        </table>

        <table id="btn-table">
            <tr>
              <td><button type="button" class="btn btn-block btn-outline-primary">View</button></td>
            </tr>
            <tr>
              <td><button type="button" class="btn btn-block btn-outline-primary">View</button></td>
            </tr>
            <tr>
              <td><button type="button" class="btn btn-block btn-outline-primary">View</button></td>
            </tr>
            <tr>
              <td><button type="button" class="btn btn-block btn-outline-primary">View</button></td>
            </tr>
            <tr>
              <td><button type="button" class="btn btn-block btn-outline-primary">View</button></td>
            </tr>
          </table>

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

    document.addEventListener("DOMContentLoaded", function () {
        // Table header values
        const headerValues = ['#', 'Student ID', 'Student Name', 'Year Level', 'Date Request', 'Status'];

        // Sample data for the table
        const tableData = [
    { 
        '#': 1,
        'Student ID': '123456',
        'Student Name': 'John Doe',
        'Year Level': 'Senior',
        'Date Request': '2023-01-01',
        'Status': 'Approved',

    },
    { 
        '#': 2,
        'Student ID': '789012',
        'Student Name': 'Jane Smith',
        'Year Level': 'Junior',
        'Date Request': '2023-02-15',
        'Status': 'Pending',

    },
    { 
        '#': 3,
        'Student ID': '345678',
        'Student Name': 'Bob Johnson',
        'Year Level': 'Sophomore',
        'Date Request': '2023-03-20',
        'Status': 'Rejected',

    },
    { 
        '#': 4,
        'Student ID': '901234',
        'Student Name': 'Alice Williams',
        'Year Level': 'Senior',
        'Date Request': '2023-04-10',
        'Status': 'Approved',

    },
    { 
        '#': 5,
        'Student ID': '567890',
        'Student Name': 'Charlie Brown',
        'Year Level': 'Freshman',
        'Date Request': '2023-05-05',
        'Status': 'Pending',
    },
    
    
    // Add more rows as needed
];




        // Get the table and table body elements
        const dataTable = document.getElementById('data-table');
        const tableBody = document.getElementById('table-body');

        // Create thead and header row
        const thead = document.createElement('thead');
        const headerRow = document.createElement('tr');

        // Create table headers dynamically
        headerValues.forEach(headerText => {
            const th = document.createElement('th');
            th.textContent = headerText;
            th.style.fontSize = '18px';
            th.style.fontFamily = 'Inter';
            th.style.fontWeight = 'bold';
            headerRow.appendChild(th);
        });

        // Append the header row to the thead
        thead.appendChild(headerRow);

        // Append the thead to the table with an ID
        thead.id = 'table-header'; // Assign an ID
        dataTable.appendChild(thead);

        // Populate the table with data
        tableData.forEach(function (row) {
            const newRow = document.createElement('tr');

            Object.values(row).forEach(function (value) {
                const cell = document.createElement('td');
                cell.textContent = value;
                newRow.appendChild(cell);
            });

            tableBody.appendChild(newRow);
        });
    });
    
    </script>


<!-- jQuery -->
<script src="{{ url('public/backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('public/backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

@endsection
