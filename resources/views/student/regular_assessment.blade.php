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
</style>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">         
          </div><!-- /.col -->
    </div><!-- /.row -->



    <!-- <div class="card" style="width:13.03in; height:10ch; color: #2D349A; position: relative;"> -->
    
    <div class="card" style="max-width:100%; height:auto; color: #2D349A; position: relative;">
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

    <!-- <div class="card" style="width:13.03in; height:100ch"> -->
    <div class="card" style="max-width: 100%; height: 100ch; color: #2D349A; position: relative;">
        <div style="width:145ch; height:10ch; color: #2D349A; position: relative;">
            <br>
            <a href="#" onclick="handleSchedClick(event)" style="text-decoration: none;">
            <span style="position: absolute; top: 1cm; left: 12ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                <i class="fas fa-circle" style="font-size: 50px; color: #2D349A;"></i>
                <span style="position: absolute; top: 47.5%; left: 47.5%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">1</span>
            </span>
</a>

            
            <span style="position: absolute; top: 1cm; left: 24.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                <i class="fas fa-circle" style="font-size: 54px; color: #2D349A; "></i>
                <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: white; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">2</span>
            </span>            

            <a href="#" onclick="handleSERClick(event)" style="text-decoration: none;">
            <span style="position: absolute; top: 1cm; left: 36.5ch; font-family: Inter, sans-serif; font-size: 35px; font-weight: bold;">
                <i class="far fa-circle" style="font-size: 54px;color: #2D349A"></i>
                <span style="position: absolute; top: 45%; left: 50%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">3</span>
            </span>
            </a>
            <!-- Connectors -->
            <div class="connector-blue"></div>
                <div class="connector-gray"></div>

            <div  style="position:absolute; top: 100px;left:213px ;width:70% ;height:60%">
                <span style="position: absolute; top: 45%; left: 13.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Check Schedule</span>
                <span style="position: absolute; top: 45%; left: 49%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">View Assessment</span>
                <span style="position: absolute; top: 45%; left: 85.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Download SER</span>
            </div>

<!-- component -->
<section class="content">
<div class="card" style="position:absolute; left:35%; top:1.75in; width:35%; border-radius: 10px; border: 1px solid black;">
    <div class="flex flex-col justify-center items-center gap-2">
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; text-decoration: underline; position: relative; left: 3%; top: 9px;">TUITION FEE</span>
        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs" style="width: 50%;">
            <table>
                <tbody id="table-tuition-fees">
                </tbody>
            </table>
        </div>
        <div class="broken-line"></div>
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; text-decoration: underline; position: relative; left: 3%; top: 9px;">MISCELLANEOUS FEE</span>
        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs">
            <table >
                <tbody id="table-misc-fees">
                </tbody>
            </table>
        </div>
        <div class="broken-line"></div>
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; text-decoration: underline; position: relative; left: 3%; top: 9px;">LABORATORY FEE</span>
        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs">
            <table >
                <tbody id="table-lab-fees">
                </tbody>
            </table>
        </div>
        <div class="broken-line"></div>
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; text-decoration: underline; position: relative; left: 3%; top: 9px;">OTHER FEES</span>
        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs">
            <table >
                <tbody id="table-other-fees">
                </tbody>
            </table>
        </div>
        <div class="broken-line"></div>
        <span class="font-semibold text-black" style="color: #000; font-size: 15px; position: relative; left: 172px; ">Total Amount: 22,156.00</span><br>
        <span class="font-semibold text-black" style="color: #000; font-size: 15px; position: relative; left: 172px; ">Payment Status: <b> Covered <br> by CHED Unifast(RA 10931)</b></span>
    </div>  

</div>
  </div>
</section>
    <script>
    function handleSchedClick(event) {
        // Handle the click event here
        window.location.href = '{{ route("regular_schedule") }}';
        event.preventDefault(); // Prevent the default behavior of the anchor tag
    }
    function handleSERClick(event) {
        // Handle the click event here
        window.location.href = '{{ route("regular_ser") }}';
        event.preventDefault(); // Prevent the default behavior of the anchor tag
    }
    var tableBody1 = document.getElementById('table-misc-fees');
    var tableData1 = [
        { misc_fees: 'Cultural Activity', misc_amount: '74.00' },
        { misc_fees: 'Library Fee', misc_amount: '732.00' },
        { misc_fees: 'Medical/Dental Fee', misc_amount: '293.00' },
        { misc_fees: 'Guidance Fee', misc_amount: '146.00' },
        { misc_fees: 'Athletic Fee without PE', misc_amount: '117.00' },
        { misc_fees: 'Student Welfare', misc_amount: '74.00' },
        { misc_fees: 'Registration Fee', misc_amount: '1,510.00' }
    ];
    var tableBody2 = document.getElementById('table-tuition-fees');
    var tableData2 = [
        { tuition_fees: 'Cultural Activity', tuition_amount: '18,000.00' }
    ];
    var tableBody3 = document.getElementById('table-lab-fees');
    var tableData3 = [
        { lab_fees: 'Category 3 Laboratory', lab_amount: '2,400.00' }
    ];
    var tableBody4 = document.getElementById('table-other-fees');
    var tableData4 = [
        { other_fees: 'Development Fund', other_amount: '146.00' },
        { other_fees: 'Ang Pamantasan Fee', other_amount: '50.00' },
        { other_fees: 'Supreme Student Council', other_amount: '246.00' },
    ];
    function adjustPosition(tableBody, tableData, columnPositions) {
    // Create and add tr elements for each row in the table body
    tableData.forEach(function (data) {
        var tr = document.createElement('tr');
        // Create and add td elements for each cell in the row
        Object.values(data).forEach(function (value, cellIndex) {
            var td = document.createElement('td');
            td.textContent = value;
            td.style.color = 'black'; // Set the text color to black
            td.style.fontSize = '15px'; // Adjust the font size as needed
            // Calculate the left position for each cell in the specified column
            var leftChange = 0;
            for (var i = 0; i < columnPositions.length; i++) {
                if (cellIndex === columnPositions[i].columnIndex) {
                    leftChange = columnPositions[i].leftChange;
                    break;
                }
            }
            // Set left position for each cell
            td.style.position = 'relative';
            td.style.left = leftChange + 'px';
            tr.appendChild(td);
        });
        tableBody.appendChild(tr);
    });
}
    // Define an array of objects to store column index and left change
    var columnPositions = [
        { columnIndex: 0, leftChange: 15 },
        { columnIndex: 1, leftChange: 100 }
    ];
    // Adjust position for the specified columns
    adjustPosition(tableBody1, tableData1, columnPositions);
    adjustPosition(tableBody2, tableData2, columnPositions);
    adjustPosition(tableBody3, tableData3, columnPositions);
    adjustPosition(tableBody4, tableData4, columnPositions);
    </script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection