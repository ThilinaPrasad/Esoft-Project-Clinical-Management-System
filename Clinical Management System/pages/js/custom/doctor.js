<!-- Navigation Functions -->

// *************** UI  Scripts ****************
function viewHome(id) {
    addRemoveClass(id);
    removeSection();
    const x = document.getElementById("dashboard");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
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
    console.log(id);
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