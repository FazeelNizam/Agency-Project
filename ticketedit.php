<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Ticket Informations</title>
	<link rel="stylesheet" type="text/css" href="cssshed/mystyle.css">
	<link rel="stylesheet" type="text/css" href="cssshed/button.css">
<h1>Edit Ticket Informations</h1>
</head>
<STYLE>A {text-decoration: none;} </STYLE>
<body>

	<?php
            // connecting to the data base and selecting the table  
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con, 'agency');
            $sql = "SELECT * FROM tickets";
            $records = mysqli_query($con, $sql);

        ?>

        <table>

        	<div class="th">
            <tr>
                <th>Serial Number</th>
                <th>Flight Number</th>
                <th>Validity</th>
                <th>Class</th>
                <th>Seat Number</th>
                <th>Reference Number</th>
                <th>Pasport Number</th>
                <th></th>
            </tr>
        </div>

            <?php
            
            // fetching data in to html page and allowing to eddit data throug html page
            while($row = mysqli_fetch_array($records)){
                echo "<tr><form action = editticket.php method = post>";
                echo "<td><input type=text name=serial_no value='".$row['serial_no']."'></td>";
                echo "<td><input type=text name=flight_no value='".$row['flight_no']."'></td>";
                echo "<td><input type=date name=validity value='".$row['validity']."'></td>";
                echo "<td><input type=text name=f_class value='".$row['f_class']."'></td>";
                echo "<td><input type=text name=seat_no value='".$row['seat_no']."'></td>";
                echo "<td><input type=text name=reference_no value='".$row['reference_no']."'></td>";
                echo "<td><input type=text name=passport_no value='".$row['passport_no']."'></td>";
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