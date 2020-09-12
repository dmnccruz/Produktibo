console.log('hello')

// const logo = document.querySelectorAll("#produktiboSVG path");
// console.log(logo)
// for(let i=0; i<logo.length; i++){
//     console.log(`Letter ${i} is ${logo[i].getTotalLength()}`);
// }

const logo2 = document.querySelectorAll("#loginSVG path");
console.log(logo2)
for(let i=0; i<logo2.length; i++){
    console.log(`Letter ${i} is ${logo2[i].getTotalLength()}`);
}

const logo3 = document.querySelectorAll("#speechBubble path");
console.log(logo3)
for(let i=0; i<logo3.length; i++){
    console.log(`Letter ${i} is ${logo3[i].getTotalLength()}`);
}

// const logo = document.querySelectorAll("#produktiboSVG path");
// console.log(logo)
// for(let i=0; i<logo.length; i++){
//     console.log(`Letter ${i} is ${logo[i].getTotalLength()}`);
// }

const signUp = document.getElementById("signUp");
const registerPageWrapper = document.getElementById("registerPageWrapper")
const registerPageWrapper2 = document.getElementById("registerPageWrapper2")
const exitButton = document.getElementById("exitButton")
const registerSVG = document.getElementById("registerSVG")
const registerSVGpath1 = document.getElementById("registerSVGpath1")
const registerSVGpath2 = document.getElementById("registerSVGpath2")
const registerSVGpath3 = document.getElementById("registerSVGpath3")
const registerSVGpath4 = document.getElementById("registerSVGpath4")
const registerSVGpath5 = document.getElementById("registerSVGpath5")
const registerSVGpath6 = document.getElementById("registerSVGpath6")
const registerSVGpath7 = document.getElementById("registerSVGpath7")
const registerSVGpath8 = document.getElementById("registerSVGpath8")
const registerSVGb = document.getElementById("registerSVGb")
const registerSVGpath1b = document.getElementById("registerSVGpath1b")
const registerSVGpath2b = document.getElementById("registerSVGpath2b")
const registerSVGpath3b = document.getElementById("registerSVGpath3b")
const registerSVGpath4b = document.getElementById("registerSVGpath4b")
const registerSVGpath5b = document.getElementById("registerSVGpath5b")
const registerSVGpath6b = document.getElementById("registerSVGpath6b")
const registerSVGpath7b = document.getElementById("registerSVGpath7b")
const registerSVGpath8b = document.getElementById("registerSVGpath8b")
const nextButton = document.getElementById("nextButton")
const RegisterForm1 = document.getElementById("RegisterForm1")
const RegisterForm2 = document.getElementById("RegisterForm2")
const backButton = document.getElementById("backButton")
const formBorder = document.getElementById("formBorder")
const profilePicWrap = document.getElementById("profilePicWrap")

// function defaultProfilePic() {
//     profilePicWrap.style.backgroundImage = 'url(assets/images/profilePictures/defaultProfilePicture.png)';
// }

// defaultProfilePic()

signUp.addEventListener('click', function(){
    registerPageWrapper.style.opacity = "1";
    registerPageWrapper.style.pointerEvents = "all";
    registerSVGpath1.style.animation = "line-anim3 10s ease forwards .3s";
    registerSVGpath2.style.animation = "line-anim3 1s ease forwards .6s";
    registerSVGpath3.style.animation = "line-anim3 1s ease forwards .9s";
    registerSVGpath4.style.animation = "line-anim3 1s ease forwards 1.2s";
    registerSVGpath5.style.animation = "line-anim3 1s ease forwards 1.5s";
    registerSVGpath6.style.animation = "line-anim3 1s ease forwards 1.8s";
    registerSVGpath7.style.animation = "line-anim3 1s ease forwards 2.1s";
    registerSVGpath8.style.animation = "line-anim3 1s ease forwards 2.4s";
    registerSVG.style.animation = "fill3 0.5s ease forwards 3s";
    formBorder.style.opacity = "0";
    formBorder.style.pointerEvents = "none";
})

exitButton.addEventListener('click', function(){
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

    formBorder.style.opacity = "1";
    formBorder.style.pointerEvents = "all";
})

exitButton2.addEventListener('click', function(){
    registerPageWrapper2.style.opacity = "0";
    registerPageWrapper2.style.pointerEvents = "none";
    registerSVGpath1b.style.animation = "none";
    registerSVGpath2b.style.animation = "none";
    registerSVGpath3b.style.animation = "none";
    registerSVGpath4b.style.animation = "none";
    registerSVGpath5b.style.animation = "none";
    registerSVGpath6b.style.animation = "none";
    registerSVGpath7b.style.animation = "none";
    registerSVGpath8b.style.animation = "none";
    registerSVGb.style.animation = "none";

    formBorder.style.opacity = "1";
    formBorder.style.pointerEvents = "all";
})

