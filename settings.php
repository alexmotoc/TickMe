<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['user_id'])) {
	require "Database.php";
	$db = new Database();
	$query = "SELECT * FROM users WHERE (user_id = '".$_SESSION['user_id']."')";
	$user = $db->querySingle($query);
} else {
	header("Location: index.php");
}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title>TickMe</title>
	</head>
	<body>

	<?php include "titlebar.php"; ?>
	<?php include "sidebar.php"; ?>

	<div class="content">
		<div class="settings-content">
			<h2>Preferences</h2>
			<form action="" method='get' accept-charset='utf-8'>
				<label>Font:</label>
				<select name='font'>
					<option value='arial'>Arial</option>
					<option value='timesNewRoman'>Times New Roman</option>
				</select><br>
				<label>Size:</label>
				<select name='size'>
					<option value='small'>12</option>
					<option value='medium'>15</option>
					<option value='large'>20</option>
				</select>
			</form>
			<button class="update-buttons" type='button'>Update</button><br>

			<h2>Account</h2><br>
			<h3>Change password</h3>
			<form action='' method='get' accept-charset='utf-8'>
				<label> Old Password: </label><input type='password' name='old_password'><br>
				<label> New Password: </label><input type='password' name='new_password'><br>
				<label> Confirm Password: </label><input type='password' name='new_confirm_password'><br>
			</form>

			<h3>Change email</h3>
			<form action='' method='get' accept-charset='utf-8'>
				<label> Old Email: </label><input type='email' name='old_email'><br>
				<label> New Email: </label><input type='email' name='new_email'><br>
				<label> Confirm Email: </label><input type='email' name='new_confirm_email'><br>
			</form>
			<button class="update-buttons" type="button">Change email</button><br>

			<h3>Email notifications</h3>
			<form action='' method='get' accept-charset='utf-8'>
				<input type='checkbox' name='notifications'>Receive email notifications<br>
			</form>

			<h3>Deleted lists</h3>
				<form action="" method='get' accept-charset='utf-8'>
				<label>Time until deletion: </label>
				<select name='delete_time'>
					<option value='10'>10 Days</option>
					<option value='15'>15 Days</option>
					<option value='month'>1 Month</option>
				</select><br>
			</form>
			<button class="update-buttons" type='button'>Update</button>
		</div>
	</div>
	</body>
</html>
