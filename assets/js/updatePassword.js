var oldPasswordTippy = tippy(document.getElementById('oldPassword'),{
    content: 'Incorrect Password', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var newPasswordTippy = tippy(document.getElementById('newPassword'),{
    content: 'Password must contain atleast: 1 Capital letter, 1 small letter, 1 Number, 1 Symbol, and atleast be 8-32 characters long.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var confirmNewPasswordTippy = tippy(document.getElementById('confirmNewPassword'),{
    content: 'Passwords does not match.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var passwordSuccessfulTippy = tippy(document.getElementById('savePassword'),{
    content: 'Password change successful', 
    trigger: 'manual',
    placement: 'top',
    animation: 'scale',
});

const savePassword = document.getElementById("savePassword");
const oldPassword2 = document.getElementById("oldPassword");
savePassword.disabled = true;

newPassword.addEventListener('blur', function(){
    const newPasswordLetters = /^(?=.*?[0-9])(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[^\w\s]).{8,32}$/;
    const newPasswordValue = newPassword.value;

    if((!newPasswordValue.match(newPasswordLetters)) && (newPasswordValue !== "")){
        newPasswordTippy.show();
        newPassword.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else {
        newPasswordTippy.hide();
        newPassword.style.animation = "none";
        
    }
});

confirmNewPassword.addEventListener('blur', function(){
    const confirmNewPasswordValue = confirmNewPassword.value;
    const newPasswordValue = newPassword.value;


    if(confirmNewPasswordValue !== newPasswordValue){
        confirmNewPasswordTippy.show();
        confirmNewPassword.style.animation = "shakeAndColor .5s forwards";
    }
    else {
        confirmNewPasswordTippy.hide();
        confirmNewPassword.style.animation = "none";
        savePassword.disabled = false;

    }
});

savePassword.addEventListener('click', function(){
    let data = new FormData; 

    data.append("oldPassword", oldPassword2.value);
    data.append("password", newPassword.value);

    fetch('../../controllers/process_new_password.php', {
        method: "POST",
        body: data

    }).then(function(response){
        return response.text();
        console.log($POST);

    }).then(function(reponse_from_fetch){
        console.log(reponse_from_fetch);

        if(reponse_from_fetch === 'same password!'){
            console.log('same same!')

            // document.getElementsByClassName('.tippy-box').style.backgroundColor = "background-color: rgb(98, 179, 82);";

            passwordSuccessfulTippy.show();

            // document.getElementsByClassName('.tippy-box').style.backgroundColor = "background-color: rgb(255, 116, 116);";


        }
        else{
            console.log('different!')
            oldPasswordTippy.show();

        }

    })

});