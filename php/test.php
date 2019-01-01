<?php include('conn.php');

$v=$_POST['var'];
$s=$conn->query("insert into test(val) values('$v')");

 ?>
