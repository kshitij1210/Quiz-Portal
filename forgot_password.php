<html lang="en"><head>
	<title>Change Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="animate.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/adminprofile.css">
<!--===============================================================================================-->
</head>
<body>
<br><br><br>
			<div class="wrap5" >
				<form class="change password validate-form" method="post" action="http://localhost/quiz/php/changepassword.php">
				
				
				<div class="form-element">
					<label for="student_name">Old Password</label>
					<input class="input2" name="oldpwd" placeholder="Enter Old Password" required="" type="password">
				</div>
				
				<div class="form-element">
					<label for="student_name">New Password</label>
					<input class="input2" name="newpwd" placeholder="Enter New Password" required="" type="password">
				</div>
				<div class="form-element">
					<label for="student_name">Confirm Password</label>
					<input class="input2" name="repwd" placeholder="ReEnter New Password" required="" type="password">
				</div>
				
				<div class="backbutton1">
				<button class="next1">
					Confirm
				</button>	
				</div>
				
			</form></div>
		
	
	
	
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script> 



  </body></html>