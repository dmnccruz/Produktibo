<?php

// To delete an item, we need something to identify the data we want to delete
require "connection.php";

$taskId = $_GET['task_id'];

// $done_task_query = "DELETE FROM tasks WHERE id = $taskId";
// $result = mysqli_query($conn, $delete_task_query);

$done_task_query = "UPDATE tasks SET status_id = 4 WHERE id = $taskId"; 
$done_query = mysqli_query($conn, $done_task_query);
header('Location: ' . $_SERVER['HTTP_REFERER']);


?>