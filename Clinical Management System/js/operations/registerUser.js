// Validations
let isEmailValid = false;
let isPassValid = false;

// email validations
function email(email,id) {
    $.get("../../php/patients/getPatients.php?column=email&data="+email, function(data, status){
        if(data != 'false'){
            isEmailValid = false;
            errorToggle(id,"Email already exits!",true);
        }else{
            isEmailValid = true;
            errorToggle(id,"Looks Good!",false);
        }
    });
}

// Password validation
function cmf_password(id) {
    if($('#cmf-password-input').val()) {
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
function errorToggle(id,text_input,isError){
    var element = $(id);
    var input_element = $(id+"-input");
    var err_element = $(id+"-input-error");
    if(isError){
        err_element.text(text_input);
        err_element.show();
        input_element.removeClass('input-type-1');
        input_element.addClass('input-type-1-error');
        element.removeClass('bg-color-type-1 border-type-1');
        element.addClass("bg-color-type-1-error border-type-1-error");
    }else {
        err_element.hide();
        input_element.removeClass('input-type-1-error');
        input_element.addClass('input-type-1');
        element.removeClass('bg-color-type-1-error border-type-1-error');
        element.addClass("bg-color-type-1 border-type-1");

    }
}

// add user
function reg_user(){
    if(isEmailValid && isPassValid) {
        $("#register-btn").removeClass("btn-type-1-error");
        $("#register-btn").addClass("btn-type-1");
        $("#register-btn-input-error").hide();
        $('#register-btn').fadeOut('fast','linear',function(){
            $('#register-spinner').fadeIn();
        });

        var name = $('#name-input').val();
        var age = $('#age-input').val();
        var email = $('#email-input').val();
        var telephone = $('#telephone-input').val();
        var address = $('#address-input').val();
        var password = $('#password-input').val();

        $.post("../../php/patients/userRegistration.php",
            {
                name: name,
                age:age,
                email: email,
                telephone:telephone,
                address:address,
                password:password
            },

            function(result){
                if(result==1){
                    // ************************** redirect to dashboard here ***************************
                    alert("Redirect to dashboard here!");
                }else{
                    $.confirm({
                        theme: 'modern',
                        icon: 'fa fa-exclamation-circle',
                        title: 'Error !',
                        content: "Error happened. Please try again!" ,
                        draggable: true,
                        animationBounce: 2.5,
                        type: 'red',
                        typeAnimated: true,
                        buttons: {
                            Delete: {
                                text: 'Try Again',
                                btnClass: 'btn-danger',
                                action : function () {
                                    $('#register-spinner').fadeOut('fast','linear',function(){
                                        $('#register-btn').fadeIn();
                                    });
                                }
                            }
                        }
                    });
                }
        });

    }else{
        $("#register-btn-input-error").show();
        $("#register-btn").removeClass("btn-type-1");
        $("#register-btn").addClass("btn-type-1-error");
    }

}