
window.addEventListener('close-modal', event =>{
    $('#addStudentModal1').modal('hide');
    $('#editStudentModal1').modal('hide');
    $('#deleteStudentModal1').modal('hide');
    $('#bulkEditStudentModal1').modal('hide'); 
    $('#alphabeticalEnlistmentModal1').modal('hide');
    $('#randomEnlistmentModal1').modal('hide');
    $('#blockCapacityModal1').modal('hide');
});

window.addEventListener('show-edit-student-modal', event =>{
    $('#editStudentModal1').modal('show');
});

window.addEventListener('show-delete-confirmation-modal', event =>{
    $('#deleteStudentModal1').modal('show');
});

window.addEventListener('show-view-student-modal', event =>{
    $('#viewStudentModal1').modal('show');
});

window.addEventListener('open-alphabetical-enlistment-modal', event => {
$('#alphabeticalEnlistmentModal1').modal('show');
});

window.addEventListener('open-random-enlistment-modal', event => {
$('#randomEnlistmentModal1').modal('show');
});

window.addEventListener('open-bulk-edit-modal', event => {
$('#bulkEditStudentModal1').modal('show');
});

window.addEventListener('open-block-capacity-modal', event => {
$('#blockCapacityModal1').modal('show');
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
