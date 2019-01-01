<?php

function check_event($event_no){
session_start();
include('conn.php');
global $s;
$s="select * from event_$_SESSION[username] where event_no=$event_no;";
$r=$conn->query($s);
if ($r->num_rows>0)
  return "true";

else
  return "false";
}
?>
