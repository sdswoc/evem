<?php
include('conn.php');
include('check_event_user.php');
$sql="select *,DATE_FORMAT(date, '%D %b %y') 'da',TIME_FORMAT(start_at, '%h:%i %p') 'sti',TIME_FORMAT(end_at, '%h:%i %p') 'eti' from events order by date asc, start_at asc;";
  $result=$conn->query($sql);
  echo "<table class='table'>
  <tr class='card-body shadow p-3 rounded'>

      <td><h4>Name</h4></td>
      <td><h4>Description</h4></td>
      <td><h4>Date</h4></td>
      <td><h4>Start At</h4></td>
      <td><h4>End At</h4></td>
      <td><h4>Venue</h4></td>
      <td><h4>For</h4></td>
      <td><h4>Contact</h4></td>
      <td><h4>Rating</h4></td>
      <td><h4>Feedback</h4></td>
      <td><h4>Going?</h4></td>

  </tr>

    ";
    if($result->num_rows>0){

while($r=$result->fetch_assoc()){

  $check_value=check_event($r['id']);
  echo "    <tr class='card-body p-4 shadow rounded'>
              <td>$r[name]</td>
              <td>$r[description]</td>
              <td>$r[da]</td>
              <td>$r[sti]</td>
              <td>$r[eti]</td>
              <td>$r[venue]</td>
              <td>$r[for_people]</td>
              <td>$r[contact]</td>
              <td>$r[rating]</td>
              <td><a href='http://localhost/evem/php/feedback.php?i=$r[id]'>Feedback</a></td>
              <td><label><input type='checkbox' class='ios-switch bigswitch' id='toggle$r[id]' onclick='go$r[id]()'/><div><div></div></div></label>
              <script>
              document.getElementById('toggle$r[id]').checked =$check_value;
                function go$r[id](){
                  let v=document.getElementById('toggle$r[id]').checked;
                  $.post('interested_user.php', {checked_value: v,id:'$r[id]'});
                }
              </script>
            </td>
          </tr>";
}
echo "</table>"
;
}
else{
  echo "No Event Found";
}

 ?>
