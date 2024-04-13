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
                        <th>#</th>
                        <th>Student Id</th>
                        <th>Student Name</th>
                        <th>Year Level</th>
                        <th>Date Request</th>
                        <th>Status</th>
                        <th>         </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($validations as $validation)
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>{{$validation->studentid}}</td>
                            <td>{{$validation->student_name}}</td>
                            <td>{{$validation->yearlvl}}</td>
                            <td>{{$validation->daterequest}}</td>
                            <td>
                                <select name="status" id="status" class="form-control">
                                    <option value="approved" {{ $validation->status === 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="pending" {{ $validation->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="rejected" {{ $validation->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </td>
                            <td>
                                <button onclick="openModal()">View</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <!-- Close button -->
                <span class="close" onclick="closeModal()">&times;</span>
                <!-- Modal content -->
                <p id="modalContent"></p>
            </div>
        </div>
</div>

<script>
    function openModal(studentName) {
        // Get the modal element
        var modal = document.getElementById("myModal");
        // Get the content container
        var modalContent = document.getElementById("modalContent");

        // Set the content inside the modal
        modalContent.innerHTML = "Student Name: " + studentName;

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