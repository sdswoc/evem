<?php
include('conn.php');

  $email_input=$_POST[email];
  if(isset($_POST[id])){
    $id=$_POST[id];
    $sql="select email from users where email like '%$email_input%' and id!=$id;";
  }
  else
    $sql="select email from users where email like '%$email_input%';";
  $result=$conn->query($sql);
  $n=$result->num_rows;
  if($n>0){
    echo "false";
  }
  else {
    echo "true";
  }
?>
