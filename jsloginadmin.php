<?php
session_start();
require_once('config.php');

// Creating variables
$name 		= $_POST['name'];
$password 	= $_POST['password'];

$sql = "SELECT * FROM admin WHERE name = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$name, $password]);

// checking and validating the entered password and username
if($result){
	$admin = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['adminlogin'] = $admin;
		echo 'Loged in successfully';
	}else{
		echo 'There no user for that combo';		
	}
}else{
	echo 'There were errors while connecting to database.';
}