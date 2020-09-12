<?php

    require "connection.php";
    session_start();

    // var_dump($_FILES['profilePic']['name']);
    // die();

    function generate_random_string($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    $uniqueid = generate_random_string($length = 10);
    $nickName = $_POST['nickName'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $motto = $_POST['motto'];
    $password = password_hash($_POST['passwordInput'], PASSWORD_BCRYPT);
    $role_id = 2;

    // var_dump($_FILES);
    // die();

    $destination = "../assets/images/profilePictures/";
    $fileName = $_FILES['profilePic']['name'];
    move_uploaded_file($_FILES['profilePic']['tmp_name'], $destination.$fileName);
    $profilePic = "assets/images/profilePictures/".$fileName;

    $register_query = "INSERT INTO users (uniqueid, nickName, firstName, lastName, email, password, role_id, profilePic, motto) VALUES ('$uniqueid', '$nickName', '$firstName', '$lastName', '$email', '$password', $role_id, '$profilePic', '$motto')";

    $register = mysqli_query($conn, $register_query);

    $user_query = "SELECT * FROM users WHERE email = '$email'";
    $user = mysqli_query($conn, $user_query);
    $user_info = mysqli_fetch_assoc($user);

    $_SESSION['user'] = $user_info;
    // die("success")
    // header("Location: ../login.php");
    
?>


