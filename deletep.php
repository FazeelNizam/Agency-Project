<?php

$db = mysqli_connect("localhost","root","","agency");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

$passport_no = $_GET['passport_no']; // get id through query string

$del = mysqli_query($db,"delete from passengers where passport_no = '$passport_no'"); // delete query

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