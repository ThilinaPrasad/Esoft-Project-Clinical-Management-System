$('#staff-bday').bootstrapMaterialDatePicker({ format : 'MM/DD/YYYY' , time: false, maxDate: new Date()});
function addStaff(id){
    addRemoveClass(id);
    removeSection();
    showSection("addStaff");
}

function viewStaff(id){
    addRemoveClass(id);
    removeSection();
    showSection("viewStaff");
}

function addRemoveClass(x) {
    $("#home").removeClass("active");
    $("#patient").removeClass("active");
    $("#schedule").removeClass("active");
    $("#doctor").removeClass("active");
    $("#staff").removeClass("active");
    $(x).addClass("active");
}

function removeSection(){
    const dashboard = document.getElementById("dashboard");
    const schedule = document.getElementById("viewSchedule");
    const patients = document.getElementById("viewPatients");
    const profile = document.getElementById("profile");
    const viewDoctors = document.getElementById("viewDoctors");
    const addDoctors = document.getElementById("addDoctor");
    const addStaff = document.getElementById("addStaff");

    dashboard.style.display = "none";
    schedule.style.display = "none";
    patients.style.display = "none";
    profile.style.display = "none";
    viewDoctors.style.display = "none";
    addDoctors.style.display = "none";
    addStaff.style.display = "none";

}

function tabShift(id){
    $("#staff-personal_tab_ind").removeClass("active");
    $("#staff-contact_tab_ind").removeClass("active");
    $(id+"_tab_ind").addClass("active");
}

// email validations
function emailValidation(email) {
    $.get("../php/common/getData.php?table=user&column=email&value=" + email, function (data, status) {
        if (data != 'false') {
            isEmailValid = false;
            $("#add-staff-email-line").addClass("error");
            $("#add-staff-email-error").text("Email already exists!");
            $("#add-staff-email-error").show();
        } else {
            isEmailValid = true;
            $("#add-staff-email-line").removeClass("error");
            $("#add-staff-email-error").hide();
        }
    });
}

