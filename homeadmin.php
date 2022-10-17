<?php

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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Go Tours Admin</title>
        <link rel="stylesheet" href="csshome/bootstrap.min.css">
        <link rel="stylesheet" href="csshome/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="csshome/style.css">
        <link rel="stylesheet" href="csshome/tablestyle2.css">

    </head>
    <body>
        
        <header id="home" style="background-image: url(csshome/back.jpg);">
            <div class="overlay">
                <div class="container">
                    <div>
                        <h1><span>Welcome</span><br>Go Tours Admins Site</h1>
                    </div>
                </div>
            </div>
        </header>
                       
        <div class="about-us" id="about">
            <div class="small-container">
                <h2 class="text-center">Go Tours <span>New Admin</span></h2>
                <p class="text-center"> </p>
                <div>
                    <div class="container">
                        <div class="text-center">
                                <h4 class="text-center">To Add New Admin To This Site Click Below</span></h4>
                                <button class="text-center"><a href="newadmin.php" class="text-capitalize">Add New Admin</a></button>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>

        <div class="about-us" id="about">
            <div class="small-container">
                <h2 class="text-center">Go Tours <span>New Reservations</span></h2>
                <p class="text-center"> </p>
                <div>
                    <div class="container">
                        <div class="text-center">
                        <div>
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
                                <td><a href="deletep.php?passport_no=<?php echo $data['passport_no']; ?>">Delete</a></td>
                            </tr> 
                            <?php
                            }
                            ?>
                        </table>
                        
                    </div>
                        </div>
                    </div>
                    <br>
                    
                <div>
                    <div class="container">
                        <div class="text-center">
                                <h4 class="text-center">To View Full Details</span></h4>
                                <button class="text-center"><a href="passengersdata.php" class="text-capitalize">Full Details</a></button>
                        </div>
                    </div>
                </div>

                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>

        <div class="about-us" id="about">
            <div class="small-container">
                <h2 class="text-center">Go Tours <span>Pending Ticket Informations</span></h2>
                <p class="text-center"> </p>
                <div>
                    <div class="container">
                        <div class="text-center">
                        <div>
                        <table>
                            <div class="th">
                            <tr>
                            <th>Serial Number</th>
                            <th>Flight Number</th>
                            <th>Validity</th>
                            <th>Class</th>
                            <th>Seat Number</th>
                            <th>Reference Number</th>
                            <th>Passport Number</th>
                            <th></th>
                            <th></th>
                            </tr>
                            </div>

                            <?php

                            $records = mysqli_query($db,"SELECT * FROM tickets"); // fetch data from database

                            while($data = mysqli_fetch_array($records))
                            {
                            ?>
                            <tr>
                                <td><?php echo $data['serial_no']; ?></td>
                                <td><?php echo $data['flight_no']; ?></td>
                                <td><?php echo $data['validity']; ?></td>
                                <td><?php echo $data['f_class']; ?></td>
                                <td><?php echo $data['seat_no']; ?></td>
                                <td><?php echo $data['reference_no']; ?></td>  
                                <td><?php echo $data['passport_no']; ?></td>   
                                <td><a href="ticketedit.php">Edit</a></td>
                                <td><a href="deletetic.php?serial_no=<?php echo $data['serial_no']; ?>">Delete</a></td>
                            </tr> 
                            <?php
                            }
                            ?>
                        </table>
                        
                    </div>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>

        <div class="about-us" id="about">
            <div class="small-container">
                <h2 class="text-center">Go Tours <span>Tickets</span></h2>
                <p class="text-center"> </p>
                <div>
                    <div class="container">
                        <div class="text-center">
                                <h4 class="text-center">To Update Ticket Informations Click Below</span></h4>
                                <button class="text-center"><a href="tickets.php" class="text-capitalize">Enter Ticket Details</a></button>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>

        <div class="about-us" id="about">
            <div class="small-container">
                <h2 class="text-center">Go Tours <span>Current Flight Shedule</span></h2>
                <p class="text-center"> </p>
                <div>
                    <div class="container">
                        <div class="text-center">
                        <div>
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
                            <th></th>
                            </tr>
                            </div>

                            <?php

                            $records = mysqli_query($db,"SELECT * FROM flight"); // fetch data from database

                            while($data = mysqli_fetch_array($records))
                            {
                            ?>
                            <tr>
                                <td><?php echo $data['flight_no']; ?></td>
                                <td><?php echo $data['arrival_airport']; ?></td>
                                <td><?php echo $data['arrival_date']; ?></td>
                                <td><?php echo $data['arrival_time']; ?></td>
                                <td><?php echo $data['departure_airport']; ?></td>
                                <td><?php echo $data['departure_date']; ?></td>  
                                <td><?php echo $data['departure_time']; ?></td>   
                                <td><a href="flightedit.php">Edit</a></td>
                                <td><a href="delete.php?flight_no=<?php echo $data['flight_no']; ?>">Delete</a></td>
                            </tr> 
                            <?php
                            }
                            ?>
                        </table>
                        
                    </div>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>

        <div class="about-us" id="about">
            <div class="small-container">
                <h2 class="text-center">Go Tours <span>Flight Shedule</span></h2>
                <p class="text-center"> </p>
                <div>
                    <div class="container">
                        <div class="text-center">
                                <h4 class="text-center">To Add New Flight Record In To Go Tours Flight Shedule Click Below</span></h4>
                                <button class="text-center"><a href="flight.php" class="text-capitalize">Add Records</a></button>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>
        
        <footer>
            <div class="container">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <br>
                            <h5 class="text-uppercase">Log Out</h5>
                            <ul>
                                <li><a href="logoutuser.php?logout=true">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </footer>
        
        <script src="jshome/jquery-3.3.1.min.js"></script>
        <script src="jshome/bootstrap.min.js"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header').height(winH);  
                
                $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
                
                $('.navbar ul li a.search').on('click', function (e) {
                    e.preventDefault();
                });
                $('.navbar a.search').on('click', function () {
                    $('.navbar form').fadeToggle();
                });
                
                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            })
        </script>
    </body>
</html>