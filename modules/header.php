<?php
session_start();
if (isset($_SESSION['username'])) {
	$link = '/welcome.php';
	$name = "<label id='bor'>" . $_SESSION['name'] . "</label>";
	$hidden = "";
} else {
	$link = '/';
	$name = "<a id='bor' href='../modals/login_modal.php'>LOGIN</a>";
	$hidden = "hidden";
}
echo " 	<nav id='mynavbar' class='menu-2'>
	<ul class='wtf-menu  topBotomBordersIn'>
  <li id='logo'><a href='/welcome.php'>evem</a></li>
		<li> <a id='bor' href=$link>HOME</a> </li>
		<li> <a id='bor' href='/php/event_list.php'>EVENTS</a> </li>
		<li> <a id='bor' href='/php/search.php'>SEARCH</a> </li>
    	<li> <a id='bor' href='/php/contact_us.php'>CONTACT US</a> </li>
		<li class='parent'>$name<ul class='submenu' $hidden>
				<li> <a href='/php/account.php'>Account</a> </li>
				<li> <a href='/php/logout.php'>Logout</a> </li>
			</ul>
		</li>
	</ul>
	</nav>";
