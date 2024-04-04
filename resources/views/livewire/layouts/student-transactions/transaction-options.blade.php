<!-- grandparent of Study Plan validations and shifting requests -->
<!-- parent of transactions -->
<!-- all styles and JS for parent and children components are here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLM Chairperson | Student Transactions</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('backend/dist/css/adminlte.min.css') }}">
    <style>
   .text-first-year {
            font-size: 48px;
            font-family: 'Inter', sans-serif; 
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
    <script src="{{ asset('js/studyPlanValidations.js') }}"></script>
    <script src="{{ asset('js/shiftingRequests.js') }}"></script>
    <script src="{{ asset('js/addDropRequests.js') }}"></script>
    <script src="{{ asset('js/loaRequests.js') }}"></script>
    
@stack('scripts')

@livewireScripts
</body>
</html>
