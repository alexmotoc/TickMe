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
		<div class="list-wrapper">
			<div class="list">
				<form method='get' accept-charset='utf-8'>
					<input class="list-title" type='text' name='list-title' placeholder='Title'><br>
					<input class="list-check" type='checkbox' name='list-check'>
					<input class="list-item" type='text' name='list-item' placeholder='List item'>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>
