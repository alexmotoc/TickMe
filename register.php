<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<title>TickMe</title>
	</head>
	<body>

	<?php include "indextitle.php"; ?>

	<div class="loginContainer">
		<form class="loginForm" id="centeredRegister" action='main.php' method='get' accept-charset='utf-8'>
			<p>Register</p><br>
			<input type='text' name='username' placeholder="Username"><br>
			<input type='email' name='email' placeholder="Email"><br>
			<input type='email' name='email_confirm' placeholder="Confirm Email"><br>
			<input type='password' name='user_password' placeholder="Password"><br>
			<input type='password' name='user_password_confirm' placeholder="Confirm Password"><br>
			<button id="centeredButton" type='submit'>Register</button>
		</form>
	</div>
	</body>
</html>
