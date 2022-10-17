<?php
require_once('config.php');
?>
<?php
// getting user entered data
if(isset($_POST)){

	$serial_no 		= $_POST['serial_no'];
	$flight_no 		= $_POST['flight_no'];
	$validity 		= $_POST['validity'];
	$f_class 		= $_POST['f_class'];
	$seat_no 		= $_POST['seat_no'];
	$reference_no	= $_POST['reference_no'];
	$passport_no 	= $_POST['passport_no'];


		$sql = "INSERT INTO tickets (serial_no, flight_no, validity, f_class, seat_no, reference_no, passport_no ) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql); // preparering above 'sql' variable to be execute 
		$result = $stmtinsert->execute([$serial_no, $flight_no, $validity, $f_class, $seat_no, $reference_no, $passport_no]); // posting data into the data base
		if($result){
			echo 'Successfully saved.';
		
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
