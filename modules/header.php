<?php
session_start();
if(isset($_SESSION['username'])){
$link='/evem/welcome.php';
$name="<label id='bor'>".$_SESSION['name']."</label>";
$hidden="";
}
else{
$link='/evem/index.php';
$name="<a id='bor' href='/evem/modals/login_modal.php'>LOGIN</a>";
$hidden="hidden";
}
echo " 	<nav id='mynavbar' class='menu-2'>
	<ul class='wtf-menu  topBotomBordersIn'>
  <li id='logo'>evem</li>
		<li> <a id='bor' href=$link>HOME</a> </li>
		<li> <a id='bor' href='/evem/php/event_list.php'>EVENTS</a> </li>
		<li> <a id='bor' href='/evem/php/search.php'>SEARCH</a> </li>
    	<li> <a id='bor' href='/evem/php/contact_us.php'>CONTACT US</a> </li>
		<li class='parent'>$name<ul class='submenu' $hidden>
				<li> <a href='#'>Account</a> </li>
				<li> <a href='/evem/php/logout.php'>Logout</a> </li>
			</ul>
		</li>
	</ul>
	</nav>";
  ?>
