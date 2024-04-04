
window.addEventListener('close-modal', () =>{
    $('#editStudentModal1').modal('hide');
    $('#bulkEditStudentModal1').modal('hide'); 
});

window.addEventListener('show-edit-student-modal', event =>{
    $('#editStudentModal1').modal('show');
});

window.addEventListener('show-view-student-modal', () =>{
    $('#viewStudentModal4').modal('show');
});

window.addEventListener('open-bulk-edit-modal', event => {
$('#bulkEditStudentModal4').modal('show');
});

// add eto 
