<?php

session_start(); // starting session

if (!isset($_SESSION['userlogin'])) {
	header("Location: index.php");
}

// end session and redirect to the home page if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION);
	header("Location: index.php");
}

?>


<a href="logoutuser.php?logout=true">Logout</a>