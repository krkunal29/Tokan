<?php
include 'connection.php';
session_start();
$user_id = $_SESSION['admin_id'];

$sql ="SELECT tokenid, user_id, created_at,status FROM Token_table WHERE status=0 and user_id=$user_id";
$response = [];
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_array($result)){
    array_push($response,
    [
      'tokenid'      => $row['tokenid'],
      'user_id'    => $row['user_id'],
      'status'    => $row['status'],
      'created_at'    => $row['created_at']
    ]);
  };

}
exit(json_encode($response));
 ?>
