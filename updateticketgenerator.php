<?php
include 'connection.php';
session_start();
$user_id          = $_SESSION['admin_id'];
$sql = "UPDATE Token_table SET status=1 where status =0 and user_id=$user_id ORDER BY tokenid ASC LIMIT 1";
mysqli_query($con,$sql);
$last_id = mysqli_insert_id($con);
exit(json_encode($last_id));
?>
