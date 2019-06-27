<?php
session_start();
include('conn.php');
$username=$_SESSION[username];
$sql="select * from event_$username;";

$id=$conn->query($sql);
$v=$id->num_rows;
if($v>4)
$v=4;

?>
