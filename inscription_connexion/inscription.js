var password = document.getElementById("new_password");
var confirm_password = document.getElementById("confirm_password");

function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Ne correspond pas au mot de passe saisi précédemmant");
    } else {
        confirm_password.setCustomValidity('');
    }
}

new_password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;     