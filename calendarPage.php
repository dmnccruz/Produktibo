<?php
    require "controllers/connection.php";
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
    
  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/calendar.css">

   <?php
        $user_id =  $_SESSION['user']['id'];
        $themes_query = "SELECT theme FROM users WHERE id = $user_id";
        $theme = mysqli_fetch_assoc(mysqli_query($conn, $themes_query));
        // var_dump($theme);

        if($theme['theme'] === "1"){
            ?>
            <link rel="stylesheet" href="assets/css/slate.css">
            <?php
        }
        else if($theme['theme'] === "2"){
            ?>
            <link rel="stylesheet" href="assets/css/light.css">
            <?php
        }
        else if($theme['theme'] === "3"){
            ?>
            <link rel="stylesheet" href="assets/css/forest.css">
            <?php
        }
        else if($theme['theme'] === "4"){
            ?>
            <link rel="stylesheet" href="assets/css/salmon.css">
            <?php
        }
        else if($theme['theme'] === "5"){
            ?>
            <link rel="stylesheet" href="assets/css/cloud.css">
            <?php
        }
        else {
            ?>
            <link rel="stylesheet" href="assets/css/style.css">
            <?php
        }
   
    ?>

  <!-- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" defer></script>
  <script type="module" src="assets/js/mainCalendar.js" defer></script>
  <script type="module" src="assets/js/tasksData.js" defer></script>
  <!-- <script src="assets/js/main.js" defer></script> -->

  <title>Produktibo | Calendar Page</title>
</head>

<body>

<?php
        $gold = '.bg-gold-alt';
        $red = '.bg-red-alt';
        $grey = '.bg-grey-alt';
        $green = '.bg-green-alt';
        
        $user_id2 =  $_SESSION['user']['id'];
        $tasks_query2 = "SELECT * FROM tasks WHERE user_id = $user_id2";

        $tasks2 = mysqli_query($conn, $tasks_query2);

        // var_dump($tasks2);
        // die();
        
        $taskname = array();
        $taskcolor = array();
        $taskdate = array();

        $taskIni = array();
        $taskMain = array();
      

        foreach($tasks2 as $indivTask2){
          array_push($taskdate, $indivTask2['taskDate']);


            if($indivTask2['status_id'] === "2"){
                array_push($taskcolor, $grey);

            }
            else if($indivTask2['status_id'] === "1"){
                array_push($taskcolor, $green);

            }
            else if($indivTask2['status_id'] === "4"){
                array_push($taskcolor, $red);

            }
            else if($indivTask2['status_id'] === "5"){
                array_push($taskcolor, $gold);
            };

        array_push($taskname, $indivTask2['name']);


        // array_push($taskdate, $indivTask2['taskDate']);
        // array_push($taskMain, $taskIni);


        }
    

        // echo json_encode($taskcolor);
        // echo '<pre>';
        // echo json_encode($taskdate);
        // echo '<pre>';
        // echo json_encode($taskname);
        

        // die();
        // print_r($tasks[1]);
        ?>
        <!-- <input id="taskColors" name="taskColors" type="hidden" value="<?php echo json_encode($taskMain)?>"/> -->
        <p style="display: none;" id="taskDates2"><?php echo json_encode($taskdate)?></p>
        <p style="display: none;" id="taskColors2"><?php echo json_encode($taskcolor)?></p>
        <p style="display: none;" id="taskNames2"><?php echo json_encode($taskname)?></p>


        <?php

     

                            
    ?>


  <div id="container" >
    <div id="calendar" style="position: absolute;"></div>
  </div>
  
</body>

</html>
