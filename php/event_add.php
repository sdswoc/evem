<?php
session_start();
include('conn.php');
$username=$_SESSION[username];
function check_data()
{
    include('conn.php');
    $s=$GLOBALS['start_at'];
    $e=$GLOBALS['end_at'];
    $d=$GLOBALS['date'];
    $sql="select * from events where end_at>=time('$s') and date='$d';";
    $r=$conn->query($sql);
    if($r->num_rows>0){
        while ($result=$r->fetch_assoc()) {
            $sql="select * from events where time('$result[start_at]')<=time('$e') and date='$d'; ";
              $s=$conn->query($sql);
                if($s->num_rows!=0) return false;
                else return true;
        }
      }
      else return true;

}
if(isset($_POST['id']))
{

      $event_name=$_POST['event_name'];
      $event_desc=$_POST['event_desc'];
      $start_at=$_POST['start_at'];
      $end_at=$_POST['end_at'];
      $date=$_POST['date'];
      $venue=$_POST['venue'];
      $for_people=$_POST['for_people'];
      $contact=$_POST['contact'];
      $auth=$_POST['auth'];
      $resources=$_POST['resources'];
      $by_organizer=$username;
      $id=$_POST['id'];
      $sql="update events set name='$event_name', description='$event_desc', start_at=time('$start_at'), end_at=time('$end_at') ,date=date('$date'),venue='$venue',for_people='$for_people',contact='$contact',auth='$auth',resources='$resources',by_organizer='$by_organizer' where id=$id;";
      $conn->query($sql);
      $_SESSION[msg_event]="Event Edited";

}

else{
$event_name=$_POST['event_name'];
$event_desc=$_POST['event_desc'];
$start_at=$_POST['start_at'];
$end_at=$_POST['end_at'];
$date=$_POST['date'];
$venue=$_POST['venue'];
$for_people=$_POST['for_people'];
$contact=$_POST['contact'];
$auth=$_POST['auth'];
$resources=$_POST['resources'];
$by_organizer=$username;


$sql="insert into events(name,description,start_at,end_at,date,venue,for_people,contact,auth,resources,by_organizer) values('$event_name','$event_desc','$start_at','$end_at','$date','$venue','$for_people','$contact','$auth','$resources','$by_organizer');";
echo $sql;
if(check_data()){
  if($conn->query($sql)==true)
    $_SESSION[msg_event]="Event Added";
  else
    $_SESSION[msg_event]="Error";
}
else
  $_SESSION[msg_event]="Error! Time Slot clashing!";
}
$host  = $_SERVER['HTTP_HOST'];
$uri="/php/event_manage.php";
$event_manage_url="http://".$host.$uri;
header( "Location:$event_manage_url" );
?>
