<?php
include('conn.php');
$email=$_POST['email'];
$sql="select email,security_ques,security_ans from users where email='$email';";
$result=$conn->query($sql);
if($result->num_rows==1){
    $r=$result->fetch_assoc();
    $esqsa=array("email_check"=>'true',"security_ques"=>$r[security_ques],"security_ans"=>$r[security_ans]);
    $esqsa=json_encode($esqsa);
    echo $esqsa;
    }
else{
    $esqsa=array("email_check"=>'false');
    $esqsa=json_encode($esqsa);
    echo $esqsa;
  }
 ?>
