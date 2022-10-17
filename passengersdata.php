<?php

// connecting to the database 
$db = mysqli_connect("localhost","root","","agency");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pasenger Info</title>
	<link rel="stylesheet" type="text/css" href="cssshed/mystyle.css">
	<link rel="stylesheet" type="text/css" href="cssshed/button.css">
<h1>New Passenger Informations</h1>
</head>
<STYLE>A {text-decoration: none;} </STYLE>
<body>

						<table>
                            <div class="th">
                            <tr>
                            <th>Reference Number</th>
                            <th>Passport Number</th>
                            <th>Flight Number</th>
                            <th>Class</th>
                            <th>Seat Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Telephone Number</th>
                            <th></th>
                            </tr>
                            </div>

                            <?php

                            $records = mysqli_query($db,"SELECT * FROM passengers"); // fetch data from database

                            while($data = mysqli_fetch_array($records))
                            {
                            ?>
                            <tr>
                                <td><?php echo $data['reference_no']; ?></td>  
                                <td><?php echo $data['passport_no']; ?></td>
                                <td><?php echo $data['flight_no']; ?></td> 
                                <td><?php echo $data['f_class']; ?></td>
                                <td><?php echo $data['seat_no']; ?></td>
                                <td><?php echo $data['firstname']; ?></td>
                                <td><?php echo $data['lastname']; ?></td>
                                <td><?php echo $data['address']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['tel_no']; ?></td>
                                <td>
                                <div class="container-login100-form-btn">
						            <div class="wrap-login100-form-btn">
							            <div class="login100-form-bgbtn"></div>
							                <button type="button" name="button" id="login" class="login100-form-btn">
                                            <a href="deletep.php?passport_no=<?php echo $data['passport_no']; ?>">Delete</a>
							                </button>
						            </div>
					            </div>
                                </td>
                            </tr> 
                            <?php
                            }
                            ?>
                        </table>
    <br>
	<div>
		<a href="homeadmin.php" style="color: #FFFFFF">Back To Home</a>
	</div>
</table>
</body>
</html>

