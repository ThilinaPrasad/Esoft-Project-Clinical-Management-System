<!-- Navigation Functions -->
function viewPatient(){
    const x = document.getElementById("viewPatients");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function showResetForm() {
    const x = document.getElementById("resetForm");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}