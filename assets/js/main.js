// DATE TODAY----------------------------------------------------------------------------------

// var currentDate  = new Date(),
//     currentDay   = currentDate.getDate() < 10 
//                  ? '0' + currentDate.getDate() 
//                  : currentDate.getDate(),
//     currentMonth = currentDate.getMonth() < 9 
//                  ? '0' + (currentDate.getMonth() + 1) 
//                  : (currentDate.getMonth() + 1);

// document.getElementById("dateToday").innerHTML = currentDay + '/' + currentMonth + '/' +  currentDate.getFullYear();

// MAIN PAGE DATE PICKER ----------------------------------------------------

var mainPageDate = new Date();

$(function () {
    $('#dateToday').html(mainPageDate.toLocaleDateString());

    $('#previousDate').click(function () {
        mainPageDate.setDate(mainPageDate.getDate() - 1);
        $('#dateToday').html(mainPageDate.toLocaleDateString())
    });
    $('#nextDate').click(function () {
        mainPageDate.setDate(mainPageDate.getDate() + 1);
        $('#dateToday').html(mainPageDate.toLocaleDateString())
    });
});

// DEFAULT PROFILE PICTURE----------------------------------------------------------------------------------

// const profilePicWrap = document.getElementById("profilePicWrap")
// const profileChangePic = document.getElementById("profileChangePic")

// function defaultProfilePic() {
//     profilePicWrap.style.backgroundImage = 'url(assets/images/profilePictures/defaultProfilePicture.png)';
// }

// defaultProfilePic()

// function defaultProfilePic2() {
//   profileChangePic.style.backgroundImage = 'url(assets/images/profilePictures/defaultProfilePicture.png)';
// }

// defaultProfilePic2()


// DRAGGABLE ELEMENTS----------------------------------------------------------------------------------

