<?php
include('conn.php');
$name=$_POST['name'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$email=$_POST['email'];
$username=$_POST['username'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$enroll=$_POST['enroll'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$organizer=$_POST['organizer'];
$security_ques=$_POST['security_ques'];
$security_ans=$_POST['security_ans'];
$sql="insert into users(name,password,email,gender,mobile,enroll,branch,year,organizer,security_ques,security_ans,username) values('$name','$password','$email','$gender','$mobile','$enroll','$branch',$year,'$organizer','$security_ques','$security_ans','$username')";
$create_event_table_user="create table event_$username(event_no int);";

$conn->query($create_event_table_user);
if ($conn->query($sql)==true) {
      echo "Sign up successful";
header( "refresh:5;url=http://localhost/evem/login.html" );
}
 ?>
