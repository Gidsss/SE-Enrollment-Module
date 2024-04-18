
        window.addEventListener('close-modal', event =>{
            $('#addStudentModal2').modal('hide');
            $('#editStudentModal2').modal('hide');
            $('#deleteStudentModal2').modal('hide');
            $('#bulkEditStudentModal2').modal('hide'); 
            $('#alphabeticalEnlistmentModal2').modal('hide');
            $('#randomEnlistmentModal2').modal('hide');
            $('#blockCapacityModal2').modal('hide');
        });

        window.addEventListener('show-edit-student-modal', event =>{
            $('#editStudentModal2').modal('show');
        });

        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#deleteStudentModal2').modal('show');
        });

        window.addEventListener('show-view-student-modal', event =>{
            $('#viewStudentModal2').modal('show');
        });

        window.addEventListener('open-alphabetical-enlistment-modal', event => {
        $('#alphabeticalEnlistmentModal2').modal('show');
        });

        window.addEventListener('open-random-enlistment-modal', event => {
        $('#randomEnlistmentModal2').modal('show');
        });

        window.addEventListener('open-bulk-edit-modal', event => {
        $('#bulkEditStudentModal2').modal('show');
        });

        window.addEventListener('open-block-capacity-modal', event => {
        $('#blockCapacityModal2').modal('show');
        });

        // Function to check if the input is a number or not (for block capacity)
        function isNumeric(event) {
        const charCode = event.which ? event.which : event.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                event.preventDefault();
                return false;
            }
            return true;
            }
    