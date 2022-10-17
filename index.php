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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Go Tours</title>
        <link rel="stylesheet" href="csshome/bootstrap.min.css">
        <link rel="stylesheet" href="csshome/fontawesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="csshome/style.css">
        <link rel="stylesheet" href="csshome/tablestyle1.css">

    </head>
    <body>

        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <img src="imgs/logo.png" alt="#" />
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#agency">Agency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Shedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact Us</a>
                        </li>
                        <div class="d-flex ml-3 mb-4 mt-3 login_container">
                        <a href="login.php" class="far fa-user"></a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Banner -->
        <header id="home" style="background-image: url(csshome/back.jpg);">
            <div class="overlay">
                <div class="container">
                    <div>
                        <h1><span>Welcome</span><br>Go Tours</h1>
                        <p>Book your next vacation and experience the world like never before with Hayleys Travels, the premier Travel Agent in Sri Lanka. Covering a wide variety of destinations, we specialize in making travel personal, ensuring even the minute of details are taken care of, to ensure traveller expectations are exceeded.</p>
                        <button><a href="login.php" class="text-uppercase">book now</a></button>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- about agency -->
        <div class="about-us" id="about">
            <div class="small-container">
                <h2 class="text-center">See The <span> World</span></h2>
                <p class="text-center">Let Us Design Your Holiday</p>
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-12 text-center">
                                <div class="item">
                                    <img src="imgs/img2.jpg">
                                    <h5 class="text-uppercase">Restaurants</h5>
                                </div>
                                <div class="item">
                                    <img src="imgs/img1.jpg">
                                    <h5 class="text-uppercase">where to stay</h5>
                                </div>
                                <div class="item">
                                    <img src="imgs/img4.jpg">
                                    <div>
                                        <h5 class="text-uppercase">Sightseeing</h5>
                                        <p>Travel to your favorite places with us</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="imgs/img3.jpg">
                                    <h5 class="text-uppercase">shops and boutiques</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-right">
                                <h4 class="text-uppercase">Enjoy Your <span>Holiday</span></h4>
                                <p>Explore holiday ideas from top travel destinations around the globe. We offer holidays on every continent, from Antarctica to Europe, North America to South America, China to Saudi Arab, Africa and beyond! Tick off top travel destinations from your bucket-list with our range of holiday destinations.

Find Out More...</p>
                                <button class="text-center"><a href="login.php" class="text-capitalize">book now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>
        
        <!-- gallery -->
        <div class="services" id="service">
            <div class="container">
                <h2 class="text-capitalize">Enjoy Our Resorts <span>World Wide</span></h2>
                <p>Explore The World In Comfort</p>
            </div>
            <div class="small-container">
                <div id="slideToNext" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="imgs/pic4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic11.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic7.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic10.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic8.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic9.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imgs/pic5.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#slideToNext" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#slideToNext" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
        
        <!-- more details about agency -->
        <div class="agency" id="agency">
            <div class="white-overlay">
                <div class="container">
                    <div>
                        <img src="imgs/airplane.png">
                        <div>
                            <img src="imgs/pic1.png">
                            <h2 class="text-center text-uppercase">Enjoy <br> All <br> World</h2>
                        </div>
                        <img src="imgs/airplane.png">
                    </div>
                    <p class="text-center">GO TOURS TRAVELS <br> CREATING HOLIDAY MEMORIES SINCE '91 <br> The team at Go Tours Travel have been in the travel industry since 1991 and Traveling Worldwide for over 30 years now. Let us arrange your 2021 holiday package. For all resorts, lodge and villages stay our knowledge and our passion for this amazing World..

</p>
                </div>
            </div>
        </div>
        
        <div class="statistics text-capitalize text-center font-weight-bold">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-umbrella-beach fa-3x"></i>
                        <h3>10,000+</h3>
                        <p>Tourists</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-birthday-cake fa-3x"></i>
                        <h3>30</h3>
                        <p>years</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fa fa-home fa-3x"></i>
                        <h3>325</h3>
                        <p>cottages</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-glass-cheers fa-3x"></i>
                        <h3>120</h3>
                        <p>restaurants</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- fetching flight data in to html table -->
        <div class="contact" id="contact">
            <div class="violet-overlay">
                    <h2 class="text-center">Go Tours Shedule</h2>
                    <div class="contact-form">
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
                                </td>
                            </tr> 
                            <?php
                            }
                            ?>
                        </table>
                        <br>
                        <br>
                        
                        <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn" >
                                        <div class="login100-form-bgbtn"></div>
                                            <button type="button" name="button" id="booknow" class="login100-form-btn" >
                                                <a href="login.php?" style="color: #FFFFFF">
                                                    Book Now</a>
                                            </button>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
        </div>

        <!-- footer items -->
        <footer>
            <div class="container" id="footer">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">Contact us</h4>
                            <p class="address">
                                No.12/4,<br>
                                Old Road,<br>
                                Kalutara South,<br>
                                Sri Lanka <br>
                                +94 34 2227551
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">additional links</h4>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#service">Services</a></li>
                                <li><a href="#about">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">Admin Site</h4>
                            <ul>
                                <li><a href="loginadmin.php">Log in as admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- code for smooth transectins of navigation bar clicks  -->
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