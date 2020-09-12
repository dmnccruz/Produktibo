<?php

    require "connection.php";
    session_start();
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_query = "SELECT * FROM users WHERE email = '$email'";
    $user = mysqli_query($conn, $user_query);
    $user_info = mysqli_fetch_assoc($user);

    if(mysqli_num_rows($user) === 1 ){
        if(password_verify($password, $user_info['password'])){
            $_SESSION['user'] = $user_info;
        }
        else {
            die("login failed, wrong password");
        }
    }
    else {
        die("login failed, user not found");
    }

?>  