<?php
session_start();
include('conn.php');
$host  = $_SERVER['HTTP_HOST'];
$uri="/index.php";
$index_url="http://".$host.$uri;
$e = htmlspecialchars($_SESSION['email']);
$logged_in="update users set logged_in=0 where email='$e' or username='$e';";
$conn->query($logged_in);
if (session_destroy()) {
header("Location: $index_url");
 exit;
} ?>