function confirmRegisterStaff(){
    $("#add-staff-fname-line").removeClass("error");
    $("#add-staff-fname-error").hide();
    $("#add-staff-lname-line").removeClass("error");
    $("#add-staff-lname-error").hide();
    $("#add-staff-bday-line").removeClass("error");
    $("#add-staff-bday-error").hide();
    $("#add-staff-nic-line").removeClass("error");
    $("#add-staff-nic-error").hide();
    $("#add-staff-street-line").removeClass("error");
    $("#add-staff-street-error").hide();
    $("#add-staff-zipcode-line").removeClass("error");
    $("#add-staff-zipcode-error").hide();
    $("#add-staff-city-line").removeClass("error");
    $("#add-staff-city-error").hide();
    $("#add-staff-country-line").removeClass("error");
    $("#add-staff-country-error").hide();
    $("#add-staff-email-line").removeClass("error");
    $("#add-staff-email-error").hide();
    $("#add-staff-tele-line").removeClass("error");
    $("#add-staff-tele-error").hide();

    $("#add-staff-valid").hide();
    let staffIsValid = true;
    if($("#staff-firstName").val() == ''){
        $("#add-staff-fname-line").addClass("error");
        $("#add-staff-fname-error").show();
        staffIsValid = false;
    }if($("#staff-lastName").val() == ''){
        $("#add-staff-lname-line").addClass("error");
        $("#add-staff-lname-error").show();
        staffIsValid = false;
    }if($("#staff-bday").val() == ''){
        $("#add-staff-bday-line").addClass("error");
        $("#add-staff-bday-error").show();
        staffIsValid = false;
    }if($("#staff-nic").val() == ''){
        $("#add-staff-nic-line").addClass("error");
        $("#add-staff-nic-error").show();
        staffIsValid = false;
    }if($("#staff-street").val() == ''){
        $("#add-staff-street-line").addClass("error");
        $("#add-staff-street-error").show();
        staffIsValid = false;
    }if($("#staff-ZipCode").val() == ''){
        $("#add-staff-zipcode-line").addClass("error");
        $("#add-staff-zipcode-error").show();
        staffIsValid = false;
    }if($("#staff-city").val() == ''){
        $("#add-staff-city-line").addClass("error");
        $("#add-staff-city-error").show();
        staffIsValid = false;
    }if($("#staff-country").val() == ''){
        $("#add-staff-country-line").addClass("error");
        $("#add-staff-country-error").show();
        staffIsValid = false;
    }if($("#staff-email").val() == ''){
        $("#add-staff-email-line").addClass("error");
        $("#add-staff-email-error").show();
        staffIsValid = false;
    }if($("#staff-tele").val() == '') {
        $("#add-staff-tele-line").addClass("error");
        $("#add-staff-tele-error").show();
        staffIsValid = false;
    }
    if(staffIsValid && isEmailValid) {
        console.log("Valid");
        let firstName = $("#staff-firstName").val();
        let lastName = $("#staff-lastName").val();
        let gender = $("input[name='staff-gender']:checked").val();
        let bday = $("#staff-bday").val();
        let nic = $("#staff-nic").val();
        let street = $("#staff-street").val();
        let zipCode = $("#staff-ZipCode").val();
        let city = $("#staff-city").val();
        let country = $("#staff-country").val();
        let email = $("#staff-email").val();
        let tel = $("#staff-tele").val();

        $.confirm({
            theme: 'modern',
            icon: 'fa fa-question-circle-o',
            title: 'Confirm!',
            content: "Do you want to add this record!",
            draggable: true,
            animationBounce: 2.5,
            type: 'blue',
            typeAnimated: true,
            buttons: {
                Delete: {
                    text: 'Yes',
                    btnClass: 'btn-primary',
                    action: function () {

                        $.post("php/staffRegistration.php",
                            {
                                fName: firstName,
                                sName: lastName,
                                gender: gender,
                                bday:bday,
                                nic: nic,
                                street: street,
                                zipCode: zipCode,
                                city: city,
                                country: country,
                                email: email,
                                telephone: tel,

                                password: "staff@kenway",

                            },

                            function (result) {
                                if (result == 1) {
                                    $.confirm({
                                        theme: 'modern',
                                        icon: 'fa fa-check-circle',
                                        title: 'Success!',
                                        content: "<p>Record added succssfully!<br> Temporary pass: <b> staff@kenway</b></p>",
                                        draggable: true,
                                        animationBounce: 2.5,
                                        type: 'green',
                                        typeAnimated: true,
                                        buttons: {
                                            Delete: {
                                                text: 'Okay',
                                                btnClass: 'btn-success',
                                                action: function () {

                                                }
                                            },

                                        }
                                    });
                                } else {
                                    $.confirm({
                                        theme: 'modern',
                                        icon: 'fa fa-exclamation-circle',
                                        title: 'Error !',
                                        content: "Error happened. Please try again!",
                                        draggable: true,
                                        animationBounce: 2.5,
                                        type: 'red',
                                        typeAnimated: true,
                                        buttons: {
                                            Delete: {
                                                text: 'Try Again',
                                                btnClass: 'btn-danger',
                                            }
                                        }
                                    });
                                }
                            });

                    }
                },
                later: {
                    text: 'No',
                    action: function () {

                    }
                }
            }
        });
    }
    else{
        $("#add-staff-valid").show();
    }
}

function viewScheduleAdmin(id) {
    addRemoveClass(id);
    removeSection();
    showSection("viewSchedule");
    getAllSchedules();
    console.log("AAA");
}
function getAllSchedules() {
    let temp_html = '';
    $.get("php/getAllSchedules.php", function (data, status) {
        if (data != 'false') {
            data = JSON.parse(data);
            let currentTime = new Date();
            for (let i = 0; i < data.length; i++) {
                let temp = data[i];
                let start = new Date(temp.start_date + ' ' + temp.start_time);
                let end = new Date(temp.end_date + ' ' + temp.end_time);
                let scheduleStatus = '<span class="label label-info">Upcoming</span>';
                if (start > currentTime) {
                    scheduleStatus = '<span class="label label-info">Upcoming</span>';
                } else if (start <= currentTime && end >= currentTime) {
                    scheduleStatus = '<span class="label label-success">Ongoing&nbsp;</span>';
                } else if (end < currentTime) {
                    scheduleStatus = '<span class="label label-warning">&nbsp;Passed&nbsp;</span>';
                }
                    temp_html += '<tr class="schedule-row" onclick="viewScheduleModal(' + temp.schedule_id + ')">' +
                        '<td>' + temp.fname + ' ' + temp.sname + '</td>' +
                        '<td>' + temp.start_date + '</td>' +
                        '<td>' + temp.start_time + '</td>' +
                        '<td>' + temp.end_date + '</td>' +
                        '<td>' + temp.end_time + '</td>' +
                        '<td >' + scheduleStatus + '</td>' +
                        '<td >' + temp.appointments + '</td>' +
                        '<td>' + formatDate(new Date(temp.createdDate)) + '</td>' +
                        '</tr>';

            }
        } else {
            temp_html += '<tr class="schedule-row text-center">No schedules found</tr>';
        }
        $("#view-schedule-body").html(temp_html);
    });
}


function search() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("scheduleTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
