
@extends('layouts.chairpersonapp')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LQJzBrrqfmyPXYjXvKXt8CvHv5bFIYt9qBqYRg0cFxJ+98FZBvFZ52EGEWk3HPlbeXmFfZl6Ko25Xme+ERyI2g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">


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

    #data-table th, #data-table td {
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
            <a class="nav-link">Transaction</a>
        </div>
    </div>
     <!-- Components header -->
        <div style="width: 100%; height: 10%; text-align: right; padding-right: 0px; color: black; font-size: 20px; font-family: Inter; line-height: 33px; font-weight: 200; word-wrap: break-word; position: relative;">
            <div style="display: flex; align-items: right; padding-left: 1020px; background-color: #F6F6F6;">
                <span>Home / Enrollment / Transactions / Study Plan</span>
            </div>
            <div style="flex-grow: 1; height: 1px; border: 1px rgba(0, 0, 0, 0.20) solid;"></div>
        </div>

        <!-- Main components -->
        <p style="font-size: 32px; font-family: Inter; font-weight: bold; position: absolute; top: 230px; left:100px">List of Study Plan Validations</p>  
        
        <link rel="stylesheet" href="{{ url('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        
        <div id="validation-data-container" style="display: flex; position:absolute; top:290px; left:15%;">
            @livewire('validation-data')
        </div>

    <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });
    });


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
    </script>


<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

@endsection

