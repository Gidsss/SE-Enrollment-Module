
window.addEventListener('close-modal', () =>{
    $('#editStudentModal2').modal('hide');
    $('#bulkEditStudentModal2').modal('hide'); 
});

window.addEventListener('show-edit-student-modal', event =>{
    $('#editStudentModal2').modal('show');
});

window.addEventListener('show-view-student-modal', () =>{
    $('#viewStudentModal2').modal('show');
});

window.addEventListener('open-bulk-edit-modal', event => {
$('#bulkEditStudentModal2').modal('show');
});

// add eto 
