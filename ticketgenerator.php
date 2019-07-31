<?php
include 'connection.php';
session_start();
$user_id          = $_SESSION['admin_id'];
// $response = [];
$sql = "INSERT INTO Token_table(`user_id`) VALUES ($user_id)";
mysqli_query($con,$sql);
$last_id = mysqli_insert_id($con);
exit(json_encode($last_id));
?>
