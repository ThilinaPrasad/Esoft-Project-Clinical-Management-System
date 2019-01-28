function addDoctors(id){
    addRemoveClass(id);
    removeSection();
    showSection("addDoctor");
}

function viewDoctors(id){
    addRemoveClass(id);
    removeSection();
    showSection("viewDoctors");
}

function addRemoveClass(x) {
    $("#home").removeClass("active");
    $("#patient").removeClass("active");
    $("#schedule").removeClass("active");
    $("#doctor").removeClass("active");
    $(x).addClass("active");
}

function removeSection(){
    const dashboard = document.getElementById("dashboard");
    const schedule = document.getElementById("viewSchedule");
    const patients = document.getElementById("viewPatients");
    const profile = document.getElementById("profile");
    const appoinmnet = document.getElementById("viewAppointments");
    const viewDoctors = document.getElementById("viewDoctors");
    const addDoctors = document.getElementById("addDoctor");

    dashboard.style.display = "none";
    schedule.style.display = "none";
    patients.style.display = "none";
    profile.style.display = "none";
    appoinmnet.style.display = "none";
    viewDoctors.style.display = "none";
    addDoctors.style.display = "none";

}

function showSection(section){
    const x = document.getElementById(section);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function tabShift(id){
    $("#personal_tab_ind").removeClass("active");
    $("#contact_tab_ind").removeClass("active");
    $("#professional_tab_ind").removeClass("active");
    $(id+"_tab_ind").addClass("active");
}

function showDoctor(id) {
    $('#doctorDataModel').modal('show');
    getDoctorById(id);
}

function getDoctorById(id){
    $.get("../../../php/common/getData.php?table=doctor&column=id&value="+id, function (data, status) {
        if (data != 'false') {
            let temp = jQuery.parseJSON(data);
            let splited = temp[0].bday.split("/");
            let yrs = new Date(new Date() - new Date(splited[2],splited[0],splited[1]))/1000/60/60/24/365;
            let age_y = Math.round(yrs);
            $("#view-doctor-name").text(temp[0].fname+" "+temp[0].sname);
            $("#view-doctor-gender").text(temp[0].gender);
            $("#view-doctor-bday").text(temp[0].bday +"  ("+age_y+" yrs)");
            $("#view-doctor-medLicenceNo").text(temp[0].medLicenceNo);
            $("#view-doctor-speciality").text(temp[0].speciality);
            $("#view-doctor-email").text(temp[0].email);
            $("#view-doctor-nic").text(temp[0].nic);
            $("#view-doctor-telephone").text(temp[0].telephone);
            $("#view-doctor-address").text(temp[0].street+", "+temp[0].city+", "+temp[0].country+", "+temp[0].zipCode);
        } else {
            console.log("Error");
        }
    });
}

function validateFirstForm(){
    let isValid = false;
    if($('#firstName').text() == ''){
        $('#fName-input-error').text("Required Field");
        this.isValid = false;
    }if($('#lastName').text() == ''){
        $('#lName-input-error').text("Required Field");
        this.isValid = false;
    }

    if(this.isValid == true){
        $("#contact_tab_ind").addClass("active");
        $("#contact").show();
    }

}