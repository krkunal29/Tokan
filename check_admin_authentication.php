<?php
include 'connection.php';

$email    = $_POST['email'];
$password = $_POST['password'];
$response = [];
$sql = "SELECT id,username,password FROM admin_login WHERE username = '$email' AND password = '$password'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  session_start();
  $row = mysqli_fetch_array($result);
   $_SESSION['admin_id'] =$row['id'];
  $response['success'] = 'true';
}
else {
  $response['error'] = 'false';
}

exit(json_encode($response));
 ?>
