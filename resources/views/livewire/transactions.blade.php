<!-- Child Component for the blade of transaction-options -->
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
    .active {
            background-color: #ddd;
    }
  
    html {
            background-color: #F6F6F6;
    }
    .background {
            background-color: #F6F6F6;
            margin-top: 0; /* Remove margin from top */
            padding-top: 0;
    }
    .button:hover {
        background-color: #ddd; /* Change background color on hover */
        color: black; /* Change text color on hover */
    }

    .button:active {
        background-color: #bbb; /* Change background color when clicked */
        color: black; /* Change text color when clicked */
    }
</style>
<div>
<div style="width:1536px; height:auto; background-color: #30349c; position: relative;">
            <img src="{{ asset('backend/dist/img/plmlogo.png') }}" style="width:65px; height:65px; position:absolute; top:5%; left:1%">
            <span style="color: #d4a404; position: absolute; top: 22%; left: 5.5%; font-family: Inter, sans-serif; font-size: 13px; font-weight: bold;">PAMANTASAN NG LUNGSOD NG MAYNILA</span>
            <span style="color: white; position: absolute; top: 47%; left: 5.5%; font-family: Inter, sans-serif; font-size: 13px; font-weight: bold;">UNIVERSITY OF THE CITY OF MANILA</span>
            <br><br><br>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 56.5%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Schedules</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 63.5%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Student Records</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 73.5%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Enrollment</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 80.5%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Print Forms</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 88%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Utilities</span>
            </a>
            <a href="" style="text-decoration: none;">
                <span style="color: white; position: absolute; top: 32%; left: 94%; font-family: Inter, sans-serif; font-size: 16px; font-weight: bold; cursor: pointer;">Logout<i class="fas fa-sign-out-alt" style="color: white; left:5%; position: relative;"></i></span>
            </a>
        </div>

        <div class="nav-bar">
        <div class="nav-item">
            <a href="http://localhost/enrollmentmod/chairperson/create_class" class="nav-link">Class Creation</a>
        </div>
        <div class="nav-item">
            <a href="http://localhost/enrollmentmod/chairperson/block_classes" class="nav-link">Block Management</a>
        </div>
        <div class="nav-item">
            <a href="http://localhost/enrollmentmod/chairperson/student_enlistment" class="nav-link">Student Enlistment</a>
        </div>
        <div class="nav-item page-item">
            <a href="http://localhost/enrollmentmod/chairperson/student_transaction" class="nav-link">Transactions</a>
        </div>
</div>
    
<!-- Components header -->
<div style="width: 100%; height: 10%; text-align: right; padding-right: 0px; color: black; font-size: 20px; font-family: Inter; line-height: 50px; font-weight: 200; word-wrap: break-word; position: relative;">
    <div style="display: flex; align-items: right; padding-left: 1210px; background-color: #F6F6F6;">
        <span>Home / Enrollment / Transactions</span>
    </div>
    <div style="flex-grow: 1; height: 1px; border: 1px rgba(0, 0, 0, 0.20) solid;"></div>
</div>

<!-- Main components -->

<div style="text-align: center; margin-top: 0px;" class="background">
    <div style="text-align: center; margin-top: 0px; padding-top: 20px;" class="background">
        <p style="margin-top: 0; font-family: Inter, sans-serif; font-size: 59px; font-weight: bold;" class="background">Transaction Options</p>
        <div style="display: inline-block;" class="background">
            <a href="{{ route('study_plan_validations') }}" style="text-decoration: none;">
                <button style="padding: 40px 250px; margin: 20px; display: block; border: none; font-family: Inter, sans-serif; font-size: 40px; font-weight: bold; text-align: center;" class="button">Study Plan Validations</button>
            </a>
            <a href="{{ route('logout') }}" style="text-decoration: none;">
                <button style="padding: 40px 275px; margin: 20px; display: block; border: none; font-family: Inter, sans-serif; font-size: 40px; font-weight: bold; text-align: center;" class="button">Add/Drop Requests</button>
            </a>
            <a href="{{ route('logout') }}" style="text-decoration: none;">
                <button style="padding: 40px 327px; margin: 20px; display: block; border: none; font-family: Inter, sans-serif; font-size: 40px; font-weight: bold; text-align: center;" class="button">LOA Requests</button>
            </a>
            <a href="{{ route('shifting_requests_validations') }}" style="text-decoration: none;">
                <button style="padding: 40px 293px; margin: 20px; display: block; border: none; font-family: Inter, sans-serif; font-size: 40px; font-weight: bold; text-align: center;" class="button">Shifting Requests</button>
            </a>
        </div>
    </div>
</div>

