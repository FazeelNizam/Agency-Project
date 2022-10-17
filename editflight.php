<?php
        
    $con = mysqli_connect("localhost","root",""); // connecting to database
    mysqli_select_db($con, 'agency'); // selecting the database
    $sql = "UPDATE flight SET flight_no='$_POST[flight_no]',arrival_airport='$_POST[arrival_airport]',arrival_date='$_POST[arrival_date]',arrival_time='$_POST[arrival_time]',departure_airport='$_POST[departure_airport]',departure_date='$_POST[departure_date]',departure_time='$_POST[departure_time]' WHERE flight_no='$_POST[flight_no]'"; // update data row data
    if(mysqli_query($con, $sql))
        header("refresh:1; url=flightedit.php"); // refresh and redirrect to page
    else
        echo "Not Updated";

?>

