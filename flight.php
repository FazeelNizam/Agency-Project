<?php
require_once('config.php'); // adding Config file to the code
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Flight Shedule Update</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="csslog/util.css">
	<link rel="stylesheet" type="text/css" href="csslog/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Flight Shedule
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Flight Number Is Required">
						<span class="label-input100">Flight Number</span>
						<input class="input100" id="flight_no" type="text" name="flight_no" placeholder="Enter Flight Number">
						<span class="focus-input100" data-symbol="&#x2708;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Arrival Airport Is Required">
						<span class="label-input100">Arrival Airport</span>
						<input class="input100" id="arrival_airport"  type="text" name="arrival_airport" placeholder="Enter Arrival Airport">
						<span class="focus-input100" data-symbol="&#x1F5FA;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Arival Date Is Required">
						<span class="label-input100">Arival Date</span>
						<input class="input100" id="arrival_date" type="date" name="arrival_date">
					</span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Arrival Time Is Required">
						<span class="label-input100">Arrival Time</span>
						<input class="input100" id="arrival_time"  type="time" name="arrival_time">
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Departure Airport Is Required">
						<span class="label-input100">Departure Airport</span>
						<input class="input100" id="departure_airport"  type="text" name="departure_airport" placeholder="Enter Departure Airport">
						<span class="focus-input100" data-symbol="&#x1F5FA;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Departure Date Is Required">
						<span class="label-input100">Departure Date</span>
						<input class="input100" id="departure_date"  type="date" name="departure_date">
					</span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Departure Time Is Reauired">
						<span class="label-input100">Departure Time</span>
						<input class="input100" id="departure_time"  type="time" name="departure_time">
					</span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" id="update" name="create" value="Update" class="login100-form-btn">
								Update
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Finish Updating Details?
						</span>

						<a href="homeadmin.php" class="txt2">
							Back To Home
						</a>
					</div>

					

					
				</form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript"> // script for get alert massege and redirrect to the target page
	$(function(){
		$('#update').click(function(e){ // function to be called after clicking update button

			var valid = this.form.checkValidity();

			if(valid){


			var flight_no  			= $('#flight_no ').val();
			var arrival_airport		= $('#arrival_airport').val();
			var arrival_date 		= $('#arrival_date').val();
			var arrival_time 		= $('#arrival_time').val();
			var departure_airport 	= $('#departure_airport').val();
			var departure_date 		= $('#departure_date').val();
			var departure_time 		= $('#departure_time').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'flightprocess.php',
					data: {flight_no : flight_no , arrival_airport: arrival_airport, arrival_date : arrival_date, arrival_time: arrival_time, departure_airport: departure_airport, departure_date: departure_date, departure_time: departure_time},
					success: function(data){
					alert(data); // function to be called if the request succeeds
					if($.trim(data) === "Successfully updated."){
						setTimeout(' window.location.href =  "flight.php"', 1000);} // rederect to the page
					},
					error: function(data){
					alert('there were erros while saving your data.');}
				});

				
			}

			



		});		

		
	});
	
</script>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jslog/main.js"></script>

</body>
</html>