dragElement(document.getElementById("phoneDrag"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

dragElement(document.getElementById("markerDrag"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

dragElement(document.getElementById("pencilDrag"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

dragElement(document.getElementById("eraserDrag"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}



// THEMES AND PROFILE WINDOW----------------------------------------------------------------------------------

const themesExitButton = document.getElementById("themesExit")
const themesLink = document.getElementById("themesLink")
const themesWrapper = document.getElementById("themesWrapper")
const themesSVGpath1 = document.getElementById("themesSVGpath1")
const themesSVGpath2 = document.getElementById("themesSVGpath2")
const themesSVGpath3 = document.getElementById("themesSVGpath3")
const themesSVGpath4 = document.getElementById("themesSVGpath4")
const themesSVGpath5 = document.getElementById("themesSVGpath5")
const themesSVGpath6 = document.getElementById("themesSVGpath6")
const themesSVG = document.getElementById("themesSVG")
const calendarIframe = document.getElementById("calendarIframe")
const profileExit2 = document.getElementById("profileExit2")


themesLink.addEventListener('click', function(){
  themesWrapper.style.opacity = "1";
  themesWrapper.style.pointerEvents = "all";
  themesSVGpath1.style.animation = "line-anim3 10s ease forwards .3s";
  themesSVGpath2.style.animation = "line-anim3 1s ease forwards .6s";
  themesSVGpath3.style.animation = "line-anim3 1s ease forwards .9s";
  themesSVGpath4.style.animation = "line-anim3 1s ease forwards 1.2s";
  themesSVGpath5.style.animation = "line-anim3 1s ease forwards 1.5s";
  themesSVGpath6.style.animation = "line-anim3 1s ease forwards 1.8s";
  themesSVG.style.animation = "fill3 0.5s ease forwards 3s";
})

themesExitButton.addEventListener('click', function(){
  themesWrapper.style.opacity = "0";
  themesWrapper.style.pointerEvents = "none";
  themesSVGpath1.style.animation = "none";
  themesSVGpath2.style.animation = "none";
  themesSVGpath3.style.animation = "none";
  themesSVGpath4.style.animation = "none";
  themesSVGpath5.style.animation = "none";
  themesSVGpath6.style.animation = "none";
  themesSVG.style.animation = "none";
})

document.onkeydown = function(evt) {
  evt = evt || window.event;
  if (evt.keyCode == 27) {
      themesWrapper.style.opacity = "0";
      themesWrapper.style.pointerEvents = "none";
      themesSVGpath1.style.animation = "none";
      themesSVGpath2.style.animation = "none";
      themesSVGpath3.style.animation = "none";
      themesSVGpath4.style.animation = "none";
      themesSVGpath5.style.animation = "none";
      themesSVGpath6.style.animation = "none";
      themesSVG.style.animation = "none";

      profileWrapper.style.opacity = "0";
      profileWrapper.style.pointerEvents = "none";
      profileSVGpath1.style.animation = "none";
      profileSVGpath2.style.animation = "none";
      profileSVGpath3.style.animation = "none";
      profileSVGpath4.style.animation = "none";
      profileSVGpath5.style.animation = "none";
      profileSVGpath6.style.animation = "none";
      profileSVGpath7.style.animation = "none";
      profileSVG.style.animation = "none";

      calendarIframe.style.opacity = "0";
      // calendarIframe.style.display = "none";
      calendarIframe.style.pointerEvents = "none";

      calendarExit.style.opacity = "0";
      calendarExit.style.pointerEvents = "none";

      updateprofileWrapper.style.opacity = "0";
      updateprofileWrapper.style.pointerEvents = "none";
      updateprofileSVGpath1.style.animation = "none";
      updateprofileSVGpath2.style.animation = "none";
      updateprofileSVGpath3.style.animation = "none";
      updateprofileSVGpath4.style.animation = "none";
      updateprofileSVG.style.animation = "none";
  }
};

profileExit2.addEventListener('click', function(){

  updateprofileWrapper.style.opacity = "0";
      updateprofileWrapper.style.pointerEvents = "none";
      updateprofileSVGpath1.style.animation = "none";
      updateprofileSVGpath2.style.animation = "none";
      updateprofileSVGpath3.style.animation = "none";
      updateprofileSVGpath4.style.animation = "none";
      updateprofileSVG.style.animation = "none";

})

const profileExitButton = document.getElementById("profileExit")
const profileLink = document.getElementById("profileLink")
const profileWrapper = document.getElementById("profileWrapper")
const profileSVGpath1 = document.getElementById("profileSVGpath1")
const profileSVGpath2 = document.getElementById("profileSVGpath2")
const profileSVGpath3 = document.getElementById("profileSVGpath3")
const profileSVGpath4 = document.getElementById("profileSVGpath4")
const profileSVGpath5 = document.getElementById("profileSVGpath5")
const profileSVGpath6 = document.getElementById("profileSVGpath6")
const profileSVGpath7 = document.getElementById("profileSVGpath7")
const profileSVG = document.getElementById("profileSVG")
const calendarLink = document.getElementById("calendarLink")
const calendarExit = document.getElementById("calendarExit")

const updateProfileA = document.getElementById("updateProfileA")
const updateprofileWrapper = document.getElementById("updateprofileWrapper")

updateProfileA.addEventListener('click', function(){

  profileWrapper.style.opacity = "0";
  profileWrapper.style.pointerEvents = "none";
  profileSVGpath1.style.animation = "none";
  profileSVGpath2.style.animation = "none";
  profileSVGpath3.style.animation = "none";
  profileSVGpath4.style.animation = "none";
  profileSVGpath5.style.animation = "none";
  profileSVGpath6.style.animation = "none";
  profileSVGpath7.style.animation = "none";
  profileSVG.style.animation = "none";

  updateprofileWrapper.style.opacity = "1";
  updateprofileWrapper.style.pointerEvents = "all";
  updateprofileSVGpath1.style.animation = "profileAnim2 10s ease forwards .3s";
  updateprofileSVGpath2.style.animation = "profileAnim2 1s ease forwards .6s";
  updateprofileSVGpath3.style.animation = "profileAnim2 1s ease forwards .9s";
  updateprofileSVGpath4.style.animation = "profileAnim2 1s ease forwards 1.2s";
  updateprofileSVG.style.animation = "profileFill3 0.5s ease forwards 3s";

})

profileLink.addEventListener('click', function(){
  profileWrapper.style.opacity = "1";
  profileWrapper.style.pointerEvents = "all";
  profileSVGpath1.style.animation = "line-anim3 10s ease forwards .3s";
  profileSVGpath2.style.animation = "line-anim3 1s ease forwards .6s";
  profileSVGpath3.style.animation = "line-anim3 1s ease forwards .9s";
  profileSVGpath4.style.animation = "line-anim3 1s ease forwards 1.2s";
  profileSVGpath5.style.animation = "line-anim3 1s ease forwards 1.5s";
  profileSVGpath6.style.animation = "line-anim3 1s ease forwards 1.8s";
  profileSVGpath7.style.animation = "line-anim3 1s ease forwards 2.1s";
  profileSVG.style.animation = "fill3 0.5s ease forwards 3s";
})

profileExitButton.addEventListener('click', function(){
  profileWrapper.style.opacity = "0";
  profileWrapper.style.pointerEvents = "none";
  profileSVGpath1.style.animation = "none";
  profileSVGpath2.style.animation = "none";
  profileSVGpath3.style.animation = "none";
  profileSVGpath4.style.animation = "none";
  profileSVGpath5.style.animation = "none";
  profileSVGpath6.style.animation = "none";
  profileSVGpath7.style.animation = "none";
  profileSVG.style.animation = "none";
})

calendarLink.addEventListener('click', function(){
  calendarIframe.style.opacity = "1";
  calendarIframe.style.pointerEvents = "all";

  calendarExit.style.opacity = "1";
  calendarExit.style.pointerEvents = "all";
})

calendarExit.addEventListener('click', function(){
  calendarIframe.style.opacity = "0";
  calendarIframe.style.pointerEvents = "none";

  calendarExit.style.opacity = "0";
  calendarExit.style.pointerEvents = "none";
})

// SHOW PASSWORDS-------------------------------------------------------------------------

const showPassword3 = document.getElementById("showPassword3");
const showPassword4 = document.getElementById("showPassword4");
const showPassword5 = document.getElementById("showPassword5");
const showPassword6 = document.getElementById("showPassword6");
const showPassword11 = document.getElementById("showPassword11");
const showPassword12 = document.getElementById("showPassword12");
const confirmNewPassword = document.getElementById("confirmNewPassword");


showPassword3.addEventListener('click', function(){
  showPassword3.style.display = "none";
  showPassword4.style.display = "flex";
  oldPassword.type = "text";
});

showPassword4.addEventListener('click', function(){
  showPassword4.style.display = "none";
  showPassword3.style.display = "flex";
  oldPassword.type = "password";
});

showPassword5.addEventListener('click', function(){
  showPassword5.style.display = "none";
  showPassword6.style.display = "flex";
  newPassword.type = "text";
});

showPassword6.addEventListener('click', function(){
  showPassword6.style.display = "none";
  showPassword5.style.display = "flex";
  newPassword.type = "password";
});

showPassword11.addEventListener('click', function(){
  showPassword11.style.display = "none";
  showPassword12.style.display = "flex";
  confirmNewPassword.type = "text";
});

showPassword12.addEventListener('click', function(){
  showPassword12.style.display = "none";
  showPassword11.style.display = "flex";
  confirmNewPassword.type = "password";
});


// if(location.href === 'http://localhost:8080/achievementsPage.php'){

// // CHARTS SCRIPTS-------------------------------------------------------------------------


// var ctx = document.getElementById('myChart').getContext('2d');
// var myChart = new Chart(ctx, {
//     type: 'line',
//     data: {
//       labels: [' ', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Novmber', 'December'],
//       datasets: [{
//             label: 'Productivity per month (tasks accomplished / total tasks)',
//             data: [50, 75, 65, 76, 84, 35, 46, 67, 65, 45, 67, 25, 50],
//             backgroundColor: [
//               'rgba(255, 99, 132, .75)',
//               'rgba(255, 99, 132, 1)',
//               'rgba(54, 162, 235, 1)',
//               'rgba(255, 206, 86, 1)',
//               'rgba(75, 192, 192, 1)',
//               'rgba(153, 102, 255, 1)',
//               'rgba(153, 102, 255, 1)',
//               'rgba(54, 162, 235, 1)',
//               'rgba(255, 206, 86, 1)',
//               'rgba(75, 192, 192, 1)',
//               'rgba(153, 102, 255, 1)',
//               'rgba(153, 102, 255, 1)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(153, 102, 255, 1)',
//             ],
//             borderWidth: 1
//           }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true,
//                     steps: 10,
//                     max: 100
//                 }
//             }]
//         }
//     }
// });

// var ctx2 = document.getElementById('myChart2').getContext('2d');
// var myChart2 = new Chart(ctx2, {
//     type: 'bar',
//     data: {
//         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Novmber', 'December'],
//         datasets: [{
//             label: 'No. of tasks per month',
//             data: [12, 19, 3, 5, 2, 3, 12, 3, 5, 2, 3, 12],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.75)',
//                 'rgba(54, 162, 235, 0.75)',
//                 'rgba(255, 206, 86, 0.75)',
//                 'rgba(75, 192, 192, 0.75)',
//                 'rgba(153, 102, 255, 0.75)',
//                 'rgba(153, 102, 255, 0.75)',
//                 'rgba(54, 162, 235, 0.75)',
//                 'rgba(255, 206, 86, 0.75)',
//                 'rgba(75, 192, 192, 0.75)',
//                 'rgba(153, 102, 255, 0.75)',
//                 'rgba(153, 102, 255, 0.75)',
//                 'rgba(255, 159, 64, 0.75)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                   beginAtZero: true,
//                   steps: 10,
//                 }
//             }]
//         }
//     }
// });

// const finishedTask = 15;
// const unFinishedTask = 3;

// var taskPercent = ((finishedTask / (finishedTask + unFinishedTask) )*100).toFixed(1) + "%";
// var percentShow = document.getElementById('doughnutNumber').innerHTML = taskPercent + "</br>" + '<span style="font-size: 25px;">of tasks accomplished</span>';

// var ctx3 = document.getElementById('myChart3').getContext('2d');
// var myChart3 = new Chart(ctx3, {
//     type: 'doughnut',
//     data: {
//         labels: ['Finished Tasks', 'Unfinished Tasks'],
//         datasets: [{
//             label: 'entries',
//             data: [finishedTask, unFinishedTask],
//             backgroundColor: [
//                 'rgba(54, 162, 235, 0.75)',
//                 'rgba(255, 99, 132, 0.75)',
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true
//                 }
//             }]
//         }
//     }
// });

// }
// TYPING SCRIPT----------------------------------------------------------------------------------

var f=0,text;
var motto = "    " + document.getElementById("mottohide").innerHTML

function typing() {
  if(f<motto.length){
    document.getElementById("mottoWords").innerHTML += motto.charAt(f);
  f++;
    setTimeout(typing,250);
  }
}
typing();

var loadFile = function(event) {
  var image2 = document.getElementById('output2');
  // var image = document.getElementById('output');
  console.log(URL.createObjectURL(event.target.files[0]))
  image2.src = URL.createObjectURL(event.target.files[0]);
  // image2.style.backgroundImage = URL.createObjectURL(event.target.files[0]);
};

// var taskColors = document.getElementById('taskColors');
// console.log(taskColors.value);