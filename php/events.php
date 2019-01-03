<?php
session_start();
include('conn.php');
include('check_event_user.php');

$host  = $_SERVER['HTTP_HOST'];
$uri="/evem/index.php";
$index_url="http://".$host.$uri;

$login_check="select logged_in from users where logged_in=1;";
$result=$conn->query($login_check);
$login=$result->fetch_assoc();

$sql="select *,DATE_FORMAT(date, '%D %b %y') 'da',TIME_FORMAT(start_at, '%h:%i %p') 'sti',TIME_FORMAT(end_at, '%h:%i %p') 'eti' from events order by date asc, start_at asc;";
  $result=$conn->query($sql);
  echo "<table class='table'>
  <tr class='card-body shadow p-3 rounded bg-yellow row' id='t'>

      <td class='font-weight-bold col border-0'><h4>Name</h4></td>
      <td class='font-weight-bold  col-2 border-0'><h4>Description</h4></td>
      <td class='font-weight-bold text-center col border-0'><h4>Date</h4></td>
      <td class='font-weight-bold text-center col border-0'><h4>Start At</h4></td>
      <td class='font-weight-bold text-center col border-0'><h4>End At</h4></td>
      <td class='font-weight-bold text-center col border-0'><h4>Venue</h4></td>
      <td class='font-weight-bold text-center col-1 border-0'><h4>For</h4></td>
      <td class='font-weight-bold text-center col border-0'><h4>Contact</h4></td>
      <td class='font-weight-bold text-center col-1 border-0'><h4>Rating</h4></td>";
      if($login['logged_in']!=1)
        echo "</tr>";

      else
       echo "  <td class='font-weight-bold text-center col border-0'><h4>Feedback</h4></td>
                <td class='font-weight-bold text-center col border-0'><h4>Going?</h4></td></tr>  ";

    if($result->num_rows>0){

while($r=$result->fetch_assoc()){

  $check_value=check_event($r['id']);
  echo "    <tr class='card-body p-4 shadow rounded row'>
              <td class=' col'><a href='#' id='event_desc$r[id]'>$r[name]</a></td>
              <td class=' col-2 text-truncate'>$r[description]</td>
              <td class='text-center col'>$r[da]</td>
              <td class='text-center col'>$r[sti]</td>
              <td class='text-center col'>$r[eti]</td>
              <td class='text-center col'>$r[venue]</td>
              <td class='text-center col-1'>$r[for_people]</td>
              <td class='text-center col'>$r[contact]</td>
              <td class='text-center col-1'>$r[rating]</td>";
              if($login['logged_in']!=1)
                echo "</tr>";
              else
                echo "  <td class='text-center col'><a href='/evem/php/feedback.php?i=$r[id]'>Feedback</a></td>
                      <td class='text-center col'><label><input type='checkbox' class='ios-switch bigswitch' id='toggle$r[id]' onclick='go$r[id]()'/><div><div></div></div></label>
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
echo "</table>";
}
else{
  echo "No Event Found";
}

 ?>
