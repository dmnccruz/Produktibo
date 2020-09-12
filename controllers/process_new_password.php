<?php

    session_start();

    require "connection.php";
    $user_id = $_SESSION['user']['id'];
    $old_password = $_POST['oldPassword'];
    // $nickName = $_POST['changeNickName'];
    // $firstName = $_POST['changeFirstName'];
    // $lastName = $_POST['changeLastName'];
    // $email = $_POST['changeEmail'];
    // $motto = $_POST['changeMotto'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // $destination = "../assets/images/profilePictures/";
    // $fileName = $_FILES['profilePic']['name'];
    // move_uploaded_file($_FILES['profilePic']['tmp_name'], $destination.$fileName);
    // $profilePic = "assets/images/profilePictures/".$fileName;


    $password_check_query = "SELECT password FROM users WHERE id = '$user_id'";
    $password_result =  mysqli_fetch_assoc(mysqli_query($conn, $password_check_query));

   
    if(password_verify($old_password, $password_result['password'])){

        $update_password_query = "UPDATE users SET password = '$password' WHERE id = $user_id";

        $update_password = mysqli_query($conn, $update_password_query);

        die('same password!');


    }
    else {
        die('not same');
    }
    
?>


