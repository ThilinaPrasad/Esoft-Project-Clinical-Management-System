<!-- Navigation Functions -->

function viewHome(id){
    addRemoveClass(id);
    removeSection();
    const x = document.getElementById("dashboard");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function viewPatient(id){
    addRemoveClass(id);
    removeSection();
    const x = document.getElementById("viewPatients");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function viewSchedule(id){
    addRemoveClass(id);
    removeSection();
    const x = document.getElementById("viewSchedule");
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

function addRemoveClass(x) {
    $("#home").removeClass("active");
    $("#patient").removeClass("active");
    $("#schedule").removeClass("active");
    $("#reset").removeClass("active");
    $(x).addClass("active");
}

function removeSection(){
    const dashboard = document.getElementById("dashboard");
    const schedule = document.getElementById("viewSchedule");
    const patients = document.getElementById("viewPatients");

    dashboard.style.display = "none";
    schedule.style.display = "none";
    patients.style.display = "none";
}