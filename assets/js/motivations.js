
const sendNoteButton = document.getElementById('sendNoteButton')
const cancelNoteButton = document.getElementById('cancelNoteButton')
const sendMotiv = document.getElementById('sendMotiv')
const noteFormWrapper = document.getElementById('noteFormWrapper')
const uniqueID = document.getElementById('uniqueID')
const message = document.getElementById('message')
const selectColor = document.getElementById('selectColor')

cancelNoteButton.addEventListener('click', function(){
    // noteFormWrapper.style.display = "none";
    noteFormWrapper.style.opacity = "0";
    noteFormWrapper.style.pointerEvents = "none";
});

sendMotiv.addEventListener('click', function(){
    // noteFormWrapper.style.display = "flex";
    noteFormWrapper.style.opacity = "1";
    noteFormWrapper.style.pointerEvents = "all";

});

var sendTippy = tippy(document.getElementById('uniqueID'),{
    content: 'ID does not exist', 
    trigger: 'manual',
    placement: 'top',
    animation: 'scale',
});

var sendTippy2 = tippy(document.getElementById('sendNoteButton'),{
    content: 'Note sent!', 
    trigger: 'manual',
    placement: 'top',
    animation: 'scale',
});


sendNoteButton.addEventListener('click', function(){

    let data = new FormData; 

    data.append("uniqueID", uniqueID.value);
    data.append("message", message.value);
    data.append("selectColor", selectColor.value);

console.log(data)

    fetch('../../controllers/process_send_note.php', {
        method: "POST",
        body: data

    }).then(function(response){
        return response.text();

    }).then(function(reponse_from_fetch){
        console.log(reponse_from_fetch);
        if(reponse_from_fetch === "User does not exist"){
            console.log('User does not exist')
            sendTippy.show();
            uniqueID.style.animation = "shakeAndColor .5s forwards";
        }

        else{
            sendTippy.hide();
            sendTippy2.show();
            location.reload()
        }
    })

});
  