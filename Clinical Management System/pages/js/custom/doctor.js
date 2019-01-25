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
    showSection("viewPatients");
}

function viewSchedule(id){
    addRemoveClass(id);
    removeSection();
    showSection("viewSchedule");
}

function viewAppointments(id){
    addRemoveClass(id);
    removeSection();
    showSection("viewAppointments");
}

function addSchedules(id){
    addRemoveClass(id);
    removeSection();
    showSection("addSchedules");
}


function showSection(section){
    const x = document.getElementById(section);
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
    if($("#editBtn").text() == "Edit"){
        $("#submitBtn").show();
        $(".profile-control").attr("disabled", false);
        $(".profile-control").blur();
        $(".profile-control").removeClass('details');
        $(".profile-line").removeClass("view-mode");
        $("#editBtn").text("View");
    }else{
        $("#submitBtn").hide();
        $(".profile-control").attr("disabled", true);
        $(".profile-control").focus();
        $(".profile-control").addClass('details');
        $(".profile-line").addClass("view-mode");
        $("#editBtn").text("Edit");
    }

}

function showPatient(id) {
    $('#patientDataModel').modal('show');
}