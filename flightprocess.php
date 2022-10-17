<?php
require_once('config.php');
?>
<?php
// getting user entered data
if(isset($_POST)){

	$flight_no 			= $_POST['flight_no'];
	$arrival_airport 	= $_POST['arrival_airport'];
	$arrival_date 		= $_POST['arrival_date'];
	$arrival_time		= $_POST['arrival_time'];
	$departure_airport 	= $_POST['departure_airport'];
	$departure_date		= $_POST['departure_date'];
	$departure_time 	= $_POST['departure_time'];


		$sql = "INSERT INTO flight (flight_no, arrival_airport, arrival_date, arrival_time, departure_airport, departure_date, departure_time) VALUES(?,?,?,?,?,?,?)"; 
		$stmtinsert = $db->prepare($sql); // preparering above 'sql' variable to be execute 
		$result = $stmtinsert->execute([$flight_no, $arrival_airport, $arrival_date, $arrival_time, $departure_airport, $departure_date, $departure_time]); // posting data into the data base
		if($result){
			echo 'Successfully updated.';
		
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
