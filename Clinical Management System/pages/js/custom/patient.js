//************* Formating Date pickers ******************//
$('#schedule_start_date').bootstrapMaterialDatePicker({format: 'MM/DD/YYYY', time: false, minDate: new Date()});
$('#schedule_start_time').bootstrapMaterialDatePicker({format: 'HH:mm', date: false, minDate: new Date()});
$('#schedule_end_date').bootstrapMaterialDatePicker({format: 'MM/DD/YYYY', time: false, minDate: new Date()});
$('#schedule_end_time').bootstrapMaterialDatePicker({format: 'HH:mm', date: false, minDate: new Date()});
//************* Formating Date pickers ******************//

<!-- Navigation Functions -->

// *************** UI  Scripts ****************
function viewHome(id) {
    addRemoveClass(id);
    removeSection();
    showSection("dashboard");
}

function viewSchedule(id) {
    addRemoveClass(id);
    removeSection();
    showSection("viewSchedule");
    getAllSchedules();
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
    $("#schedule").removeClass("active");
    $(x).addClass("active");
}

function removeSection() {
    const dashboard = document.getElementById("dashboard");
    const schedule = document.getElementById("viewSchedule");
    const profile = document.getElementById("profile");

    dashboard.style.display = "none";
    schedule.style.display = "none";
    profile.style.display = "none";
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

function deleteUser(id) {
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
                    $.get("php/deleteUser.php?id=" + id, function (data, status) {
                        if (data == 1) {
                            $.get("php/logout.php", function (data, status) {
                                window.location.replace('../index.php');
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
                text: 'cancel',
                action: function () {

                }
            }
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
            $("#view-patient-id").text(id);  //get patient id from modal to delete the record
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

function formatDate(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0' + minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return date.getMonth() + 1 + "/" + date.getDate() + "/" + date.getFullYear() + " | " + strTime;
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
                let status = '';
                if (start>currentTime){
                    scheduleStatus = '<span class="label label-info">Upcoming</span>';
                    status = "Upcoming";
                }
                else if(start<=currentTime && end>=currentTime){
                    scheduleStatus = '<span class="label label-success">Ongoing&nbsp;</span>';
                    status = "Ongoing";
                }
                if(status==="Upcoming" || status==="Ongoing"){
                    temp_html += '<tr class="schedule-row">' +
                        '<td>' + temp.fname + ' ' + temp.sname + '</td>' +
                        '<td>' + temp.start_date + '</td>' +
                        '<td>' + temp.start_time + '</td>' +
                        '<td>' + temp.end_date + '</td>' +
                        '<td>' + temp.end_time + '</td>' +
                        '<td >' + scheduleStatus + '</td>' +
                        '<td>' + temp.appointments + '</td>' +
                        '<td><button onclick="makeAppointment('+temp.schedule_id+','+temp.appointments+')" class="bg-teal btn-xs waves-effect"> ' +
                        ' <i class="material-icons">verified_user</i></button></td>' +
                        '</tr>';
                }
            }
        } else {
            temp_html += '<tr class="schedule-row text-center">No schedules found</tr>';
        }
        $("#view-schedule-body").html(temp_html);
    });
}

function makeAppointment(schedule_id, appointments){
    let patient_id = $("#logged-user-id").val();
    console.log(patient_id);
    $.get("php/getScheduleCount.php?schedule_id=" + schedule_id + "&patient_id=" + patient_id , function (data, status) {
        if (data != 'false') {
            data = JSON.parse(data);
            if(data[0].schedule_count<appointments){
                $.post("php/makeAppointment.php",
                    {
                        app_no: data[0].schedule_count + 1,
                        schedule_id: schedule_id,
                        patient_id: patient_id,
                    },
                    function (result) {
                        console.log(result);
                        if (result == true) {
                            $.confirm({
                                theme: 'modern',
                                icon: 'fa fa-trash-o',
                                title: 'Appointment!',
                                content: "Do you want to make an appointment?",
                                draggable: true,
                                animationBounce: 2.5,
                                type: 'green',
                                typeAnimated: true,
                                buttons: {
                                    Delete: {
                                        text: 'Delete',
                                        btnClass: 'btn-success',
                                        action: function () {
                                        }
                                    },
                                    later: {
                                        text: 'cancel',
                                        action: function () {

                                        }
                                    }
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
            }else{
                $.confirm({
                    theme: 'modern',
                    icon: 'fa fa-exclamation-circle',
                    title: 'Error !',
                    content: "Appointments are full",
                    draggable: true,
                    animationBounce: 2.5,
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                        Delete: {
                            text: 'Ok',
                            btnClass: 'btn-danger',
                        }
                    }
                });
            }
        } else {
        }
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