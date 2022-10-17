<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Flight Informations</title>
	<link rel="stylesheet" type="text/css" href="cssshed/mystyle.css">
	<link rel="stylesheet" type="text/css" href="cssshed/button.css">
<h1>Edit Flight Informations</h1>
</head>
<STYLE>A {text-decoration: none;} </STYLE>
<body>

    
	<?php
            // connecting to the data base and selecting the table        
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con, 'agency');
            $sql = "SELECT * FROM flight";
            $records = mysqli_query($con, $sql);

        ?>

        <table>

        	<div class="th">
            <tr>
                <th>Flight Number</th>
                <th>Arrival Airport</th>
                <th>Arrival Date</th>
                <th>Arrival Time</th>
                <th>Departure Airport</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
                <th></th>
            </tr>
        </div>

            <?php
            // fetching data in to html page and allowing to eddit data throug html page
            while($row = mysqli_fetch_array($records)){
                echo "<tr><form action = editflight.php method = post>";
                echo "<td><input type=text name=flight_no value='".$row['flight_no']."'></td>";
                echo "<td><input type=text name=arrival_airport value='".$row['arrival_airport']."'></td>";
                echo "<td><input type=date name=arrival_date value='".$row['arrival_date']."'></td>";
                echo "<td><input type=time name=arrival_time value='".$row['arrival_time']."'></td>";
                echo "<td><input type=text name=departure_airport value='".$row['departure_airport']."'></td>";
                echo "<td><input type=date name=departure_date value='".$row['departure_date']."'></td>";
                echo "<td><input type=time name=departure_time value='".$row['departure_time']."'></td>";
                echo "<td><input type=submit></td>";
                echo "</form></tr>";
            }
            
            ?>
         </table>

    <br>
    <div>
        <a href="homeadmin.php" style="color: #FFFFFF">Back To Home</a>
    </div>

</body>
</html>