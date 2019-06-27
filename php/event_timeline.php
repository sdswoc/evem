<?php
session_start();
include('conn.php');

function show($s)
{
  if ($s->num_rows>0) {
    while ($r=$s->fetch_assoc()) {
      echo "  <div class='timeline__item '>
          <div class='timeline__content '>
            <h2>$r[name]</h2>
            <h5>$r[sti] - $r[eti]</h5>    <h5>$r[da]</h5>
            <p class='text-truncate'>$r[description]</p>
          </div>
        </div>";
    }
  }
}

if($_SESSION[index]==0)
{
  $s=$conn->query("select *,DATE_FORMAT(date, '%D %M %y') 'da',TIME_FORMAT(start_at, '%h:%i %p') 'sti',TIME_FORMAT(end_at, '%h:%i %p') 'eti' from events order by date asc, start_at asc;");
  $_SESSION[index]=1;
  show($s);
}

if(isset($_SESSION[username]))
{
  $u=$_SESSION[username];
  $p="select * from event_$u order by date asc, start_at asc";
  $id=$conn->query($p);
    if($id->num_rows>0){
      while($i=$id->fetch_assoc()){
          $s=$conn->query("select *,DATE_FORMAT(date, '%D %M') 'da',TIME_FORMAT(start_at, '%h:%i %p') 'sti',TIME_FORMAT(end_at, '%h:%i %p') 'eti' from events where id=$i[event_no] order by date asc, start_at asc;");
            show($s);
            }
    }
    else{
      echo "No Event Found";
    }
}

 ?>
