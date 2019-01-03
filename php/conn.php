<?php
$servername = 'localhost';
$username = 'evem';
$password = 'evem123';
$db = 'evem';
$conn = new mysqli($servername,$username,$password,$db);
if($conn->error){
 die("connection_failed".$conn->connect_error);
}


 ?>
