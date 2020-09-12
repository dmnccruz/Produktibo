<?php

    require "connection.php";
    session_start();

    $taskName = $_POST['name'];
    $user_id = $_SESSION['user']['id'];

    // var_dump($_FILES);
    // die();

    $add_task_query = "INSERT INTO tasks (name, important, user_id, status_id) VALUES ('$taskName', 0, $user_id, 2)";

    $addTask = mysqli_query($conn, $add_task_query);


    die("success");
    // header("Location: ../login.php");
    
?>


