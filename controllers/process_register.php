<?php

    require "connection.php";

    $email = $_POST['email'];

    $duplicate_check_query = "SELECT * FROM users WHERE email = '$email'";
    $duplicate_result = mysqli_query($conn, $duplicate_check_query);

    if(mysqli_num_rows($duplicate_result) >0 ){
        die("duplicate");
    }
    
?>


