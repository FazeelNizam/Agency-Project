<?php
require_once('config.php');
?>
<?php

// getting user entered data
if(isset($_POST)){

	$passport_no 	= $_POST['passport_no'];
	$flight_no 		= $_POST['flight_no'];
	$f_class 		= $_POST['f_class'];
	$seat_no 		= $_POST['seat_no'];
	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$address 		= $_POST['address'];
	$email			= $_POST['email'];
	$tel_no 		= $_POST['tel_no'];


		$sql = "INSERT INTO passengers (passport_no, flight_no, f_class, seat_no, firstname, lastname, address, email, tel_no ) VALUES(?,?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql); // preparering above 'sql' variable to be execute
		$result = $stmtinsert->execute([$passport_no, $flight_no, $f_class, $seat_no, $firstname, $lastname, $address, $email, $tel_no]); // posting data into the data base
		if($result){
			echo 'Successfully saved.';
		
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
