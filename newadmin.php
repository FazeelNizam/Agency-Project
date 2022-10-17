<?php
require_once('config.php'); // adding Config file to the code
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>New Admin</title>
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
						New Admin Registration
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name Is Required">
						<span class="label-input100">Name</span>
						<input class="input100" id="name" type="text" name="name" placeholder="Name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Position Is Required">
						<span class="label-input100">Position</span>
						<input class="input100" id="position"  type="text" name="position" placeholder="Position">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email Is Required">
						<span class="label-input100">Email</span>
						<input class="input100" id="email"  type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-symbol="&#x2709;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Phone Number Is Reauired">
						<span class="label-input100">Phone Number</span>
						<input class="input100" id="tel_no"  type="text" name="tel_no" placeholder="Phone Number">
						<span class="focus-input100" data-symbol="&#x260F;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password Is Required">
						<span class="label-input100">Password</span>
						<input class="input100" id="password"  type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" id="register" name="create" value="Sign Up" class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Back To Admin Page
						</span>

						<a href="logoutadmin.php?logout=true" class="txt2">
							Home
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript"> // script for get alert massege and redirrect to the target page
	$(function(){
		$('#register').click(function(e){ // function to be called after clicking register button

			var valid = this.form.checkValidity();

			if(valid){


			var name 		= $('#name').val();
			var position	= $('#position').val();
			var email 		= $('#email').val();
			var tel_no 		= $('#tel_no').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'nadminprocess.php',
					data: {name: name,position: position,email: email,tel_no: tel_no,password: password},
					success: function(data){
					alert(data); // function to be called if the request succeeds
					if($.trim(data) === "Successfully saved."){
						setTimeout(' window.location.href =  "newadmin.php"', 1000);} // rederect to the page
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