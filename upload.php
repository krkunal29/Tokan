<?php

session_start();

include 'connection.php';

$uid = $_SESSION['patient_id'];;

$targetDir = 'patient_images/';
if (!empty($_FILES)) {
 $targetFile = $targetDir.time().'-'. $_FILES['userImage']['name'];
 $extension = '.jpg';
 $fname=$uid.$extension;
 move_uploaded_file($_FILES['userImage']['tmp_name'],$targetDir.$fname);
}
?>
