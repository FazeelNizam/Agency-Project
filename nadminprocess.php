<?php
require_once('config.php');
?>
<?php
// getting user entered data
if(isset($_POST)){

	$name 		= $_POST['name'];
	$position 	= $_POST['position'];
	$email 		= $_POST['email'];
	$tel_no		= $_POST['tel_no'];
	$password 	= $_POST['password'];


		$sql = "INSERT INTO admin (name, position, email, tel_no, password ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql); // preparering above 'sql' variable to be execute 
		$result = $stmtinsert->execute([$name, $position, $email, $tel_no, $password]); // posting data into the data base
		if($result){
			echo 'Successfully saved.';
		
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
