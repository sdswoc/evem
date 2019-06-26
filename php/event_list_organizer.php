<?php
include('conn.php');
session_start();
$username=$_SESSION[username];
$sql="select *,DATE_FORMAT(date, '%D %b %y') 'da',TIME_FORMAT(start_at, '%h:%i %p') 'sti',TIME_FORMAT(end_at, '%h:%i %p') 'eti' from events where by_organizer='$username' order by date;";

$result=$conn->query($sql);
if($result->num_rows>0){
echo "<table class='table'>
<tr class='card-body shadow p-3 rounded row'>

    <td class='col'>S.No.</td>
    <td class='col'>Name</td>
    <td class='col text-truncate'>Description</td>
    <td class='col'>Date</td>
    <td class='col'>Start At</td>
    <td class='col'>End At</td>
    <td class='col'>Venue</td>
    <td class='col'>For</td>
    <td class='col'>Contact</td>
    <td class='col'>Authorities</td>
    <td class='col'>Resources</td>
    <td class='col'></td>
</tr>
";
$i=1;
while (  $r=$result->fetch_assoc()) {

  echo "   <tr class='card-body p-4 shadow rounded row'>
              <td class='col'>$i.</td>
              <td class='col'>$r[name]</td>
              <td class='col'>$r[description]</td>
              <td class='col'>$r[da]</td>
              <td class='col'>$r[sti]</td>
              <td class='col'>$r[eti]</td>
              <td class='col'>$r[venue]</td>
              <td class='col'>$r[for_people]</td>
              <td class='col'>$r[contact]</td>
              <td class='col'>$r[auth]</td>
              <td class='col'>$r[resources]</td>
              <td class='col'> <a href='/php/event_edit.php?id=$r[id]'>Edit</a></td>
              </tr>";
              $i++;
}
echo " </table>";
}
else{
  echo "No Record Found";
}

 ?>
