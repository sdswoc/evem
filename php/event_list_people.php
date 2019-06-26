<?php
include('conn.php');
session_start();
$username=$_SESSION[username];
$sql="select * from event_$username order by date asc, start_at asc;";

$id=$conn->query($sql);
$v=$id->num_rows;
if($v>0){


while($i=$id->fetch_assoc()){

    $s="select *,DATE_FORMAT(date, '%D %M %y') 'da',TIME_FORMAT(start_at, '%h:%i %p') 'sti',TIME_FORMAT(end_at, '%h:%i %p') 'eti' from events where id=$i[event_no] order by date asc, start_at asc;";

    $result=$conn->query($s);
if($result->num_rows>0){
$r=$result->fetch_assoc();
  echo "    <div class='entry'>
             <div class='title'>
               <h3 id='d'>$r[da]</h3>
               <p>$r[sti] - $r[eti]</p>
                  <hr>
               <h3>$r[venue]</h3>
             </div>
             <div class='timebody'>
               <p id='en'>$r[name]</p>
               <ul>
                 <li id='desc'>$r[description]</li>
                 <li>For : $r[for_people]</li>
                 <li id='contact'>Contact : $r[contact] </li>
                 <li id='rating'>Rating : $r[rating]</li>
                 <li id='feedback'><a  href='/php/feedback.php?i=$r[id]'>Feedback</a></li>
               </ul>
             </div>
           </div>";
}
else{
  echo "No Event Found";
}
}
}
else {
echo "No Event Found";
}

 ?>
