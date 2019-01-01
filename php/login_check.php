<?php
session_start();
include('conn.php');
$host  = $_SERVER['HTTP_HOST'];
$uri="/evem/index.php";
$index_url="http://".$host.$uri;

$login_check="select logged_in from users where logged_in=1;";
$result=$conn->query($login_check);
$r=$result->fetch_assoc();
if($r['logged_in']!=1)
{
  header("Location: $index_url");
 }
?>
