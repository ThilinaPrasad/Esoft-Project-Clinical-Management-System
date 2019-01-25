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

function viewAppointments(id){
    addRemoveClass(id);
    removeSection();
    const x = document.getElementById("viewAppointments");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function addSchedules(id){
    addRemoveClass(id);
    removeSection();
    const x = document.getElementById("addSchedules");
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
    $(x).addClass("active");
}

function removeSection(){
    const dashboard = document.getElementById("dashboard");
    const schedule = document.getElementById("viewSchedule");
    const patients = document.getElementById("viewPatients");
    const profile = document.getElementById("profile");
    const appoinmnet = document.getElementById("viewAppointments");
    const addSchedule = document.getElementById("addSchedules");

    dashboard.style.display = "none";
    schedule.style.display = "none";
    patients.style.display = "none";
    profile.style.display = "none";
    appoinmnet.style.display = "none";
    addSchedule.style.display = "none";

}

function viewProfile() {
    $("#home").removeClass("active");
    $("#patient").removeClass("active");
    $("#schedule").removeClass("active");
    removeSection();
    const x = document.getElementById("profile");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
/**/
function editDetails(){
    $("#submitBtn").show();
    $(".details").attr("disabled", false);
    $(".details").blur();
    $(".details").removeClass('details');
    $(".view-mode").removeClass("view-mode");
}

function showPatient(id) {
    $('#patientDataModel').modal('show');
}