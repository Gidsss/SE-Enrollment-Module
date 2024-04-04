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
                <span style="position: absolute; top: 45%; left: 49%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Manage Balance</span>
                <span style="position: absolute; top: 45%; left: 85.2%; transform: translate(-50%, -50%); color: black; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">Download SER</span>
            </div>

<!-- component -->
<section class="content">
<div class="card" style="position:absolute; left:13%; top:1.75in; width:35%; border-radius: 10px; border: 1px solid black;">
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
                <button type="button" class="btn btn-primary" style="color: #2D349A; position: absolute; bottom: 10px; left: 20px; width: 120px; height: 4ch;">
        <i class="fas fa-download" style="color: white; margin-right: .2rem; top: -0.2rem; position: relative; font-size: 14px;"></i>
        <span style="color: white;  margin-right: 0.2rem; top: -0.2rem; position: relative; font-size: 14px;">Save a Copy</span></button>
            </table>
        </div>
        <div class="broken-line"></div>
        <span class="font-semibold text-black" style="color: #000; font-size: 15px; position: relative; left: 172px; ">Total Amount: 22,156.00</span><br>
        <span class="font-semibold text-black" style="color: #000; font-size: 15px; position: relative; left: 172px; ">Payment Status: <b> Covered <br> by CHED Unifast(RA 10931)</b></span>
    </div>  

    <div style="position:absolute; left:500px;  width:85ch; border-radius: 10px; ">
        <span class="font-semibold text-black" style="color: #000; font-size: 20px; position: relative; left: 3%; font-weight:bold">Payment Information
            <i id="payment_info" class="far fa-question-circle">
                <div class="card" id="payment_info_tooltip" style="display: none; position: absolute; top:1px;left:220px;background-color: #CDCDCD; width:270px">
                    <span class="font-semibold text-black" style="color: #000; font-size: 18px; position: relative; left: 10px;">Please enter your payment info</span>
                  </div>
            </i>
        </span>

        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs" style="width: 50%;">
            <table>
                <tbody id="table-balance">
                </tbody>
            </table>
        </div>

        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs" style="width: 50%;">
            <table>
                <tbody id="total-balance">
                </tbody>
            </table>
        </div>

        <div class="flex flex-col gap-3 pb-6 pt-2 text-xs" style="width: 50%;">
            <table>
                <tbody id="status-balance">
                </tbody>
            </table>
        </div>
    </div>

</div>
  </div>
</section>
    <script>

const paymentInfoIcon = document.getElementById('payment_info');
  const paymentInfoTooltip = document.getElementById('payment_info_tooltip');

  paymentInfoIcon.onmouseover = function() {
    paymentInfoTooltip.style.display = 'block';
  };

  paymentInfoIcon.onmouseout = function() {
    paymentInfoTooltip.style.display = 'none';
  };


    function handleSchedClick(event) {
        // Handle the click event here
        window.location.href = '{{ route("prof_regular_schedule") }}';
        event.preventDefault(); // Prevent the default behavior of the anchor tag
    }
    function handleSERClick(event) {
        // Handle the click event here
        window.location.href = '{{ route("prof_regular_ser") }}';
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

    var tableBody5 = document.getElementById('table-balance');
    var tableData5 = [
        { current_bal: 'Current Balance', bal_amount: "5000.00" }
    ];

    var tableBody6 = document.getElementById('total-balance');
    var tableData6 = [
        { total_bal: 'Total Balance:', total_bal_amount: "22,156.00" }
    ];

    var tableBody7 = document.getElementById('status-balance');
    var tableData7 = [
        { status: '', status_amount: "" }
    ];

function updateStatusAmount() {
  if (balance > (total_amount/2) && balance != 0) {
    const linkElement = document.querySelector('a[onclick="handleSERClick(event)"]');

    linkElement.style.pointerEvents = 'none';
    linkElement.style.opacity = 0.5;
    return "Unpaid";

  } else if (balance === 0) {
    return "Fully Paid";
    
  } else if (balance <= (total_amount/2)) {
    // New condition added
    const percentagePaid = (balance / 22000) * 100;
    return `Partial`;
  }
}


// Update the balance
total_amount = 22000;
balance = Math.abs(12000 - total_amount);
// Alternatively, you could pass the balance as an argument to the function when creating the table data
tableData7.push({ status: 'Status:', status_amount: updateStatusAmount() });

    function adjustPosition(tableBody, tableData, columnPositions) {
    // Create and add tr elements for each row in the table body
    tableData.forEach(function (data) {
        var tr = document.createElement('tr');
        // Create and add td elements for each cell in the row
        Object.values(data).forEach(function (value, cellIndex) {
            var td = document.createElement('td');
            td.textContent = value;
            td.style.color = 'black'; // Set the text color to black
            td.style.fontSize = '16.2px'; // Adjust the font size as needed
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

    function adjustPositionBalance(tableBody, tableData, columnPositions) {
    // Create and add tr elements for each row in the table body
    tableData.forEach(function (data) {
        var tr = document.createElement('tr');
        // Create and add td elements for each cell in the row
        Object.values(data).forEach(function (value, cellIndex) {
            var td = document.createElement('td');
            td.textContent = value;
            td.style.color = 'black'; // Set the text color to black
            td.style.fontSize = '20px'; // Adjust the font size as needed
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
    var columnPositions1 = [
        { columnIndex: 0, leftChange: 15 },
        { columnIndex: 1, leftChange: 100 }
    ];

    function adjustPositionStatus(tableBody, tableData, columnPositions) {
    // Create and add tr elements for each row in the table body
    tableData.forEach(function (data) {
        var tr = document.createElement('tr');
        // Create and add td elements for each cell in the row
        Object.values(data).forEach(function (value, cellIndex) {
            var td = document.createElement('td');
            td.textContent = value;
            td.style.color = 'black'; // Set the text color to black
            td.style.fontSize = '20px'; // Adjust the font size as needed
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

                  // Set left position and apply bold style for cells in column index 1
      if (cellIndex === columnPositions[1].columnIndex) {
        td.style.fontWeight = 'bold';
      }
        });
        tableBody.appendChild(tr);
    });
}
    // Define an array of objects to store column index and left change
    var columnPositions2 = [
        { columnIndex: 0, leftChange: 15 },
        { columnIndex: 1, leftChange: 15 }
    ];
    // Adjust position for the specified columns
    adjustPosition(tableBody1, tableData1, columnPositions);
    adjustPosition(tableBody2, tableData2, columnPositions);
    adjustPosition(tableBody3, tableData3, columnPositions);
    adjustPosition(tableBody4, tableData4, columnPositions);

    adjustPositionBalance(tableBody5, tableData5, columnPositions1);
    adjustPositionBalance(tableBody6, tableData6, columnPositions1);
    adjustPositionStatus(tableBody7, tableData7, columnPositions2);

    </script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection