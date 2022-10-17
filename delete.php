<?php

$db = mysqli_connect("localhost","root","","agency");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$flight_no = $_GET['flight_no']; // get id through query string

$del = mysqli_query($db,"delete from flight where flight_no = '$flight_no'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:homeadmin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>