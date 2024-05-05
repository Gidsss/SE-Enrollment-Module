<!DOCTYPE html>
<html lang="en">
<html data-theme="light"></html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PLM Student Portal | Main Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Google Font: Inter -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('backend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('backend/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Image styles -->
  <link rel="stylesheet" href="{{ url('backend/dist/css/img.css') }}">
  <style>
        .accordion {
            background-color: white;
            color: #000000;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #EAEAEA;
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .accordion:after {
            content: '\02795'; /* Unicode character for "plus" sign (+) */
            font-size: 25px;
            color: #000000;
            float: right;
            margin-left: 5px;
            
        }
        .body-font {
            font-family: Inter, sans-serif; 
            font-size: 20px; 
            color:black;
        }

        .custom-bg-color {
            background-color: #F0F0F0;
        }

        .custom-table-container {
            position: relative;
            top: 70px; /* Change this value to adjust the top position */
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
            width: 255px;
            height: 5px;
            background-color: #2D349A;
            z-index: 0;
        }
        .connector-gray {
            position: absolute;
            top: 75%;
            left: calc(49ch + 254px);
            width: 240px;
            height: 5px;
            background-color: gray;
            z-index: 0;
        }
        .hidden {
            display: none;
        }
        .tab1 {
            tab-size: 2;
        }
        .center-button {
            text-align: center;
        }
        .step-checkmark {
            display: none;
            color: #624BFF;
        }
    </style>
   <!-- Livewire styles -->
   @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('backend/dist/img/plmlogo.png') }}" alt="AdminLTELogo" height="180" width="180">
        </div>
        
        <!-- Content Wrapper. Page content -->
        {{ $slot }}
</div>


<!-- jQuery -->
<script src="{{ url('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Bootstrap 4 -->
<script src="{{ url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<script src="{{ url('backend/dist/js/adminlte.js') }}"></script>

@stack('scripts')

@livewireScripts
</body>
</html>
