<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<title>TickMe</title>
	</head>
	<body>

	<?php include 'indextitle.php'; ?>

	<div class="loginContainer">
		<div class="loginForm">
			<form action='authenticate.php' method='post' accept-charset='utf-8'>
				<input type='text' name='username' placeholder='Username'><br>
				<input type='password' name='user_password' placeholder='Password'><br>
				<button type='submit'>Log In</button>
				<button type='submit' formaction="register.php">Register</button>
			</form>
			<p>Did you <a href='forgotpass.php'>forget your password</a>?</p>
		</div>
	</div>
	</body>
</html>
