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
            left: calc(15ch + 220px);
            width: 247px;
            height: 5px;
            background-color: #2D349A;
            z-index: 0;
        }

        .connector-gray {
            position: absolute;
            top: 75%;
            left: calc(49ch + 248px);
            width: 240px;
            height: 5px;
            background-color: gray;
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
                
                <span style="position: absolute; top: 1cm; left: 15ch; font-family: sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="fas fa-circle" style="font-size: 50px;"></i>
                    <span style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
                </span>
                
                <a href="#" onclick="handleClick(event)" style="text-decoration: none;">
                <span style="position: absolute; top: 1cm; left: 30ch; font-family: sans-serif; font-size: 35px; font-weight: bold;">
                    <i class="far fa-circle" style="font-size: 54px; color: #2D349A; "></i>
                    <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">2</span>
                </span>            
                </a>

                <span style="position: absolute; top: 1cm; left: 45ch; font-family: sans-serif; font-size: 35px; font-weight: bold;">
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
     
        <script>
        function handleClick(event) {
            // Handle the click event here
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            window.location.href = '{{ route("view_assessment") }}';
        }
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


    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection