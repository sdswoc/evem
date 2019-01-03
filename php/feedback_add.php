<?php
session_start();
include('conn.php');
$id=$_POST[id];
$rating=$_POST[rating];
$feedback=$_POST[feedback];
$username=$_SESSION[username];
$sql="insert into feedback values($rating,'$feedback','$username',$id,now());";
$conn->query($sql);
echo "$sql";
header( "Location: http://localhost/evem/php/feedback.php?i=$id" );

 ?>
