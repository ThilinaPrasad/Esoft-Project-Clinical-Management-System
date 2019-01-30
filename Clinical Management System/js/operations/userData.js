// Validations
let isEmailValid = false;
let isPassValid = false;

// email validations
function email(email, id) {
    $.get("../../php/common/getData.php?table=patient&column=email&value=" + email, function (data, status) {
        if (data != 'false') {
            isEmailValid = false;
            errorToggle(id, "Email already exits!", true);
        } else {
            isEmailValid = true;
            errorToggle(id, "Looks Good!", false);
        }
    });
}

// Password validation
function cmf_password(id) {
    if ($('#cmf-password-input').val()) {
        if ($('#cmf-password-input').val() != $("#password-input").val()) {
            isPassValid = false;
            errorToggle(id, "Password mismatched!", true);
        } else {
            isPassValid = true;
            errorToggle(id, "Looks Good!", false);
        }
    }
}

// Error display function
function errorToggle(id, text_input, isError) {
    var element = $(id);
    var input_element = $(id + "-input");
    var err_element = $(id + "-input-error");
    if (isError) {
        err_element.text(text_input);
        err_element.show();
        input_element.removeClass('input-type-1');
        input_element.addClass('input-type-1-error');
        element.removeClass('bg-color-type-1 border-type-1');
        element.addClass("bg-color-type-1-error border-type-1-error");
    } else {
        err_element.hide();
        input_element.removeClass('input-type-1-error');
        input_element.addClass('input-type-1');
        element.removeClass('bg-color-type-1-error border-type-1-error');
        element.addClass("bg-color-type-1 border-type-1");

    }
}

// add user
function reg_user() {
    if (isEmailValid && isPassValid) {
        $("#register-btn").removeClass("btn-type-1-error");
        $("#register-btn").addClass("btn-type-1");
        $("#register-btn-input-error").hide();
        $('#final-button-section').fadeOut('fast', 'linear', function () {
            $('#register-spinner').fadeIn();
        });

        var fname = $('#fname-input').val();
        var sname = $('#sname-input').val();
        var gender =  $("input[name='gender']:checked").val();
        var bday = $('#birthday').val();
        var nic = $('#nic-input').val();
        var street = $('#street-address-input').val();
        var zipCode = $('#zipcode-input').val();
        var city = $('#city-input').val();
        var country = $('#country-input').val();
        var email = $('#email-input').val();
        var telephone = $('#telephone-input').val();

        var bloodType = $( "#blood-type" ).val();
        var weight = $( "#weight-input" ).val();
        var height = $( "#height-input" ).val();

        var password = $('#password-input').val();

        /*console.log(fname+" | "+sname+" | "+gender+" | "+bday+" | "+nic+" | "+street+" | "+zipCode+" | "+city+" | "+country+" | "+email+" | "+telephone+" | "+
        bloodType+" | "+weight+" | "+height+" | "+password);*/

        $.post("../../php/users/patientRegistration.php",
            {
                fname: fname,
                sname: sname,
                gender: gender,
                bday:bday,
                nic: nic,
                street: street,
                zipCode: zipCode,
                city: city,
                country: country,
                email: email,
                telephone: telephone,

                bloodType: bloodType,
                weight: weight,
                height: height,

                password: password,
            },

            function (result) {
                if (result == 1) {
                        $.confirm({
                            theme: 'modern',
                            icon: 'fa fa-check-circle',
                            title: 'Registration done!',
                            content: "Please login your account with credentials!",
                            draggable: true,
                            animationBounce: 2.5,
                            type: 'green',
                            typeAnimated: true,
                            buttons: {
                                Delete: {
                                    text: 'Login',
                                    btnClass: 'btn-success',
                                    action: function () {
                                        $('#register-model').modal('hide');
                                        $('#login-model').modal('show');
                                        $('#register-spinner').hide();
                                            $('#final-button-section').show();
                                    }
                                },
                                later: {
                                    text: 'Later',
                                    action: function () {
                                        $('#register-model').modal('hide');
                                        $('#register-spinner').hide();
                                        $('#final-button-section').show();
                                    }
                                }
                            }
                        });
                    // ************************** redirect to dashboard here ***************************
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
                                action: function () {
                                    $('#register-spinner').fadeOut('fast', 'linear', function () {
                                        $('#final-button-section').fadeIn();
                                    });
                                }
                            }
                        }
                    });
                }
            });

    } else {
        $("#register-btn-input-error").show();
        $("#register-btn").removeClass("btn-type-1");
        $("#register-btn").addClass("btn-type-1-error");
    }

}

function loginUser() {
    let email = $("#login-email").val();
    let password = $("#login-password").val();

    $.get("../../php/users/login.php/?email="+email+"&password="+password, function (data, status) {

        if (data.length!=0 && data != 'false') {
            $("#invalid-cred-error").hide();
            let responseData = JSON.parse(data);
            switch(parseInt(responseData.type)) {
                case 1:
                    window.location.replace("/pages/patient.php");
                    break;
                case 2:
                    window.location.replace("/pages/doctor.php");
                    break;
                case 3:
                    window.location.replace("/pages/staff.php");
                    break;
                case 4:
                    window.location.replace("/pages/admin.php");
                    break;
                default:
                    window.location.replace("index.php");
            }
        }
        else {
            $("#invalid-cred-error").show();
        }
    });
}