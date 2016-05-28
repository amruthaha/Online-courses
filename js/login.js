window.addEventListener('load',function(){
    $('#login').submit(submitLogin);
    $('#signup').submit(submitSignup);
    $('#reset').submit(submitReset);
});

var request;
function submitLogin(event){
    event.preventDefault();
    console.log('inside submit login.....');
    if (request) {
        request.abort();
    }
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");
    var serializedData = $form.serialize();
    serializedData+="&action=Login"
    $inputs.prop("disabled", true);
    console.log('serialized data is '+serializedData);
    request = $.ajax({
        url: "login.php",
        type: "post",
        data: serializedData
    });

    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");
        console.log(response)
        console.log('response is '+response);
        response = response && response.trim();
        if(response!='success'){
            var loginError= document.querySelector('span[name=login-error]')
            loginError.innerHTML = response;
            $('span[name=login-error]').addClass('is-visible');
        } else if(response=="success") {
            console.log('inside else');
            var $form_modal = $('.cd-user-modal');
            $form_modal.removeClass('is-visible')
            var login_button = document.getElementById('cd-login-button');
            login_button.style.display="none";
            var signup_button = document.getElementById('cd-signup-button');
            signup_button.style.display="none";
            var myacc_button = document.getElementById('cd-myaccount-button');
            myacc_button.style.display="block";
            var logout = document.getElementById('cd-logout-button');
            logout.style.display = "block";
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
        $inputs.prop("disabled", false);
    });


}

function submitSignup(event){
    event.preventDefault();
    console.log('inside submit login.....');
    if (request) {
        request.abort();
    }
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");
    var serializedData = $form.serialize();
    serializedData+="&action=Signup"
    $inputs.prop("disabled", true);
    console.log('serialized data is '+serializedData);
    request = $.ajax({
        url: "login.php",
        type: "post",
        data: serializedData
    });

    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");
        console.log(response)
        console.log('response is '+response);
        response = response && response.trim();
        if(response!='success'){
            var signupError= document.querySelector('span[name=signup-error]')
            signupError.innerHTML = response;
            $('span[name=signup-error]').addClass('is-visible');
        } else if(response=="success") {
            var $form_modal = $('.cd-user-modal');
            $form_modal.removeClass('is-visible');
            var login_button = document.getElementById('cd-login-button');
            login_button.style.display="none";
            var signup_button = document.getElementById('cd-signup-button');
            signup_button.style.display="none";
            var myacc_button = document.getElementById('cd-myaccount-button');
            myacc_button.style.display="block";

        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
        $inputs.prop("disabled", false);
    });


}
function submitReset(event){
    event.preventDefault();
    console.log('inside reset login.....');
    if (request) {
        request.abort();
    }
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");
    var serializedData = $form.serialize();
    serializedData+="&action=Reset"
    $inputs.prop("disabled", true);
    console.log('serialized data is '+serializedData);
    request = $.ajax({
        url: "login.php",
        type: "post",
        data: serializedData
    });

    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");
        console.log(response)
        console.log('response is '+response);
        response = response && response.trim();
        if(response!='success'){
            document.querySelector('span[id=cd-error-message]').innerHTML="Failed to verify";
            $('span[class=cd-error-message]').addClass('is-visible');
        } else if(response=="success") {
            var $form_modal = $('.cd-user-modal');
            $form_modal.removeClass('is-visible');

        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    request.always(function () {
        $inputs.prop("disabled", false);
    });


}


