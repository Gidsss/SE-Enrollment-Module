
window.addEventListener('close-modal', () =>{
    $('#editStudentModal4').modal('hide');
    $('#bulkEditStudentModal4').modal('hide'); 
});

window.addEventListener('show-edit-student-modal', event =>{
    $('#editStudentModal4').modal('show');
});

window.addEventListener('show-view-student-modal', () =>{
    $('#viewStudentModal4').modal('show');
});

window.addEventListener('open-bulk-edit-modal', event => {
$('#bulkEditStudentModal4').modal('show');
});

