@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LQJzBrrqfmyPXYjXvKXt8CvHv5bFIYt9qBqYRg0cFxJ+98FZBvFZ52EGEWk3HPlbeXmFfZl6Ko25Xme+ERyI2g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">

    <style>
        .custom-bg-color {
            background-color: #f8f4f4
            ;
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
            left: calc(15ch + 220px);
            width: 253px;
            height: 5px;
            background-color: #2D349A;
            z-index: 0;
        }

        .connector-blue2 {
            position: absolute;
            top: 75%;
            left: calc(49ch + 245px);
            width: 245px;
            height: 5px;
            background-color: #2D349A;
            z-index: 0;
        }
        /* Generic button styling */
        .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
            border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        /* Primary button styling */
        .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        }

        /* Float to the right */
        .float-right {
        float: right;
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



        <div class="card" style="max-width: 100%; height: auto; color: #2D349A; position: relative;">
        <br>
        <span style="position: absolute; top: 0.90ch; left: 1ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">Enrollment</span>   
            <br><br>
            <div class="status-card" style="width:20ch; height:4ch; position: absolute; top: 3.5ch; right: 22ch; border: .25px solid #000; 
            display: flex; justify-content: center; align-items: center;">
                <p style="margin-left: .2rem; margin-top: 1rem;">Status: Enrolled <i class="fas fa-circle" style="color: green"></i></p>
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
               
                <span style="position: absolute; top: 1cm; left: 12ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="fas fa-circle" style="font-size: 50px; color: #2D349A "></i>
                    <span style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
                </span>
                
                <a href="#" onclick="handleAssessmentClick(event)" style="text-decoration: none;">
                <span style="position: absolute; top: 1cm; left: 24.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="fas fa-circle" style="font-size: 54px; color: #2D349A"></i>
                    <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">2</span>
                </span> 
                </a>

                <span style="position: absolute; top: 1cm; left: 36.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="fas fa-circle" style="font-size: 54px; color: #2D349A"></i>
                    <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">3</span>
                </span> 
                <!-- Connectors -->
                <div class="connector-blue"></div>
                <div class="connector-blue2"></div>

                <div  style="position:absolute; top: 100px;left:213px ;width:70% ;height:60%">
                    <span style="position: absolute; top: 45%; left: 13.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Create Study Plan</span>
                    <span style="position: absolute; top: 45%; left: 50.3%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">View Assessment</span>
                    <span style="position: absolute; top: 45%; left: 85.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Download SER</span>
                </div>

                <div class="card custom-bg-color" style="position: absolute; top: 150px; left: 13%; width: 85%; height: 70%">
                    <span style="position: absolute; top: 0.90ch; left: 1ch; font-family: sans-serif; font-size: 15px; color: black"><i class="fa fa-exclamation-circle" style="color:black; position: relative  left    "aria-hidden="true"></i>                
                        Please save a copy of your Student Enrollment Record (SER) to be officially enrolled, and be added to your subject's MS Teams. 
                        The Start of classes will be on August 29, 2023.</span>    
                </div>           
                 <!-- <object data="http://localhost/enrollmentmod/reg-form.pdf" type="application/pdf" width="80%" height="500px" style="position: absolute; top: 220px; left: 16%;"> -->
                <object data="http://localhost/enrollmentmod/generate-pdf" type="application/pdf" width="80%" height="500px" style="position: absolute; top: 220px; left: 16%;">
                </object>

                 
        </div>
    
        
    </div>
     
        <script>
        function handleAssessmentClick(event) {
            // Handle the click event here
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            window.location.href = '{{ route("irreg_assessment") }}';
        }
        </script>


    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection