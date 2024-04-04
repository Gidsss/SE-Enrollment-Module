@extends('layouts.app')
@section('content')
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LQJzBrrqfmyPXYjXvKXt8CvHv5bFIYt9qBqYRg0cFxJ+98FZBvFZ52EGEWk3HPlbeXmFfZl6Ko25Xme+ERyI2g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    
    <style>
        .custom-bg-color {
            background-color: #5074bc;
        }
        .custom-table-container {
            position: absolute;
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
            left: calc(15ch + 70px);
            width: 240px;
            height: 5px;
            background-color: #2D349A;
            z-index: 0;
        }
        .connector-gray {
            position: absolute;
            top: 75%;
            left: calc(49ch + 90px);
            width: 240px;
            height: 5px;
            background-color: gray;
            z-index: 0;
        }

        .connector-gray2 {
            position: absolute;
            top: 75%;
            left: calc(49ch + 382px);
            width: 240px;
            height: 5px;
            background-color: gray;
            z-index: 0;
        }

        #course-data-container {
            position: absolute;
            top: 150px;
            left: 25px;
            width: 150ch;
            color: #000;
        }
    </style>

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

            <div class="status-card" style="width:23ch; height:4ch; position: absolute; top: 3.5ch; right: 43ch; border: .25px solid #000; 
            display: flex; justify-content: center; align-items: center;">
                <p style="margin-left: .1rem; margin-top: 1rem;">Program: Masters of Law</p>
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
        
        <div class="card" style="max-width: 100%; height: 100ch; color: #2D349A; position: relative;">
            <div style="width:145ch; height:10ch; color: #2D349A; position: relative;">
                <br>
                <span style="position: absolute; top: 1cm; left: 6ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="fas fa-circle" style="font-size: 50px;"></i>
                    <span style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
                </span>
                
                <a href="#" onclick="handleClick(event)" style="text-decoration: none;">
                <span style="position: absolute; top: 1cm; left: 17.7ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="far fa-circle" style="font-size: 54px; color: #2D349A; "></i>
                    <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">2</span>
                </span>            
                </a>

                <span style="position: absolute; top: 1cm; left: 29.8ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="far fa-circle" style="font-size: 54px;color: grey"></i>
                    <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">3</span>
                </span>

                <span style="position: absolute; top: 1cm; left: 41.9ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="far fa-circle" style="font-size: 54px;color: grey"></i>
                    <span style="position: absolute; top: 45%; left: 45%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">4</span>
                </span>
                <!-- Connectors -->
                <div class="connector-blue"></div>
                <div class="connector-gray"></div>
                <div class="connector-gray2"></div>

                <div  style="position:absolute; top: 100px;left:213px ;width:70% ;height:60%">
                    <span style="position: absolute; top: 45%; left: -40px; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100px; height: 100%;">Select Courses</span>
                    <span style="position: absolute; top: 45%; left: 30%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 120px; height: 100%;">View Assessment</span>
                    <span style="position: absolute; top: 45%; left: 67.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 200px; height: 100%;">Tuition Payment Procedures</span>
                    <span style="position: absolute; top: 45%; left: 102%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 200px; height: 100%;">Download SER</span>
                </div>

                <link rel="stylesheet" href="{{ url('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
                  
                <!-- Main content -->
                <div id="course-data-container">
                    @livewire('course-data')
                </div>
        </div>
    </div>


    <!-- Script for the Table -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      });
    });
  </script>

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection