<?php

require "connection.php";

$note_id = $_GET['note_id'];

$update_note_query = "UPDATE motivations set desk = 2 WHERE id = $note_id";
$result = mysqli_query($conn, $update_note_query);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>


