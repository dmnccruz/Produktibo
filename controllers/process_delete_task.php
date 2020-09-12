<?php

// To delete an item, we need something to identify the data we want to delete
require "connection.php";

$taskId = $_GET['task_id'];

$delete_task_query = "DELETE FROM tasks WHERE id = $taskId";
$result = mysqli_query($conn, $delete_task_query);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>