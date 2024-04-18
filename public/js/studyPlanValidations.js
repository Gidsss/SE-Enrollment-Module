
window.addEventListener('close-modal', () =>{
    $('#editStudentModal').modal('hide');
    $('#bulkEditStudentModal').modal('hide'); 
});

window.addEventListener('show-edit-student-modal', event =>{
    $('#editStudentModal').modal('show');
});

window.addEventListener('show-view-student-modal', () =>{
    $('#viewStudentModal').modal('show');
});

window.addEventListener('open-bulk-edit-modal', event => {
$('#bulkEditStudentModal').modal('show');
});

