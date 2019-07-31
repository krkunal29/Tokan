<?php
include 'connection.php';
// $user_id = $_SESSION['admin_id'];
$response = [];
$sql = "SELECT tokenid from Token_table where status =0  ORDER By tokenid asc LIMIT 1";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  $row = mysqli_fetch_array($result);
  $response['tokenid'] = $row['tokenid'];
}


exit(json_encode($response));
 ?>
