
const addButton = document.getElementById("addButton");
const addTaskInput = document.getElementById("addTaskInput");

addButton.addEventListener('click', function(){

    let data5 = new FormData; 

    data5.append("name", addTaskInput.value);
    console.log(addTaskInput.value);

    fetch('../../controllers/process_add_task.php', {
        method: "POST",
        body: data5

    }).then(function(response){
        return response.text();

    }).then(function(reponse_from_fetch){
        console.log(reponse_from_fetch);
        if(reponse_from_fetch === "success"){
            console.log('success'); 
            location.reload()

        }
        else{
        console.log('fail'); 
       }
    })

});