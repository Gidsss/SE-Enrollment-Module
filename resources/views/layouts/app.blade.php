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
  <link rel="stylesheet" href="{{ url('public/backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('public/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('public/backend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('public/backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('public/backend/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Image styles -->
  <link rel="stylesheet" href="{{ url('public/backend/dist/css/img.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ url('public/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('layouts.header')
  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Page content -->
  @yield('content')

  
</div>


<!-- jQuery -->
<script src="{{ url('public/backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('public/backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('public/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ url('public/backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ url('public/backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ url('public/backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('public/backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('public/backend/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ url('public/backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('public/backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('public/backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('public/backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('public/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('public/backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/backend/dist/js/adminlte.js') }}"></script>

</body>
</html>