document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
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

        registerPageWrapper2.style.opacity = "0";
        registerPageWrapper2.style.pointerEvents = "none";
        registerSVGpath1b.style.animation = "none";
        registerSVGpath2b.style.animation = "none";
        registerSVGpath3b.style.animation = "none";
        registerSVGpath4b.style.animation = "none";
        registerSVGpath5b.style.animation = "none";
        registerSVGpath6b.style.animation = "none";
        registerSVGpath7b.style.animation = "none";
        registerSVGpath8b.style.animation = "none";
        registerSVGb.style.animation = "none";

        formBorder.style.opacity = "1";
        formBorder.style.pointerEvents = "all";
    }
};

// nextButton.addEventListener('click', function(){
//     registerPageWrapper.style.opacity = "0";
//     registerPageWrapper.style.pointerEvents = "none";
//     registerSVGpath1.style.animation = "none";
//     registerSVGpath2.style.animation = "none";
//     registerSVGpath3.style.animation = "none";
//     registerSVGpath4.style.animation = "none";
//     registerSVGpath5.style.animation = "none";
//     registerSVGpath6.style.animation = "none";
//     registerSVGpath7.style.animation = "none";
//     registerSVGpath8.style.animation = "none";
//     registerSVG.style.animation = "none";

//     registerPageWrapper2.style.opacity = "1";
//     registerPageWrapper2.style.pointerEvents = "all";
//     registerSVGpath1b.style.animation = "line-anim3 10s ease forwards .3s";
//     registerSVGpath2b.style.animation = "line-anim3 1s ease forwards .6s";
//     registerSVGpath3b.style.animation = "line-anim3 1s ease forwards .9s";
//     registerSVGpath4b.style.animation = "line-anim3 1s ease forwards 1.2s";
//     registerSVGpath5b.style.animation = "line-anim3 1s ease forwards 1.5s";
//     registerSVGpath6b.style.animation = "line-anim3 1s ease forwards 1.8s";
//     registerSVGpath7b.style.animation = "line-anim3 1s ease forwards 2.1s";
//     registerSVGpath8b.style.animation = "line-anim3 1s ease forwards 2.4s";
//     registerSVGb.style.animation = "fill3 0.5s ease forwards 3s";
// })

backButton.addEventListener('click', function(){
    registerPageWrapper.style.opacity = "1";
    registerPageWrapper.style.pointerEvents = "all";
    registerSVGpath1.style.animation = "line-anim3 10s ease forwards .3s";
    registerSVGpath2.style.animation = "line-anim3 1s ease forwards .6s";
    registerSVGpath3.style.animation = "line-anim3 1s ease forwards .9s";
    registerSVGpath4.style.animation = "line-anim3 1s ease forwards 1.2s";
    registerSVGpath5.style.animation = "line-anim3 1s ease forwards 1.5s";
    registerSVGpath6.style.animation = "line-anim3 1s ease forwards 1.8s";
    registerSVGpath7.style.animation = "line-anim3 1s ease forwards 2.1s";
    registerSVGpath8.style.animation = "line-anim3 1s ease forwards 2.4s";
    registerSVG.style.animation = "fill3 0.5s ease forwards 3s";

    registerPageWrapper2.style.opacity = "0";
    registerPageWrapper2.style.pointerEvents = "none";
    registerSVGpath1b.style.animation = "none";
    registerSVGpath2b.style.animation = "none";
    registerSVGpath3b.style.animation = "none";
    registerSVGpath4b.style.animation = "none";
    registerSVGpath5b.style.animation = "none";
    registerSVGpath6b.style.animation = "none";
    registerSVGpath7b.style.animation = "none";
    registerSVGpath8b.style.animation = "none";
    registerSVGb.style.animation = "none";
})
  
// ANIMATION LOOP SCRIPT-------------------------------------------------------------------------
   
const svgA = document.getElementById("svgA")
const svgB = document.getElementById("svgB")

setInterval(function(){
    var container = document.getElementById('svgA');
    var tmp = container.innerHTML;
    container.innerHTML= tmp;
    }, 7000
);

setInterval(function(){
    var container2 = document.getElementById('svgB');
    var tmp2 = container2.innerHTML;
    container2.innerHTML= tmp2;
    }, 7000
);    
  
// LOGIN TIPPY SCRIPTS-------------------------------------------------------------------------

