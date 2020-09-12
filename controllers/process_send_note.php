<?php

    require "connection.php";
    session_start();

    function generate_random_string2($length = 1) {
        $characters = '01234567';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }


    $rotate = generate_random_string2($length = 1);
    $uniqueID = $_POST['uniqueID'];
    $message = $_POST['message'];
    $selectColor = $_POST['selectColor'];
    $user_id = $_SESSION['user']['id'];

    $user_query = "SELECT id FROM users WHERE uniqueid = '$uniqueID'";
    $user = mysqli_query($conn, $user_query);
    $user_info = mysqli_fetch_assoc($user);
    $id = $user_info['id'];

    if(mysqli_num_rows($user) !== 1 ){
        return("User does not exist");
    }
    else {
        

    $send_note_query = "INSERT INTO motivations (message, color, sender_Id, user_id, x, y, rotate) VALUES ('$message', '$selectColor', '$user_id', '$id', '0', '0', $rotate)";
    $send_note = mysqli_query($conn, $send_note_query);
    $send_note = mysqli_fetch_assoc($user);



    }

?>  


