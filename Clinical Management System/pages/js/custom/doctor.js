<!-- Navigation Functions -->

// *************** UI  Scripts ****************
function viewHome(id) {
    addRemoveClass(id);
    removeSection();
    showSection("dashboard");
}

function viewPatient(id) {
    addRemoveClass(id);
    removeSection();
    //getAllPatient();
    showSection("viewPatients");
}

function viewSchedule(id) {
    addRemoveClass(id);
    removeSection();
    showSection("viewSchedule");
}

function viewAppointments(id) {
    addRemoveClass(id);
    removeSection();
    showSection("viewAppointments");
}

function addSchedules(id) {
    addRemoveClass(id);
    removeSection();
    showSection("addSchedules");
}


function showSection(section) {
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

function removeSection() {
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
function editDetails() {
    if ($("#editBtn").text() == "Edit") {
        $("#submitBtn").show();
        $(".profile-control").attr("disabled", false);
        $(".profile-control").blur();
        $(".profile-control").removeClass('details');
        $(".profile-line").removeClass("view-mode");
        $("#editBtn").text("View");
    } else {
        $("#submitBtn").hide();
        $(".profile-control").attr("disabled", true);
        $(".profile-control").focus();
        $(".profile-control").addClass('details');
        $(".profile-line").addClass("view-mode");
        $("#editBtn").text("Edit");
    }

}

function updateUser() {
    let id = $('#logged-user-id').val();
    let fname = $("#profile-fname").val();
    let sname = $("#profile-sname").val();
    let street = $("#profile-street").val();
    let zipcode = $("#profile-zipcode").val();
    let city = $("#profile-city").val();
    let country = $("#profile-country").val();
    let telephone = $("#profile-telephone").val();
    let email = $("#profile-email").val();

    /*
        console.log(id+" | "+fname+" | "+sname+" | "+" | "+street+" | "+" | "+zipcode+" | "+" | "+city+" | "+" | "+country+" | "+" | "+telephone+" | "+" | "+email+" | ");
    */

    $.post("php/userUpdate.php",
        {
            id: id,
            fname: fname,
            sname: sname,
            street: street,
            zipCode: zipcode,
            city: city,
            country: country,
            email: email,
            telephone: telephone
        },

        function (result) {
            if (result == 1) {
                $.confirm({
                    theme: 'modern',
                    icon: 'fa fa-check-circle',
                    title: 'Success!',
                    content: "Your data successfully updated!",
                    draggable: true,
                    animationBounce: 2.5,
                    type: 'green',
                    typeAnimated: true,
                    buttons: {
                        Delete: {
                            text: 'Okay',
                            btnClass: 'btn-success',
                            action: function () {
                                editDetails();
                            }
                        },

                    }
                });
            }else{
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

function deleteUser(id){
    $.confirm({
        theme: 'modern',
        icon: 'fa fa-trash-o',
        title: 'Delete!',
        content: "Do you want to delete your account?",
        draggable: true,
        animationBounce: 2.5,
        type: 'red',
        typeAnimated: true,
        buttons: {
            Delete: {
                text: 'Delete',
                btnClass: 'btn-danger',
                action: function () {
                    $.get("php/deleteUser.php?id="+id, function (data, status) {
                        if(data==1){
                            $.get("php/logout.php", function (data, status) {
                                window.location.replace('../index.php');
                            });
                        }else{
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
                text: 'cancel',
                action: function () {

                }
            }
        }
    });
}

function showPatient(id) {
    $('#patientDataModel').modal('show');
    getPatientById(id);

}

function showDiagnosis() {
    $('#patientDataModel').modal('hide');
    $('#patientDiagnosisModel').modal('show');

}

function showPreviousDiagnisis(id) {
    $('#patientDataModel').modal('hide');
    $('#previousDiagnosisModel').modal('show');

    $.get("php/getAllDiagnosis.php?patient_id="+id, function (data, status) {
        if (data != 'false') {
            data = JSON.parse(data);
            console.log(data.length);
            let temp_html = "";
            for(let i=0;i<data.length;i++){
                temp_html += '<div class="panel panel-primary">\n' +
                    '                        <div class="panel-heading" role="tab" id="pre-dignosis-head-'+i+'">\n' +
                    '                            <h4 class="panel-title">\n' +
                    '                                <a class="collapsed text-center" role="button" data-toggle="collapse"\n' +
                    '                                   data-parent="#pre-diagnosis-1" href="#pre-diagnosis-collapse-'+i+'" aria-expanded="false"\n' +
                    '                                   aria-controls="pre-diagnosis-collapse-'+i+'">\n' +
                    '                                    '+formatDate(new Date(data[i].date))+'\n' +
                    '                                </a>\n' +
                    '                            </h4>\n' +
                    '                        </div>\n' +
                    '                        <div id="pre-diagnosis-collapse-'+i+'" class="panel-collapse collapse" role="tabpanel"\n' +
                    '                             aria-labelledby="pre-diagnosis-'+i+'">\n' +
                    '                            <div class="panel-body">\n' +
                    '                                <div class="list-group">\n' +
                    '                                    <button type="button" class="list-group-item">\n' +
                    '                                        <span class="pull-left">Date & Time</span> <span class="pull-right">'+formatDate(new Date(data[i].date))+'</span>\n' +
                    '                                    </button>\n' +
                    '                                    <button type="button" class="list-group-item">\n' +
                    '                                        <span class="pull-left">Doctor</span> <span class="pull-right">'+data[i].fname+' '+data[i].sname+'</span>\n' +
                    '                                    </button>\n' +
                    '                                    <button type="button" class="list-group-item">\n' +
                    '                                        <span class="pull-left">Diagnosis description</span> <span class="pull-right">'+data[i].description+'</span>\n' +
                    '                                    </button>\n' +
                    '                                </div>\n' +
                    '\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </div>\n';

            }
            $('#pre-diagnosis-data').html(temp_html);
        }
        else{
            console.error('Error!');
        }
        });


}

// *************** UI  Scripts ****************

// ************** Data fetching scripts ***************
/*
function getAllPatient(){
    $.get("../../../php/common/getData.php?table=patient&column=&value=", function (data, status) {
        if (data != 'false') {
            let bodyHtml = '';
            data = jQuery.parseJSON(data);
            for(i=0;i<data.length;i++){
                let temp = data[i];
                let tempHtml= "<tr onclick='showPatient("+temp.id+");'>"+
                                    "<td>"+temp.fname+"</td>"+
                                    "<td>"+temp.sname+"</td>"+
                                    "<td>"+temp.gender+"</td>"+
                                    "<td>"+temp.telephone+"</td>"+
                                    "<td>"+temp.email+"</td>"+
                                    "<td>"+temp.bday+"</td>"+
                                "</tr>";
                bodyHtml+=tempHtml;
            }
            $("#viewPatients-table-body").html(bodyHtml);
        } else {
            console.log("Error");
        }
    });
}
*/

function getPatientById(id) {
    $.get("../../../php/common/getData.php?table=patient&column=id&value=" + id, function (data, status) {
        if (data != 'false') {
            let temp = jQuery.parseJSON(data);
            let splited = temp[0].bday.split("/");
            let yrs = new Date(new Date() - new Date(splited[2], splited[0], splited[1])) / 1000 / 60 / 60 / 24 / 365;
            let age_y = Math.round(yrs);
            $("#diagnosis-patient-id").val(temp[0].id);
            $("#view-patient-id").text(temp[0].id);
            $("#view-patient-name").text(temp[0].fname + " " + temp[0].sname);
            $("#diagnosis-patient-name").val(temp[0].fname + " " + temp[0].sname);
            $("#view-patient-gender").text(temp[0].gender);
            $("#diagnosis-patient-gender").val(temp[0].gender);
            $("#view-patient-bday").text(temp[0].bday + "  (" + age_y + " yrs)");
            $("#diagnosis-patient-age").val(temp[0].bday + "  (" + age_y + " yrs)");
            $("#view-patient-bloodType").text(temp[0].bloodType);
            $("#view-patient-weight").text(temp[0].weight);
            $("#view-patient-height").text(temp[0].height);
            $("#view-patient-nic").text(temp[0].nic);
            $("#view-patient-email").text(temp[0].email);
            $("#view-patient-telephone").text(temp[0].telephone);
            $("#view-patient-address").text(temp[0].street + ", " + temp[0].city + ", " + temp[0].country + ", " + temp[0].zipCode);
            $("#patient-diagnosis-description").val('');
        } else {
            console.log("Error");
        }
    });
}

function logOut() {
    $.confirm({
        theme: 'modern',
        icon: 'fa fa-sign-out',
        title: 'Logout!',
        content: "Do you want to logout?",
        draggable: true,
        animationBounce: 2.5,
        type: 'red',
        typeAnimated: true,
        buttons: {
            Delete: {
                text: 'Logout',
                btnClass: 'btn-danger',
                action: function () {
                    $.get("php/logout.php", function (data, status) {
                        window.location.replace('../index.php');
                    });
                }
            },
            later: {
                text: 'cancel',
                action: function () {

                }
            }
        }
    });
}

function addDiagnosis(){

    let patient_id = $("#diagnosis-patient-id").val();
    let doctor_id = $("#logged-user-id").val();
    let description = $("#patient-diagnosis-description").val();
    if(description.trim().length != 0) {
/*
    console.log(patient_id+" | "+doctor_id+" | "+description);
*/
    $.confirm({
        theme: 'modern',
        icon: 'fa fa-question-circle-o',
        title: 'Confirm!',
        content: "Do you want to save this diagnosis!",
        draggable: true,
        animationBounce: 2.5,
        type: 'blue',
        typeAnimated: true,
        buttons: {
            Delete: {
                text: 'Yes',
                btnClass: 'btn-primary',
                action: function () {

                        $.post("php/addDiagnosis.php",
                            {
                                patient_id: patient_id,
                                doctor_id: doctor_id,
                                description: description,
                            },

                            function (result) {
                                if (result == 1) {
                                    $.confirm({
                                        theme: 'modern',
                                        icon: 'fa fa-check-circle',
                                        title: 'Success!',
                                        content: "Diagnosis saved succssfully!",
                                        draggable: true,
                                        animationBounce: 2.5,
                                        type: 'green',
                                        typeAnimated: true,
                                        buttons: {
                                            Delete: {
                                                text: 'Okay',
                                                btnClass: 'btn-success',
                                                action: function () {
                                                    $('#patientDiagnosisModel').modal('hide');
                                                    $("#patient-diagnosis-description-error").hide();
                                                    $("#patient-diagnosis-description-error-line").removeClass('error');
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

    }else{
        $("#patient-diagnosis-description-error").show();
        $("#patient-diagnosis-description-error-line").addClass('error');
    }

}

function formatDate(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return date.getMonth()+1 + "-" + date.getDate() + "-" + date.getFullYear() + " | " + strTime;
}