var emailTippy = tippy(document.getElementById('emailInput'),{
    content: 'Email field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var emailTippy2 = tippy(document.getElementById('emailInput'),{
    content: 'User not found.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var emailTippy3 = tippy(document.getElementById('emailInput'),{
    content: 'This is not a valid email.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var passwordTippy = tippy(document.getElementById('passwordInput'),{
    content: 'Password field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});

var passwordTippy2 = tippy(document.getElementById('passwordInput'),{
    content: 'Password incorrect.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
});
  
// LOGIN VALIDATION A-------------------------------------------------------------------------

const loginEmailInput = document.getElementById("emailInput");
const loginPasswordInput = document.getElementById("passwordInput");
const loginButton = document.getElementById("loginButton");

loginButton.disabled = true;
  
loginEmailInput.addEventListener('blur', function(){
    const loginEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const loginEmailValue = loginEmailInput.value;
    const loginPasswordValue = loginPasswordInput.value;

    if(loginEmailValue === ""){
        emailTippy.show();
        loginEmailInput.style.animation = "shakeAndColor .5s forwards";
        loginButton.disabled = true;

    }
    else if((!loginEmailValue.match(loginEmailLetters))){
        emailTippy3.show();
        loginEmailInput.style.animation = "shakeAndColor .5s forwards";
        loginButton.disabled = true;

    }
    else {
        emailTippy.hide();
        emailTippy3.hide();
        loginEmailInput.style.animation = "none";

        if((loginEmailValue !== "") && (loginEmailValue.match(loginEmailLetters)) && (loginPasswordValue !== "")){
            loginButton.disabled = false;
        }
    }
});

loginPasswordInput.addEventListener('blur', function(){
    const loginEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const loginEmailValue = loginEmailInput.value;
    const loginPasswordValue = loginPasswordInput.value;

    if(loginPasswordValue === ""){
        passwordTippy.show();
        loginPasswordInput.style.animation = "shakeAndColor .5s forwards";
        loginButton.disabled = true;
    }
    else {
        passwordTippy.hide();
        loginPasswordInput.style.animation = "none";

        if((loginEmailValue !== "") && (loginEmailValue.match(loginEmailLetters)) && (loginPasswordValue !== "")){
            loginButton.disabled = false;
        }
      
    }
});

// LOGIN VALIDATION B-------------------------------------------------------------------------

const loginBtn = document.getElementById("loginButton");

loginBtn.addEventListener('click', function(){

    let data = new FormData; 

    data.append("email", loginEmailInput.value);
    data.append("password", loginPasswordInput.value);

    fetch('../../controllers/process_login.php', {
        method: "POST",
        body: data

    }).then(function(response){
        return response.text();

    }).then(function(reponse_from_fetch){
        console.log(reponse_from_fetch);
        if(reponse_from_fetch === "login failed, wrong password"){
            passwordTippy2.show();
            loginPasswordInput.style.animation = "shakeAndColor .5s forwards";
        }
        else if(reponse_from_fetch === "login failed, user not found"){
            emailTippy2.show();
            loginEmailInput.style.animation = "shakeAndColor .5s forwards";
        }

        else{
            window.location.replace("../../mainPage.php");
        }
    })

});

const showPassword = document.getElementById("showPassword");
const showPassword2 = document.getElementById("showPassword2");
const showPassword7 = document.getElementById("showPassword7");
const showPassword8 = document.getElementById("showPassword8");
const showPassword9 = document.getElementById("showPassword9");
const showPassword10 = document.getElementById("showPassword10");


showPassword.addEventListener('click', function(){
    showPassword.style.display = "none";
    showPassword2.style.display = "flex";
    loginPasswordInput.type = "text";
});

showPassword2.addEventListener('click', function(){
    showPassword2.style.display = "none";
    showPassword.style.display = "flex";
    loginPasswordInput.type = "password";
});

showPassword7.addEventListener('click', function(){
    showPassword7.style.display = "none";
    showPassword8.style.display = "flex";
    passwordInput.type = "text";
});
  
  showPassword8.addEventListener('click', function(){
    showPassword8.style.display = "none";
    showPassword7.style.display = "flex";
    passwordInput.type = "password";
});
  
  showPassword9.addEventListener('click', function(){
    showPassword9.style.display = "none";
    showPassword10.style.display = "flex";
    confirmPasswordInput.type = "text";
});
  
  showPassword10.addEventListener('click', function(){
    showPassword10.style.display = "none";
    showPassword9.style.display = "flex";
    confirmPasswordInput.type = "password";
});

var loadFile = function(event) {
    var image = document.getElementById('output');
    console.log(URL.createObjectURL(event.target.files[0]))
    image.src = URL.createObjectURL(event.target.files[0]);
};


