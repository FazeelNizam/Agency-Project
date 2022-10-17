<?php

$db = mysqli_connect("localhost","root","","agency");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$flight_no = $_GET['flight_no']; // get id through query string

$qry = mysqli_query($db,"SELECT * FROM flight WHERE flight_no='$flight_no'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $flight_no          = $_POST['flight_no'];
    $arrival_airport    = $_POST['arrival_airport'];
    $arrival_date       = $_POST['arrival_date'];
    $arrival_time       = $_POST['arrival_time'];
    $departure_airport  = $_POST['departure_airport'];
    $departure_date     = $_POST['departure_date'];
    $departure_time     = $_POST['departure_time'];
	
    $edit = mysqli_query($db,"UPDATE flight SET flight_no='$flight_no', arrival_airport='$arrival_airport', arrival_date='$arrival_date', arrival_time='$arrival_time', departure_airport='$departure_airport', departure_date='$departure_date', departure_time='$departure_time' WHERE flight_no='$flight_no'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:homeadmin.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<form method="POST">
  <input type="text" name="flight_no" value="<?php echo $data['flight_no'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="arrival_airport" value="<?php echo $data['arrival_airport'] ?>" placeholder="Enter Age" Required>
  <input type="text" name="arrival_date" value="<?php echo $data['arrival_date'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="arrival_time" value="<?php echo $data['arrival_time'] ?>" placeholder="Enter Age" Required>
  <input type="text" name="departure_airport" value="<?php echo $data['departure_airport'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="departure_date" value="<?php echo $data['departure_date'] ?>" placeholder="Enter Age" Required>
  <input type="text" name="departure_time" value="<?php echo $data['departure_time'] ?>" placeholder="Enter Full Name" Required>
  <input type="submit" name="update" value="Update">
</form>

