<?php
include('conn.php');
include('check_event_user.php');
$sql="select *,DATE_FORMAT(date, '%D %b %y') 'da',TIME_FORMAT(start_at, '%h:%i %p') 'sti',TIME_FORMAT(end_at, '%h:%i %p') 'eti' from events order by date asc, start_at asc;";
  $result=$conn->query($sql);
  echo "<table class='table'>
  <tr class='card-body shadow p-3 rounded row'>

      <td class='font-weight-bold col'><h4>Name</h4></td>
      <td class='font-weight-bold col text-truncate'><h4>Description</h4></td>
      <td class='font-weight-bold col'><h4>Date</h4></td>
      <td class='font-weight-bold col'><h4>Start At</h4></td>
      <td class='font-weight-bold col'><h4>End At</h4></td>
      <td class='font-weight-bold col'><h4>Venue</h4></td>
      <td class='font-weight-bold col'><h4>For</h4></td>
      <td class='font-weight-bold col'><h4>Contact</h4></td>
      <td class='font-weight-bold col'><h4>Rating</h4></td>
      <td class='font-weight-bold col'><h4>Feedback</h4></td>
      <td class='font-weight-bold col'><h4>Going?</h4></td>

  </tr>

    ";
    if($result->num_rows>0){

while($r=$result->fetch_assoc()){

  $check_value=check_event($r['id']);
  echo "    <tr class='card-body p-4 shadow rounded row'>
              <td class='col'><a href='#' id='event_desc$r[id]'>$r[name]</a></td>
              <td class='col'>$r[description]</td>
              <td class='col'>$r[da]</td>
              <td class='col'>$r[sti]</td>
              <td class='col'>$r[eti]</td>
              <td class='col'>$r[venue]</td>
              <td class='col'>$r[for_people]</td>
              <td class='col'>$r[contact]</td>
              <td class='col'>$r[rating]</td>
              <td class='col'><a href='/evem/php/feedback.php?i=$r[id]'>Feedback</a></td>
              <td class='col'><label><input type='checkbox' class='ios-switch bigswitch' id='toggle$r[id]' onclick='go$r[id]()'/><div><div></div></div></label>
              <script>
              document.getElementById('toggle$r[id]').checked =$check_value;
                function go$r[id](){
                  let v=document.getElementById('toggle$r[id]').checked;
                  $.post('interested_user.php', {checked_value: v,id:'$r[id]'});
                }
                $('#event_desc$r[id]').click(function(event){
                  event.preventDefault();
                      window.location.replace('/evem/php/event_desc.php?i=$r[id]');
                });
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
