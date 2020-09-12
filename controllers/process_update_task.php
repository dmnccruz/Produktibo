
<?php
    session_start();

    require "connection.php";

    $name = $_POST['task'];
    $user_id = $_POST['taskuser_id'];
  
    // $user_id = $_SESSION['user']['id'];

    $update_first_query = "UPDATE tasks SET name = '$name' WHERE id = $user_id";

    $update_first = mysqli_query($conn, $update_first_query);


    header('Location: ' . $_SERVER['HTTP_REFERER']);
    
?>
