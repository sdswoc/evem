<?php
include('conn.php');
session_start();
$username=$_SESSION[username];
$sql="select *,DATE_FORMAT(date, '%D %b %y') 'da',TIME_FORMAT(start_at, '%h:%i %p') 'sti',TIME_FORMAT(end_at, '%h:%i %p') 'eti' from events where by_organizer='$username' order by date;";

$result=$conn->query($sql);
if($result->num_rows>0){
echo "<table class='table'>
<tr class='card-body shadow p-3 rounded'>

    <td> S.No.</td>
    <td> Name </td>
    <td> Description</td>
    <td>Date</td>
    <td>Start At</td>
    <td>End At</td>
    <td>Venue</td>
    <td>For</td>
    <td>Contact</td>
    <td>Authorities</td>
    <td>Resources</td>
    <td></td>
</tr>
";
$i=1;
while (  $r=$result->fetch_assoc()) {

  echo "   <tr class='card-body p-4 shadow rounded'>
              <td>$i.</td>
              <td>$r[name]</td>
              <td>$r[description]</td>
              <td>$r[da]</td>
              <td>$r[sti]</td>
              <td>$r[eti]</td>
              <td>$r[venue]</td>
              <td>$r[for_people]</td>
              <td>$r[contact]</td>
              <td>$r[auth]</td>
              <td>$r[resources]</td>
              <td> <a href=event_edit.php?id=$r[id]>Edit</a></td>
              </tr>                                   ";
              $i++;
}
echo " </table>";
}
else{
  echo "No Record Found";
}

 ?>
