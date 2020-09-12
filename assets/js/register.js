// if email is unique
// no empty fields
// alphanumeric password 1 Capital 1 number 1 symbol
// password more than 8
// valid email
// no number in firstName lastName
// password and confirm password are same

// REGISTER TIPPY SCRIPTS-------------------------------------------------------------------------

var firstNameTippy = tippy(document.getElementById('firstName'),{
    content: 'First name field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var firstNameTippy2 = tippy(document.getElementById('firstName'),{
    content: 'First name cannot contain numbers or symbols.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var lastNameTippy = tippy(document.getElementById('lastName'),{
    content: 'Last name field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var lastNameTippy2 = tippy(document.getElementById('lastName'),{
    content: 'Last name cannot contain numbers or symbols.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var registerEmailTippy = tippy(document.getElementById('email'),{
    content: 'Email field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var registerEmailTippy2 = tippy(document.getElementById('email'),{
    content: 'This is not a valid email.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var registerEmailTippy3 = tippy(document.getElementById('email'),{
    content: 'Email address is already taken', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var registerPasswordTippy = tippy(document.getElementById('password'),{
    content: 'Password field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var registerPasswordTippy2 = tippy(document.getElementById('password'),{
    content: 'Password must contain atleast: 1 Capital letter, 1 small letter, 1 Number, 1 Symbol, and atleast be 8-32 characters long.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var confirmPasswordTippy = tippy(document.getElementById('confirmPassword'),{
    content: 'Confirm Password field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var confirmPasswordTippy2 = tippy(document.getElementById('confirmPassword'),{
    content: 'Passwords does not match.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var nickNameTippy = tippy(document.getElementById('nickName'),{
    content: 'Nickname field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var nickNameTippy2 = tippy(document.getElementById('nickName'),{
    content: 'Nickname cannot contain numbers or symbols.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var mottoTippy = tippy(document.getElementById('motto'),{
    content: 'Motto field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

// REGISTER VALIDATION A-------------------------------------------------------------------------
const firstNameInput = document.getElementById("firstName");
const lastNameInput = document.getElementById("lastName");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("confirmPassword");
const RegisterButton = document.getElementById("RegisterButton");
const nickName = document.getElementById("nickName");
const motto = document.getElementById("motto");
RegisterButton.disabled = true;
nextButton.disabled = true;

motto.addEventListener('blur', function(){
    const mottoValue = motto.value;
    const nickNameLetters = /^[A-Za-z]+$/;
    const nickNameValue = nickName.value;

    if(mottoValue === ""){
        mottoTippy.show();
        motto.style.animation = "shakeAndColor .5s forwards";
        RegisterButton.disabled = true;
    } 
    else {
        mottoTippy.hide();
        motto.style.animation = "none";

        if((mottoValue !== "") && (nickNameValue.match(nickNameLetters)) && (nickNameValue !== "")){
            RegisterButton.disabled = false;
        }
    }
});

nickName.addEventListener('blur', function(){
    const nickNameLetters = /^[A-Za-z]+$/;
    const nickNameValue = nickName.value;
    const mottoValue = motto.value;

    if(!nickNameValue.match(nickNameLetters) && (nickNameValue !== "")){
        nickNameTippy2.show();
        nickName.style.animation = "shakeAndColor .5s forwards";
        RegisterButton.disabled = true;
    }
    else if(nickNameValue === ""){
        nickNameTippy.show();
        nickName.style.animation = "shakeAndColor .5s forwards";
        RegisterButton.disabled = true;
    }
    else {
        nickNameTippy2.hide();
        nickNameTippy.hide();
        nickName.style.animation = "none";

        if((mottoValue !== "") && (nickNameValue.match(nickNameLetters)) && (nickNameValue !== "")){
            RegisterButton.disabled = false;
        }
    }
});

firstNameInput.addEventListener('blur', function(){
    const registerLetters = /^[A-Za-z]+$/;
    const firstNameValue = firstNameInput.value;
    const lastNameValue = lastNameInput.value;
    const registerEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const registerEmailValue = emailInput.value;
    const registerPasswordLetters = /^(?=.*?[0-9])(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[^\w\s]).{8,32}$/;
    const registerPasswordValue = passwordInput.value;
    const confirmPasswordValue = confirmPasswordInput.value;
    
    if(!firstNameValue.match(registerLetters) && (firstNameValue !== "")){
        firstNameTippy2.show();
        firstNameInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else if(firstNameValue === ""){
        firstNameTippy.show();
        firstNameInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else {
        firstNameTippy2.hide();
        firstNameTippy.hide();
        firstNameInput.style.animation = "none";

        if( (firstNameValue.match(registerLetters)) && (firstNameValue !== "") && (lastNameValue.match(registerLetters)) && (lastNameValue !== "") && (registerEmailValue !== "") && (registerEmailValue.match(registerEmailLetters)) && (registerPasswordValue !== "") && (registerPasswordValue.match(registerPasswordLetters)) && (registerPasswordValue !== "") && (confirmPasswordValue !== "") (confirmPasswordValue === registerPasswordValue)){
            nextButton.disabled = false;
        }
        
    }
});

lastNameInput.addEventListener('blur', function(){
    const registerLetters = /^[A-Za-z]+$/;
    const lastNameValue = lastNameInput.value;
    const firstNameValue = firstNameInput.value;
    const registerEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const registerEmailValue = emailInput.value;
    const registerPasswordLetters = /^(?=.*?[0-9])(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[^\w\s]).{8,32}$/;
    const registerPasswordValue = passwordInput.value;
    const confirmPasswordValue = confirmPasswordInput.value;
    
    if(!lastNameValue.match(registerLetters) && (lastNameValue !== "")){
        lastNameTippy2.show();
        lastNameInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else if(lastNameValue === ""){
        lastNameTippy.show();
        lastNameInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else {
        lastNameTippy2.hide();
        lastNameTippy.hide();
        lastNameInput.style.animation = "none";

        if( (firstNameValue.match(registerLetters)) && (firstNameValue !== "") && (lastNameValue.match(registerLetters)) && (lastNameValue !== "") && (registerEmailValue !== "") && (registerEmailValue.match(registerEmailLetters)) && (registerPasswordValue !== "") && (registerPasswordValue.match(registerPasswordLetters)) && (registerPasswordValue !== "") && (confirmPasswordValue !== "") && (confirmPasswordValue === registerPasswordValue) ){
            nextButton.disabled = false;
        }
        
    } 
});

emailInput.addEventListener('blur', function(){
    const registerEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const registerEmailValue = emailInput.value;
    const registerLetters = /^[A-Za-z]+$/;
    const firstNameValue = firstNameInput.value;
    const lastNameValue = lastNameInput.value;
    const registerPasswordLetters = /^(?=.*?[0-9])(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[^\w\s]).{8,32}$/;
    const registerPasswordValue = passwordInput.value;
    const confirmPasswordValue = confirmPasswordInput.value;

    if(registerEmailValue === ""){
        registerEmailTippy.show();
        emailInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else if((!registerEmailValue.match(registerEmailLetters))){
        registerEmailTippy2.show();
        emailInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else {
        registerEmailTippy.hide();
        registerEmailTippy2.hide();
        emailInput.style.animation = "none";

        if( (firstNameValue.match(registerLetters)) && (firstNameValue !== "") && (lastNameValue.match(registerLetters)) && (lastNameValue !== "") && (registerEmailValue !== "") && (registerEmailValue.match(registerEmailLetters)) && (registerPasswordValue !== "") && (registerPasswordValue.match(registerPasswordLetters)) && (registerPasswordValue !== "") && (confirmPasswordValue !== "") && (confirmPasswordValue === registerPasswordValue) ){
            nextButton.disabled = false;
        }   
    }
});

passwordInput.addEventListener('blur', function(){
    const registerPasswordLetters = /^(?=.*?[0-9])(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[^\w\s]).{8,32}$/;
    const registerPasswordValue = passwordInput.value;
    const registerLetters = /^[A-Za-z]+$/;
    const firstNameValue = firstNameInput.value;
    const lastNameValue = lastNameInput.value;
    const registerEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const registerEmailValue = emailInput.value;
    const confirmPasswordValue = confirmPasswordInput.value;


    if(registerPasswordValue === ""){
        registerPasswordTippy.show();
        passwordInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else if((!registerPasswordValue.match(registerPasswordLetters)) && (registerPasswordValue !== "")){
        registerPasswordTippy2.show();
        passwordInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else {
        registerPasswordTippy.hide();
        registerPasswordTippy2.hide();
        passwordInput.style.animation = "none";

        if( (firstNameValue.match(registerLetters)) && (firstNameValue !== "") && (lastNameValue.match(registerLetters)) && (lastNameValue !== "") && (registerEmailValue !== "") && (registerEmailValue.match(registerEmailLetters)) && (registerPasswordValue !== "") && (registerPasswordValue.match(registerPasswordLetters)) && (registerPasswordValue !== "") && (confirmPasswordValue !== "") && (confirmPasswordValue === registerPasswordValue) ){
            nextButton.disabled = false;
        }
        
    }
});

confirmPasswordInput.addEventListener('blur', function(){
    const registerPasswordValue = passwordInput.value;
    const confirmPasswordValue = confirmPasswordInput.value;
    const registerLetters = /^[A-Za-z]+$/;
    const firstNameValue = firstNameInput.value;
    const lastNameValue = lastNameInput.value;
    const registerEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const registerEmailValue = emailInput.value;
    const registerPasswordLetters = /^(?=.*?[0-9])(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[^\w\s]).{8,32}$/;

    if(confirmPasswordValue === ""){
        confirmPasswordTippy.show();
        confirmPasswordInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }
    else if(confirmPasswordValue !== registerPasswordValue){
        confirmPasswordTippy2.show();
        confirmPasswordInput.style.animation = "shakeAndColor .5s forwards";
        nextButton.disabled = true;
    }  
    else {
        confirmPasswordTippy2.hide();
        confirmPasswordInput.style.animation = "none";

        if( (firstNameValue.match(registerLetters)) && (firstNameValue !== "") && (lastNameValue.match(registerLetters)) && (lastNameValue !== "") && (registerEmailValue !== "") && (registerEmailValue.match(registerEmailLetters)) && (registerPasswordValue !== "") && (registerPasswordValue.match(registerPasswordLetters)) && (registerPasswordValue !== "") && (confirmPasswordValue !== "") && (confirmPasswordValue === registerPasswordValue) ){
            nextButton.disabled = false;
        }
        
    }
});

// REGISTER VALIDATION B-------------------------------------------------------------------------

nextButton.addEventListener('click', function(){

    let data1 = new FormData; 

    data1.append("email", emailInput.value);

    fetch('../../controllers/process_register.php', {
        method: "POST",
        body: data1

    }).then(function(response){
        return response.text();

    }).then(function(reponse_from_fetch){
        console.log(reponse_from_fetch);
        if(reponse_from_fetch === "duplicate"){
     
            registerEmailTippy3.show();
            emailInput.style.animation = "shakeAndColor .5s forwards";

        }
        else{
            
            registerEmailTippy3.hide();
            emailInput.style.animation = "none";

            registerPageWrapper.style.opacity = "0";
            registerPageWrapper.style.pointerEvents = "none";
            registerSVGpath1.style.animation = "none";
            registerSVGpath2.style.animation = "none";
            registerSVGpath3.style.animation = "none";
            registerSVGpath4.style.animation = "none";
            registerSVGpath5.style.animation = "none";
            registerSVGpath6.style.animation = "none";
            registerSVGpath7.style.animation = "none";
            registerSVGpath8.style.animation = "none";
            registerSVG.style.animation = "none";
        
            registerPageWrapper2.style.opacity = "1";
            registerPageWrapper2.style.pointerEvents = "all";
            registerSVGpath1b.style.animation = "line-anim3 10s ease forwards .3s";
            registerSVGpath2b.style.animation = "line-anim3 1s ease forwards .6s";
            registerSVGpath3b.style.animation = "line-anim3 1s ease forwards .9s";
            registerSVGpath4b.style.animation = "line-anim3 1s ease forwards 1.2s";
            registerSVGpath5b.style.animation = "line-anim3 1s ease forwards 1.5s";
            registerSVGpath6b.style.animation = "line-anim3 1s ease forwards 1.8s";
            registerSVGpath7b.style.animation = "line-anim3 1s ease forwards 2.1s";
            registerSVGpath8b.style.animation = "line-anim3 1s ease forwards 2.4s";
            registerSVGb.style.animation = "fill3 0.5s ease forwards 3s";
     
        }
    })

}); 

RegisterButton.addEventListener('click', function(){
    const profilePic = document.getElementById("profilePic").files[0];

    let data = new FormData; 

    data.append("firstName", firstNameInput.value);
    data.append("lastName", lastNameInput.value);
    data.append("passwordInput", passwordInput.value);
    data.append("nickName", nickName.value);
    data.append("motto", motto.value);
    data.append("email", emailInput.value);
    data.append("profilePic", profilePic);

    console.log(data);
    console.log(data.getAll("firstName"))
    console.log(data.getAll("lastName"))
    console.log(data.getAll("email"))
    console.log(data.getAll("passwordInput"))
    console.log(data.getAll("nickName"))
    console.log(data.getAll("motto"))
    console.log(data.getAll("profilePic"))
    console.log(data.getAll("profilePic.value"))
    // console.log(data.getAll($_FILES))
    // console.log(data.getAll($_FILES['profilePic']))
    // console.log(data.getAll($_FILES['profilePic']['name']))

    fetch('../../controllers/process_register2.php', {
        method: "POST",
        body: data

    }).then(function(response){
        return response.text();
        console.log($POST);

    }).then(function(reponse_from_fetch){
        console.log(reponse_from_fetch);

        // if(reponse_from_fetch === "success"){
            window.location.replace("../../mainPage.php");
        // }

    })

});
