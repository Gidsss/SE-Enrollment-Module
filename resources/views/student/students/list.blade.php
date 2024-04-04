@extends('layouts.app') 

@section('content')

<!-- DataTables -->
<link rel="stylesheet" href="{{ url('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('public/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('public/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"> 

<link rel="stylesheet" href="{{ url('public/backend/dist/css/adminlte.min.css') }}">
<!-- Livewire Component -->
@livewire('student-data')  

<!-- Script for push menu -->
<script>
$(document).ready(function () {
    // Enable push menu toggle
    $('[data-widget="pushmenu"]').on('click', function () {
        // Toggle the class that triggers the push menu
        $('body').toggleClass('sidebar-collapse');
    });
});
</script>
<!-- Script for the Table -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
