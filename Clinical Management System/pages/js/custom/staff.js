$('#bday').bootstrapMaterialDatePicker({ format : 'MM/DD/YYYY' , time: false, maxDate: new Date()});
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
    const viewDoctors = document.getElementById("viewDoctors");
    const addDoctors = document.getElementById("addDoctor");

    dashboard.style.display = "none";
    schedule.style.display = "none";
    patients.style.display = "none";
    profile.style.display = "none";
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
            $("#view-doctor-id").value = id;
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
            $("#view-doctor-id").text(id);
        } else {
            console.log("Error");
        }
    });
}

let isEmailValid = false;

function confirmRegister(){
    $("#add-doctor-fname-line").removeClass("error");
    $("#add-doctor-fname-error").hide();
    $("#add-doctor-lname-line").removeClass("error");
    $("#add-doctor-lname-error").hide();
    $("#add-doctor-bday-line").removeClass("error");
    $("#add-doctor-bday-error").hide();
    $("#add-doctor-nic-line").removeClass("error");
    $("#add-doctor-nic-error").hide();
    $("#add-doctor-street-line").removeClass("error");
    $("#add-doctor-street-error").hide();
    $("#add-doctor-zipcode-line").removeClass("error");
    $("#add-doctor-zipcode-error").hide();
    $("#add-doctor-city-line").removeClass("error");
    $("#add-doctor-city-error").hide();
    $("#add-doctor-country-line").removeClass("error");
    $("#add-doctor-country-error").hide();
    $("#add-doctor-email-line").removeClass("error");
    $("#add-doctor-email-error").hide();
    $("#add-doctor-tele-line").removeClass("error");
    $("#add-doctor-tele-error").hide();
    $("#add-doctor-medLicenceNo-line").removeClass("error");
    $("#add-doctor-medLicenceNo-error").hide();
    $("#add-doctor-speciality-line").removeClass("error");
    $("#add-doctor-speciality-error").hide();
    $("#add-doctor-valid").hide();
    let isValid = true;
    if($("#firstName").val() == ''){
        $("#add-doctor-fname-line").addClass("error");
        $("#add-doctor-fname-error").show();
        this.isValid = false;
    }if($("#lastName").val() == ''){
        $("#add-doctor-lname-line").addClass("error");
        $("#add-doctor-lname-error").show();
        this.isValid = false;
    }if($("#bday").val() == ''){
        $("#add-doctor-bday-line").addClass("error");
        $("#add-doctor-bday-error").show();
        this.isValid = false;
    }if($("#nic").val() == ''){
        $("#add-doctor-nic-line").addClass("error");
        $("#add-doctor-nic-error").show();
        this.isValid = false;
    }if($("#street").val() == ''){
        $("#add-doctor-street-line").addClass("error");
        $("#add-doctor-street-error").show();
        this.isValid = false;
    }if($("#ZipCode").val() == ''){
        $("#add-doctor-zipcode-line").addClass("error");
        $("#add-doctor-zipcode-error").show();
        this.isValid = false;
    }if($("#city").val() == ''){
        $("#add-doctor-city-line").addClass("error");
        $("#add-doctor-city-error").show();
        this.isValid = false;
    }if($("#country").val() == ''){
        $("#add-doctor-country-line").addClass("error");
        $("#add-doctor-country-error").show();
        this.isValid = false;
    }if($("#email").val() == ''){
        $("#add-doctor-email-line").addClass("error");
        $("#add-doctor-email-error").show();
        this.isValid = false;
    }if($("#tele").val() == ''){
        $("#add-doctor-tele-line").addClass("error");
        $("#add-doctor-tele-error").show();
        this.isValid = false;
    }if($("#licence").val() == ''){
        $("#add-doctor-medLicenceNo-line").addClass("error");
        $("#add-doctor-medLicenceNo-error").show();
        this.isValid = false;
    }if($("#speciality").val() == ''){
        $("#add-doctor-speciality-line").addClass("error");
        $("#add-doctor-speciality-error").show();
        this.isValid = false;
    }
    if(isValid && isEmailValid) {
        console.log("Valid");
        let firstName = $("#firstName").val();
        let lastName = $("#lastName").val();
        let gender = $("input[name='gender']:checked").val();
        let bday = $("#bday").val();
        let nic = $("#nic").val();
        let street = $("#street").val();
        let zipCode = $("#ZipCode").val();
        let city = $("#city").val();
        let country = $("#country").val();
        let email = $("#email").val();
        let tel = $("#tele").val();
        let medLicenceNo = $("#licence").val();
        let speciality = $("#speciality").val();

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

                        $.post("php/doctorRegistration.php",
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

                                medLicenceNo: medLicenceNo,
                                speciality: speciality,

                                password: "doctor@kenway",

                            },

                            function (result) {
                                if (result == 1) {
                                    $.confirm({
                                        theme: 'modern',
                                        icon: 'fa fa-check-circle',
                                        title: 'Success!',
                                        content: "<p>Record added succssfully!<br> Temporary pass: <b> doctor@kenway</b></p>",
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
        $("#add-doctor-valid").show();
    }
}

// email validations
function emailValidation(email) {
    $.get("../php/common/getData.php?table=user&column=email&value=" + email, function (data, status) {
        if (data != 'false') {
            isEmailValid = false;
            $("#add-doctor-email-line").addClass("error");
            $("#add-doctor-email-error").text("Email already exists!");
            $("#add-doctor-email-error").show();
        } else {
            isEmailValid = true;
            $("#add-doctor-email-line").removeClass("error");
            $("#add-doctor-email-error").hide();
        }
    });
}

function deleteOther(id, type){

    $.confirm({
        theme: 'modern',
        icon: 'fa fa-trash-o',
        title: 'Delete!',
        content: "Do you want to delete this record?",
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
                            $.confirm({
                                theme: 'modern',
                                icon: 'fa fa-check-circle',
                                title: 'Success !',
                                content: "Successfully deleted this record!",
                                draggable: true,
                                animationBounce: 2.5,
                                type: 'green',
                                typeAnimated: true,
                                buttons: {
                                    Delete: {
                                        text: 'Done',
                                        btnClass: 'btn-success',
                                        action: function () {
                                            $('#'+type+'-row-'+id).hide();
                                            $("#patientDataModel").modal('hide');
                                            $("#doctorDataModel").modal('hide');
                                        }
                                    }
                                }
                            });
                            // $.get("php/logout.php", function (data, status) {
                            //     window.location.replace('../index.php');
                            // });
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