<?php
include('conn.php');

$e=$conn->query("select id from events;");

while($e_r=$e->fetch_assoc()){
$c=0;
$r=0;
$f=$conn->query("select rating from feedback where id=$e_r[id];");

   while($f_r=$f->fetch_assoc())
      {
		      	$c=$c+$f_r[rating];
		      	$r++;
      }
$s=$c/$r;
	$sql="update events set rating=$s where id=$e_r[id];";
	$conn->query($sql);
}
 ?>
