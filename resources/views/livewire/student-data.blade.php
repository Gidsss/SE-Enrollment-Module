 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Study Plan | Transaction</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Study Plans</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Study Plan Validations</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Year Level</th>
                    <th>Date Request</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{$student->student_id}}</td> 
                        <td>{{$student->student_name}}</td>
                        <td>{{$student->year_level}}</td>
                        <td>{{$student->date_request}}</td>
                        <td>{{$student->status}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Year Level</th>
                        <th>Date Request</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
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
<script src="{{ url('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
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
<!-- AdminLTE for demo purposes -->
<script src="{{ url('public/backend/dist/js/demo.js') }} "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('public/backend/dist/js/pages/dashboard.js') }}"></script>


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