// Validations
let isEmailValid = false;
let isPassValid = false;

// email validations
function email(email, id) {
    $.get("../../php/users/getUsers.php?column=email&data=" + email, function (data, status) {
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
        $('#register-btn').fadeOut('fast', 'linear', function () {
            $('#register-spinner').fadeIn();
        });

        var type =  $("input[name='user-type']:checked").val();
        var name = $('#name-input').val();
        var age = $('#age-input').val();
        var email = $('#email-input').val();
        var telephone = $('#telephone-input').val();
        var address = $('#address-input').val();
        var password = $('#password-input').val();
        var gender =  $("input[name='gender']:checked").val();


        $.post("../../php/users/userRegistration.php",
            {
                name: name,
                age: age,
                gender: gender,
                email: email,
                telephone: telephone,
                address: address,
                password: password,
                role: type
            },

            function (result) {
                if (result == 1) {
                    if(type == 2){
                        $.confirm({
                            theme: 'modern',
                            icon: 'fa fa-check-circle',
                            title: 'Registration done!',
                            content: "Your data send for system admin of <b>Kenway medicals (pvt) Ltd</b>. <br>After they reviewed your data you can use the system.",
                            draggable: true,
                            animationBounce: 2.5,
                            type: 'green',
                            typeAnimated: true,
                            buttons: {
                                Delete: {
                                    text: 'Done',
                                    btnClass: 'btn-success',
                                    action: function () {
                                        $('#register-model').modal('hide');
                                    }
                                }
                            }
                        });
                    }else{
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
                                            $('#register-btn').show();
                                    }
                                },
                                later: {
                                    text: 'Later',
                                    action: function () {
                                        $('#register-model').modal('hide');
                                        $('#register-spinner').hide();
                                        $('#register-btn').show();
                                    }
                                }
                            }
                        });

                    }
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
                                        $('#register-btn').fadeIn();
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