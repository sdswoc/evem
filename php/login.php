<?php
session_start();
include('conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $logout_previous="update users set logged_in=0;";
  $conn->query($logout_previous);
if (isset($_POST['email']) && isset($_POST['password'])) {
$e = htmlspecialchars($_POST['email']);
$p =htmlspecialchars($_POST['password']);
$sql = "select * from users where (email='$e' or username='$e') and password='$p';";
$logged_in="update users set logged_in=1 where email='$e' or username='$e';";

$conn->query($logged_in);
$result=$conn->query($sql);
$h=$result->fetch_assoc();

if ($result->num_rows==1) {
$_SESSION[id]=$h[id];
$_SESSION[name]=$h[name];
$_SESSION[email]=$h[email];
$_SESSION[username]=$h[username];
$_SESSION[organizer]=$h[organizer];
 echo "true";
  $conn->close();

  }
  else {
          if ($result->num_rows==0) {
          echo "false";
          }
  }
}
}
else {
  echo "Error";
}
 ?>
