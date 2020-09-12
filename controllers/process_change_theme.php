<?php

    require "connection.php";
    session_start();

    // var_dump($_FILES['profilePic']['name']);
    // die();

    $themes_select = $_POST['themesselect'];
    $user_id = $_SESSION['user']['id'];

    // var_dump($themes_select);
    // die();

    $theme_query = "UPDATE users SET theme = '$themes_select' WHERE id = '$user_id'";
    $theme = mysqli_query($conn, $theme_query);
    // $theme_info = mysqli_fetch_assoc($theme);

    //     var_dump($theme_info);
    // die();

    // die("success")
    // header("Location: ../login.php");
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>


<!-- $update_first_query = "UPDATE tasks SET name = '$name' WHERE id = $user_id";

$update_first = mysqli_query($conn, $update_first_query);


header('Location: ' . $_SERVER['HTTP_REFERER']); -->