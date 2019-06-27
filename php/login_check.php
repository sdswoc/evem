<?php
session_start();
include('conn.php');
$host  = $_SERVER['HTTP_HOST'];
$login_check="select * from users where logged_in=1;";
$result=$conn->query($login_check);
$r=$result->fetch_assoc();
if($r['logged_in']!=1)
{
  $uri="/index.php";
  $index_url="http://".$host.$uri;
  if($_SERVER[REQUEST_URI]!==$uri){
     session_destroy();
     header("Location: $index_url");
   }
 }
 else{
   $uri="/welcome.php";
   $welcome_url="http://".$host.$uri;
   $_SESSION[id]=$r[id];
   $_SESSION[name]=$r[name];
   $_SESSION[email]=$r[email];
   $_SESSION[username]=$r[username];
   $_SESSION[organizer]=$r[organizer];
   if($_SERVER[REQUEST_URI]==="/index.php")
      header("Location: $welcome_url");
  
 }
?>
