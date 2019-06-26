<?php
session_start();
include('conn.php');
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$enroll = $_POST['enroll'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$organizer = $_POST['organizer'];
$security_ques = $_POST['security_ques'];
$security_ans = $_POST['security_ans'];
$alter_event_user_table_name = "alter table event_$_SESSION[username] rename to event_$username;";
$sql = "update users set name='$name', password='$password', email='$email', username='$username',gender='$gender',mobile='$mobile',enroll='$enroll', branch='$branch', year='$year',organizer='$organizer', security_ques='$security_ques', security_ans='$security_ans' where id=$id;";
$conn->query($alter_event_user_table_name);
if ($conn->query($sql)) {
  $_SESSION[msg_account] = "Changes Saved";
  $_SESSION[name] = $name;
  $_SESSION[email] = $email;
  $_SESSION[username] = $username;
  $_SESSION[organizer] = $organizer;
  $host  = $_SERVER['HTTP_HOST'];
  $uri = "/php/account.php";
  $index_url = "http://" . $host . $uri;
  header("Location: $index_url");
}
