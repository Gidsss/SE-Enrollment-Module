 <!-- Content Wrapper. Contains page content -->
 <style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 9999; /* Sit on top */
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100ch; /* Adjust width as needed */
        height: 50ch; /* Adjust height as needed */
        background-color: white; 
        border: 1px solid #000;
        padding: 20px;
    }

    span.close {
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 28px;
        color: #000;
        cursor: pointer;
    }
    
 </style>
 <div>
    <div class="card">
        <!-- /.card-header -->
            <table id="example1" class="table " style="background-color: white; width:125ch">
                <thead style="background-color: #f8f8f8">
                    <tr>
                        <th>Student Name</th>
                        <th>Course</th>
                        <th>Grade</th>
                        <th>Section</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studyplans as $studyplan)
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>{{$studyplan->studentname}}</td>
                            <td>{{$studyplan->course}}</td>
                            <td>{{$studyplan->grade}}</td>
                            <td>{{$studyplan->section}}</td>
                            <td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <!-- Modal content -->
            <div id="modalContent" style="position: absolute; top: 15%; left: 5%;">
                <strong id="studentName" style="font-size: 25px;"></strong>
                <br>
                <strong id="studentID"></strong>
                <br><br>
                <strong id="studentProgram"></strong>
                <strong id="studentYearLvl" style="position: absolute; left:30ch; width:15ch"></strong>
            </div>
        </div>
</div>

<script>
    function openModal(studentName, studentID, studentProgram, studentYearLvl) {
        // Get the modal element
        var modal = document.getElementById("myModal");
        // Get the student name element
        var studentNameElement = document.getElementById("studentname");
        var studentIDElement = document.getElementById("course");
        var studentProgramElement = document.getElementById("grade");
        var studentYearLvlElement = document.getElementById("section");
        // Set the student name
        studentNameElement.innerText = studentName;
        studentIDElement.innerText = studentID;
        studentProgramElement.innerText = "Program: " + studentProgram;
        studentYearLvlElement.innerText = "Year Level: " + studentYearLvl;

        // Display the modal
        modal.style.display = "block";
    }

    function closeModal() {
        // Get the modal element
        var modal = document.getElementById("myModal");

        // Hide the modal
        modal.style.display = "none";
    }

</script>

<!-- jQuery -->
<script src="{{ url('public/backend/plugins/jquery/jquery.min.js') }}"></script>
