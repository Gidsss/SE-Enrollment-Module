<!-- This is the layout for the Chairperson aka grandparent component for child components like the first-year container -->
<!-- This layout should contain the styles for the parent components (block-classes-management.blade.php, class-creation.blade.php, student-enlistment.blade.php) and the child components -->
<!-- Entry point of the Livewire -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLM Chairperson | Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('backend/dist/css/adminlte.min.css') }}">
    <style>
    .add-div-class {
        position: relative;
        }
    .hrs-add-div-class {
        position: relative;
        }
    .section { 
        border:1px solid #ddd; 
        }
    .custom-line {
        border-left: 150ch solid #CDCDCD; /* Adjust the color as needed */
        height: 2px; /* Adjust the height of the line */
        margin-left: 115px; /* Adjust the position (indent) as needed */
    }
    .custom-checkbox {
            position: relative;
            left: 310px;
            bottom: -25px;
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
    .broken-line {
        width: 95%;
        border-bottom: 2.5px dashed grey;
        white-space: pre;
        font-family: monospace;
        position: absolute;
        margin-left: 10px;
        margin-right: 10px;
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

    body {
            display: flex;
            margin: 0;
        }

    #left-card {
            padding: 20px;
            border: 1px solid #ccc;
            width: 250px;
            position: absolute;
            top: 180px;
            left: 40px;
    }

    #left-card1 {
            padding: 20px;
            border: 1px solid #ccc;
            width: 250px;
            position: absolute;
            top: 503px;
            left: 40px;
    }


    #right-card {
            position: absolute;
            top: 120px;
            left: 280px;
            padding: 8px;
            flex-grow: 1;
            display: block;
            width: 80%;
    }
    .message {
            position: absolute;
            top: 200px;
            left: 250px;
            font-size: 18px;
            color: #777;
            text-align: center;
            display: block;
            border: 1px solid #ccc;
    }

    .year-container {
            margin-bottom: 10px;
    }

    .accordion-button {
            cursor: pointer;
            padding: 10px;
            background-color: #E3E3E3;
            margin-bottom: 5px;
            border-radius: 6px;
            font-family: Inter;
    }

    .accordion-button.active {
    background-color: #A0A0A0;
    color: #FFF; 
    }

    .accordion-content {
            display: none;
            padding: 10px;
            margin-bottom: 5px;
    }

    .active {
            background-color: #ddd;
    }
    .text-first-year {
            font-size: 48px;
            font-family: 'Inter', sans-serif; 
    }
    html {
            background-color: #F6F6F6;
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

    <!--  Important Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="{{ url('backend/dist/js/adminlte.js') }}"></script>
    
    <script src="{{ asset('js/yearFirst.js') }}"></script>
    <script src="{{ asset('js/yearSecond.js') }}"></script>
    <script src="{{ asset('js/yearThird.js') }}"></script>
    <script src="{{ asset('js/yearFourth.js') }}"></script>

@stack('scripts')

@livewireScripts
</body>
</html>
