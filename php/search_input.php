<?php
include('conn.php');
$choice=$_POST[choice];
$search_input=$_POST[search_input];
$sql="select * from events where $choice='$search_input';";

$result=$conn->query($sql);
if ($result->num_rows>0) {
echo "<table>
<tr>
    <td>Date</td>
    <td> Name </td>
    <td> Description</td>
    <td>Start At</td>
    <td>End At</td>
    <td>Venue</td>
    <td>For</td>
    <td>Contact</td>
    <td>Rating</td>
    <td>Feedback</td>
</tr>
  ";

  while ($r=$result->fetch_assoc()) {
    echo "    <tr>
                <td>$r[date]</td>
                <td>$r[name]</td>
                <td>$r[description]</td>
                <td>$r[start_at]</td>
                <td>$r[end_at]</td>
                <td>$r[venue]</td>
                <td>$r[for_people]</td>
                <td>$r[contact]</td>
                <td>$r[rating]</td>
                <td><a href='/php/feedback.php?i=$r[id]'>Feedback</a></td>
                </tr>
                ";

  }
}
else {
  echo "No Event Found";
}

 ?>
