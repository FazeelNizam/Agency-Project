<?php
require_once('config.php');
?>
<?php

// getting user entered data
if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= $_POST['password'];


		$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql); // preparering above 'sql' variable to be execute
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]); // posting data into the data base
		if($result){
			echo 'Successfully saved.';
		
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
