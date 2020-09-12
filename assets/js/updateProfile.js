


// VALIDATION UPDATE PROFILE----------------------------------------------------------------

var firstNameTippyb = tippy(document.getElementById('changeFirstName'),{
    content: 'First name field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var firstNameTippy2b = tippy(document.getElementById('changeFirstName'),{
    content: 'First name cannot contain numbers or symbols.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var lastNameTippyb = tippy(document.getElementById('changeLastName'),{
    content: 'Last name field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var lastNameTippy2b = tippy(document.getElementById('changeLastName'),{
    content: 'Last name cannot contain numbers or symbols.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var registerEmailTippyb = tippy(document.getElementById('changeEmail'),{
    content: 'Email field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
   
  var registerEmailTippy2b = tippy(document.getElementById('changeEmail'),{
    content: 'This is not a valid email.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var registerEmailTippy3b = tippy(document.getElementById('changeEmail'),{
    content: 'Email address is already taken', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var registerPasswordTippyb = tippy(document.getElementById('newPassword'),{
    content: 'Password field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var registerPasswordTippy2b = tippy(document.getElementById('newPassword'),{
    content: 'Password must contain atleast: 1 Capital letter, 1 small letter, 1 Number, 1 Symbol, and atleast be 8-32 characters long.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var confirmPasswordTippyb = tippy(document.getElementById('oldPassword'),{
    content: 'Confirm Password field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var confirmPasswordTippy2b = tippy(document.getElementById('oldPassword'),{
    content: 'Passwords does not match.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var nickNameTippyb = tippy(document.getElementById('changeNickName'),{
    content: 'Nickname field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var nickNameTippy2b = tippy(document.getElementById('changeNickName'),{
    content: 'Nickname cannot contain numbers or symbols.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });
  
  var mottoTippyb = tippy(document.getElementById('changeMotto'),{
    content: 'Motto field cannot be blank.', 
    trigger: 'manual',
    placement: 'right',
    animation: 'scale',
  });

  var successEdit2 = tippy(document.getElementById('updateProfile'),{
    content: 'Profile update successful!', 
    trigger: 'manual',
    placement: 'top',
    animation: 'scale',
  });
  
const changeFirstName = document.getElementById("changeFirstName");
const changeLastName = document.getElementById("changeLastName");
const changeNickName = document.getElementById("changeNickName");
const changeMotto = document.getElementById("changeMotto");
const changeEmail = document.getElementById("changeEmail");
const updateProfile = document.getElementById("updateProfile");
updateProfile.disabled = true;
  
changeMotto.addEventListener('blur', function(){
    const changeMottoValue = changeMotto.value;
    const changenickNameLetters = /^[A-Za-z]+$/;
    const changeNickNameValue = changeNickName.value;
    const changeFirstNameLetters = /^[A-Za-z]+$/;
    const changeFirstNameValue = changeFirstName.value;
    const changeLastNameLetters = /^[A-Za-z]+$/;
    const changeLastNameValue = changeLastName.value;
    const changeEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const changeEmailValue = changeEmail.value;

    if(changeMottoValue === ""){
        mottoTippyb.show();
        changeMotto.style.animation = "shakeAndColor .5s forwards";
        updateProfile.disabled = true;
    } 
    else {
        mottoTippyb.hide();
        changeMotto.style.animation = "none";

        if( (changeFirstNameValue.match(changeFirstNameLetters)) && (changeFirstNameValue !== "") && (changeLastNameValue.match(changeLastNameLetters)) && (changeLastNameValue !== "") && (changeEmailValue !== "") && (changeEmailValue.match(changeEmailLetters)) && (changeMottoValue !== "") && (changeNickNameValue.match(changenickNameLetters)) && (changeNickNameValue !== "")){
            updateProfile.disabled = false;
        }   
        
    }
});

changeNickName.addEventListener('blur', function(){
    const changeMottoValue = changeMotto.value;
    const changenickNameLetters = /^[A-Za-z]+$/;
    const changeNickNameValue = changeNickName.value;
    const changeFirstNameLetters = /^[A-Za-z]+$/;
    const changeFirstNameValue = changeFirstName.value;
    const changeLastNameLetters = /^[A-Za-z]+$/;
    const changeLastNameValue = changeLastName.value;
    const changeEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const changeEmailValue = changeEmail.value;


    if(!changeNickNameValue.match(changenickNameLetters) && (changeNickNameValue !== "")){
        nickNameTippy2b.show();
        changeNickName.style.animation = "shakeAndColor .5s forwards";
        updateProfile.disabled = true;
    }
    else if(changeNickNameValue === ""){
        nickNameTippyb.show();
        changeNickName.style.animation = "shakeAndColor .5s forwards";
        updateProfile.disabled = true;
    }
    else {
        nickNameTippy2b.hide();
        nickNameTippyb.hide();
        changeNickName.style.animation = "none";

        if( (changeFirstNameValue.match(changeFirstNameLetters)) && (changeFirstNameValue !== "") && (changeLastNameValue.match(changeLastNameLetters)) && (changeLastNameValue !== "") && (changeEmailValue !== "") && (changeEmailValue.match(changeEmailLetters)) && (changeMottoValue !== "") && (changeNickNameValue.match(changenickNameLetters)) && (changeNickNameValue !== "")){
            updateProfile.disabled = false;
        }   

    }
});

changeFirstName.addEventListener('blur', function(){
    const changeFirstNameLetters = /^[A-Za-z]+$/;
    const changeFirstNameValue = changeFirstName.value;
    const changeLastNameLetters = /^[A-Za-z]+$/;
    const changeLastNameValue = changeLastName.value;
    const changeEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const changeEmailValue = changeEmail.value;
    const changeMottoValue = changeMotto.value;
    const changenickNameLetters = /^[A-Za-z]+$/;
    const changeNickNameValue = changeNickName.value;
    
    if(!changeFirstNameValue.match(changeFirstNameLetters) && (changeFirstNameValue !== "")){
        firstNameTippy2b.show();
        changeFirstName.style.animation = "shakeAndColor .5s forwards";
        updateProfile.disabled = true;
    }
    else if(changeFirstNameValue === ""){
        firstNameTippyb.show();
        changeFirstName.style.animation = "shakeAndColor .5s forwards";
        updateProfile.disabled = true;
    }
    else {
        firstNameTippy2b.hide();
        firstNameTippyb.hide();
        updateProfile.style.animation = "none";

        if( (changeFirstNameValue.match(changeFirstNameLetters)) && (changeFirstNameValue !== "") && (changeLastNameValue.match(changeLastNameLetters)) && (changeLastNameValue !== "") && (changeEmailValue !== "") && (changeEmailValue.match(changeEmailLetters)) && (changeMottoValue !== "") && (changeNickNameValue.match(changenickNameLetters)) && (changeNickNameValue !== "")){
            updateProfile.disabled = false;
        }   
        
    }
});

changeLastName.addEventListener('blur', function(){
    const changeLastNameLetters = /^[A-Za-z]+$/;
    const changeLastNameValue = changeLastName.value;
    const changeEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const changeEmailValue = changeEmail.value;
    const changeMottoValue = changeMotto.value;
    const changenickNameLetters = /^[A-Za-z]+$/;
    const changeNickNameValue = changeNickName.value;
    const changeFirstNameLetters = /^[A-Za-z]+$/;
    const changeFirstNameValue = changeFirstName.value;
    
    if(!changeLastNameValue.match(changeLastNameLetters) && (changeLastNameValue !== "")){
        lastNameTippy2b.show();
        changeLastName.style.animation = "shakeAndColor .5s forwards";
        updateProfile.disabled = true;
    }
    else if(changeLastNameValue === ""){
        lastNameTippyb.show();
        changeLastName.style.animation = "shakeAndColor .5s forwards";
        updateProfile.disabled = true;
    }
    else {
        lastNameTippy2b.hide();
        lastNameTippyb.hide();
        changeLastName.style.animation = "none";

        if( (changeFirstNameValue.match(changeFirstNameLetters)) && (changeFirstNameValue !== "") && (changeLastNameValue.match(changeLastNameLetters)) && (changeLastNameValue !== "") && (changeEmailValue !== "") && (changeEmailValue.match(changeEmailLetters)) && (changeMottoValue !== "") && (changeNickNameValue.match(changenickNameLetters)) && (changeNickNameValue !== "")){
            updateProfile.disabled = false;
        }   
        
    } 
});

changeEmail.addEventListener('blur', function(){
    const changeEmailLetters = 
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const changeEmailValue = changeEmail.value;
    const changeMottoValue = changeMotto.value;
    const changenickNameLetters = /^[A-Za-z]+$/;
    const changeNickNameValue = changeNickName.value;
    const changeFirstNameLetters = /^[A-Za-z]+$/;
    const changeFirstNameValue = changeFirstName.value;
    const changeLastNameLetters = /^[A-Za-z]+$/;
    const changeLastNameValue = changeLastName.value;

    if(changeEmailValue === ""){
        registerEmailTippyb.show();
        changeEmail.style.animation = "shakeAndColor .5s forwards";
        updateProfile.disabled = true;
    }
    else if((!changeEmailValue.match(changeEmailLetters))){
        registerEmailTippy2b.show();
        changeEmail.style.animation = "shakeAndColor .5s forwards";
        updateProfile.disabled = true;
    }
    else {  
        registerEmailTippyb.hide();
        registerEmailTippy2b.hide();
        changeEmail.style.animation = "none";
        if( (changeFirstNameValue.match(changeFirstNameLetters)) && (changeFirstNameValue !== "") && (changeLastNameValue.match(changeLastNameLetters)) && (changeLastNameValue !== "") && (changeEmailValue !== "") && (changeEmailValue.match(changeEmailLetters)) && (changeMottoValue !== "") && (changeNickNameValue.match(changenickNameLetters)) && (changeNickNameValue !== "")){
            updateProfile.disabled = false;
        }   
        
    }
});

// const changeFirstName = document.getElementById("changeFirstName");
// const changeLastName = document.getElementById("changeLastName");
// const changeNickName = document.getElementById("changeNickName");
// const changeMotto = document.getElementById("changeMotto");
// const changeEmail = document.getElementById("changeEmail");
// const updateProfile = document.getElementById("updateProfile");

updateProfile.addEventListener('click', function(){
  const profilePic2 = document.getElementById("updateprofileprofilePic").files[0];
  const changeMotto2 = document.getElementById("changeMotto");

  let data3 = new FormData; 

  data3.append("changeFirstName", changeFirstName.value);
  data3.append("changeLastName", changeLastName.value);
  data3.append("changeNickName", changeNickName.value);
  data3.append("changeMotto", changeMotto2.value);
  data3.append("changeEmail", changeEmail.value);
  data3.append("changeProfilePic", profilePic2);

  console.log(data3);
  console.log(data3.getAll("changeFirstName"))
  console.log(data3.getAll("changeLastName"))
  console.log(data3.getAll("changeNickName"))
  console.log(data3.getAll("changeMotto"))
  console.log(data3.getAll("changeEmail"))
  console.log(data3.getAll("changeProfilePic"))
  console.log(data3.getAll("changeProfilePic.value"))

  fetch('../../controllers/process_update_profile.php', {
      method: "POST",
      body: data3

  }).then(function(response){
      return response.text();
      console.log($POST);

  }).then(function(reponse_from_fetch){
      console.log(reponse_from_fetch);

      if(reponse_from_fetch === "success"){
        successEdit2.show();

          window.location.replace("../../mainPage.php");

      }
      else {
        successEdit2.show();
        window.location.replace("../../mainPage.php");


      }

  })

});
// var successEdit2 = tippy(document.getElementById('updateProfile'),{
//   content: 'Profile update successful!', 
//   trigger: 'manual',
//   placement: 'top',
//   animation: 'scale',
// });


// var taskColors = document.getElementById('taskColors');
// console.log(taskColors.value);