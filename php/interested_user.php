<?php
session_start();
include('conn.php');

$c_v=$_POST['checked_value'];
$i=(int)$_POST['id'];
if ($c_v=='true') {
  $result=$conn->query("select date, start_at from events where id=$i");
  $r=$result->fetch_assoc();
  $conn->query("insert into event_$_SESSION[username] values($i,'$r[date]','$r[start_at]')");
}
else {
  $conn->query("delete from event_$_SESSION[username] where event_no=$i;");
}


 ?>
