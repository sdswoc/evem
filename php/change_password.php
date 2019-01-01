<?php
include('conn.php');

$email=$_POST['email'];
$new_password=$_POST['new_password'];

$p="update users set password='$new_password' where email='$email';";
if($conn->query($p))
  echo "Password Changed";
else
  echo $sql;
 ?>
