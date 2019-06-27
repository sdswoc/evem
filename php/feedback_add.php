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
$host  = $_SERVER['HTTP_HOST'];
$uri="/php/feedback.php?i=$id";
$feedback_add_uri="http://".$host.$uri;
header( "Location: $feedback_add_uri" );

 ?>
