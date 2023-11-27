
@extends('layouts.chairpersonapp')
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

        #accordion-container {
            display: flex;
        }

        .accordion-button {
            cursor: pointer;
            padding: 10px;
            border: 1px solid #ccc;
            border-right: none;
            background-color: #f1f1f1;
        }

        .accordion-content {
            display: none;
            padding: 20px;
            border: 1px solid #ccc;
            flex-grow: 1;
        }

        .active {
            background-color: #ddd;
        }
</style>
    <!-- <div class="card" style="width:13.03in; height:10ch; background-color: #2D349A; position: relative;"> -->
    
        <div style="max-width:100%; height:auto; background-color: #30349c; position: relative;">
            <img src="{{ asset('public/backend/dist/img/plmlogo.png') }}" style="width:65px; height:65px; position:absolute; top:5%; left:1%">
            <span style="color: #d4a404; position: absolute; top: 22%; left: 5.5%; font-family: Inter, sans-serif; font-size: 13px; font-weight: bold;">PAMANTASAN NG LUNGSOD NG MAYNILA</span>
            <span style="color: white; position: absolute; top: 47%; left: 5.5%; font-family: Inter, sans-serif; font-size: 13px; font-weight: bold;">UNIVERSITY OF THE CITY OF MANILA</span>
            <br><br><br>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 50%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Schedules</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 58%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Student Records</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 69%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Enrollment</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left:76%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Print Forms</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 84%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Utilities</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 90%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Logout<i class="fas fa-sign-out-alt" style="color: white; left:5%; position: relative;"></i></span>
            </a>
        </div>

        <div class="nav-bar">
        <div class="nav-item">
            <a href="" class="nav-link">Class Creation</a>
        </div>
        <div class="nav-item page-item">
            <a href="" class="nav-link">Block Management</a>
        </div>
        <div class="nav-item">
            <a href="" class="nav-link">Student Enlistment</a>
        </div>
        <div class="nav-item">
            <a href="" class="nav-link">Transaction</a>
        </div>
</div>
        


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
<div class="card" style="position:absolute; left:35%; top:1.75in; width:30%; border-radius: 10px; border: 1px solid black;">
<div id="accordion-container">
    <div class="accordion-button" onclick="toggleAccordion('content1')">Button 1</div>
    <div id="content1" class="accordion-content">
        <h2>Content for Button 1</h2>
        <p>This is the detailed content for Button 1.</p>
    </div>

    <div class="accordion-button" onclick="toggleAccordion('content2')">Button 2</div>
    <div id="content2" class="accordion-content">
        <h2>Content for Button 2</h2>
        <p>This is the detailed content for Button 2.</p>
    </div>
<!-- </div>
<div class="card" style="position:absolute; left:35%; top:1.75in; width:30%; border-radius: 10px; border: 1px solid black;">
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
  </div> -->
</section>
    <script>
     function toggleAccordion(contentId) {
        var content = document.getElementById(contentId);
        var buttons = document.querySelectorAll('.accordion-content');

        buttons.forEach(function (element) {
            element.style.display = 'none';
        });

        content.style.display = 'block';
    }
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

