<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/registration.js"></script>
		<title>TickMe</title>
	</head>
	<body>

	<?php include "indextitle.php"; ?>

	<div class="loginContainer">
		<form class="loginForm" id="centeredRegister" action='adduser.php' method='post' accept-charset='utf-8'>
			<p>Register</p><br>
			<div id="errors"></div>
			<input id="username" type='text' name='username' placeholder="Username"><br>
			<input id="name" type='text' name='name' placeholder="Name"><br>
			<input id="email" type='email' name='email' placeholder="Email"><br>
			<input id="confirm_email" type='email' name='email_confirm' placeholder="Confirm Email"><br>
			<input id="password" type='password' name='user_password' placeholder="Password"><br>
			<input id="confirm_password" type='password' name='user_password_confirm' placeholder="Confirm Password"><br>
			<button id="centeredButton" type="submit">Register</button>
		</form>
	</div>
	</body>
</html>
