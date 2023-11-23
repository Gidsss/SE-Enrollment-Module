@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LQJzBrrqfmyPXYjXvKXt8CvHv5bFIYt9qBqYRg0cFxJ+98FZBvFZ52EGEWk3HPlbeXmFfZl6Ko25Xme+ERyI2g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">

<style>
    .custom-table-container {
        position: absolute;
        top: 230px; /* Change this value to adjust the top position */
        left: 13%; /* Change this value to adjust the left position */
        width: 85%; /* Adjust the width of the container */
        background-color: white !important;
        border-radius: 10px; /* Adjust the radius for rounded edges */
        border: 1px solid #ccc; /* Adjust the border color and thickness */
    }
    .broken-line {
        width: 95%;
        border-bottom: 2.5px dashed grey;
        white-space: pre;
        font-family: monospace;
        position: absolute;
        margin-left: 10px;
        margin-right: 10px;
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



    <div class="card" style="width:13.03in; height:10ch; color: #2D349A; position: relative;">

        <span style="position: absolute; top: 0.90ch; left: 1ch;font-family: sans-serif; font-size: 35px; font-weight: bold;">Enrollment</span>    
        <div class="card" style="width:20ch; height:5ch; position: absolute; top: 2.5ch; right: 22ch; border: .25px solid #000; display: flex; justify-content: center; align-items: center;">
            <p style="position: absolute; top: 1ch; right: 3ch;">Status: Enlisted  <i class="fas fa-circle" style="color:yellow"></i></p>
        </div>
        <button type="button" class="btn btn-primary float-right" style="color:#2D349A;position: absolute; top: 2.5ch; right: 2ch; width: 150px; height: 5ch;">
            <i class="fas fa-download" style="color:white"></i>
            <span style="color:white">Save a Copy</span></button>
    </div>
        
    <div class="card" style="width:13.03in; height:100ch">
        <div style="width:145ch; height:10ch; color: #2D349A; position: relative;">
            <br>
            <span style="position: absolute; top: 1cm; left: 15ch; font-family: sans-serif; font-size: 35px; font-weight: bold;">
                <i class="fas fa-circle" style="font-size: 50px;"></i>
                <span style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
            </span>
            

            <span style="position: absolute; top: 1cm; left: 30ch; font-family: sans-serif; font-size: 35px; font-weight: bold;">
                <i class="fas fa-circle" style="font-size: 54px; color: #2D349A; "></i>
                <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">2</span>
            </span>            

            <a href="#" onclick="handleClick(event)" style="text-decoration: none;">
            <span style="position: absolute; top: 1cm; left: 45ch; font-family: sans-serif; font-size: 35px; font-weight: bold;">
                <i class="far fa-circle" style="font-size: 54px;color: #2D349A"></i>
                <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">3</span>
            </span>
            </a>

            <div  style="position:absolute; top: 100px;left:213px ;width:70% ;height:60%">
                <span style="position: absolute; top: 45%; left: 13.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Check Schedule</span>
                <span style="position: absolute; top: 45%; left: 49%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">View Assessment</span>
                <span style="position: absolute; top: 45%; left: 85.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Download SER</span>
            </div>


</div>
  </div>
  
    <script>
    function handleClick(event) {
        // Handle the click event here
        alert("Clicked!"); // You can replace this with your own logic
        event.preventDefault(); // Prevent the default behavior of the anchor tag
    }

    </script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection