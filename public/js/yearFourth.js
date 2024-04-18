
        window.addEventListener('close-modal', event =>{
            $('#addStudentModal3').modal('hide');
            $('#editStudentModal3').modal('hide');
            $('#deleteStudentModal3').modal('hide');
            $('#bulkEditStudentModal3').modal('hide'); 
            $('#alphabeticalEnlistmentModal3').modal('hide');
            $('#randomEnlistmentModal3').modal('hide');
            $('#blockCapacityModal3').modal('hide');
        });

        window.addEventListener('show-edit-student-modal', event =>{
            $('#editStudentModal3').modal('show');
        });

        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#deleteStudentModal3').modal('show');
        });

        window.addEventListener('show-view-student-modal', event =>{
            $('#viewStudentModal3').modal('show');
        });

        window.addEventListener('open-alphabetical-enlistment-modal', event => {
        $('#alphabeticalEnlistmentModal3').modal('show');
        });

        window.addEventListener('open-random-enlistment-modal', event => {
        $('#randomEnlistmentModal3').modal('show');
        });

        window.addEventListener('open-bulk-edit-modal', event => {
        $('#bulkEditStudentModal3').modal('show');
        });

        window.addEventListener('open-block-capacity-modal', event => {
        $('#blockCapacityModal3').modal('show');
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
    