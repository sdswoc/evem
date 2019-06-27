<?php
session_start();
include('conn.php');
$i=$_SESSION[id];
$sql="select *,DATE_FORMAT(date, '%D %b %y') 'da',TIME_FORMAT(date, '%h:%i %p') 'ti' from feedback where id=$i order by date;";

$result=$conn->query($sql);
echo "<table class='table'>
<tr class='card-body shadow p-3 rounded'>
              <tr>
                <td>S.No.</td>
                <td>Rating</td>
                <td>Feedback</td>
                <td>By</td>
                <td>On</td>
              </tr>";
  $c=0;
while ($r=$result->fetch_assoc()) {
  $c++;
  $u="select * from users where username='$r[username]';";
  $sr=$conn->query($u);
  $s=$sr->fetch_assoc();
  echo "<tr class='card-body p-4 shadow rounded'>
            <td>$c</td>
            <td>$r[rating]</td>
            <td>$r[feedback]</td>
            <td>$s[name]</td>
            <td>$r[da] - $r[ti]</td>
          </tr>        ";

}
echo "</table>";
 ?>
