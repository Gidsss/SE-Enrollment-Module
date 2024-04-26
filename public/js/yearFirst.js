
window.addEventListener('close-modal', event => {
    $('#addStudentModal').modal('hide');
    $('#editStudentModal').modal('hide');
    $('#deleteStudentModal').modal('hide');
    $('#bulkEditStudentModal').modal('hide');
    $('#alphabeticalEnlistmentModal').modal('hide');
    $('#randomEnlistmentModal').modal('hide');
    $('#blockCapacityModal').modal('hide');
});

window.addEventListener('show-edit-student-modal', event => {
    $('#editStudentModal').modal('show');
});

window.addEventListener('show-delete-confirmation-modal', event => {
    $('#deleteStudentModal').modal('show');
});

window.addEventListener('show-view-student-modal', event => {
    $('#viewStudentModal').modal('show');
});

window.addEventListener('open-alphabetical-enlistment-modal', event => {
    $('#alphabeticalEnlistmentModal').modal('show');
});

window.addEventListener('open-random-enlistment-modal', event => {
    $('#randomEnlistmentModal').modal('show');
});

window.addEventListener('open-bulk-edit-modal', event => {
    $('#bulkEditStudentModal').modal('show');
});

window.addEventListener('open-block-capacity-modal', event => {
    $('#blockCapacityModal').modal('show');
});

document.addEventListener("DOMContentLoaded", function () {
    var dropdownButton = document.getElementById("dropdownMenuButton");
    var dropdownMenu = dropdownButton.nextElementSibling;

    dropdownButton.addEventListener("click", function () {
        if (dropdownMenu.style.display === "none" || dropdownMenu.style.display === "") {
            dropdownMenu.style.display = "block";
        } else {
            dropdownMenu.style.display = "none";
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = "none";
        }
    });
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