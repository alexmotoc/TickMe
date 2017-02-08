<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script type="text/javascript" src="js/list.js"></script>
		<title>TickMe</title>
	</head>
	<body>

	<?php include "titlebar.php"; ?>
	<?php include "sidebar.php"; ?>

	<div class="content">
		<div class="list" id="add-list">
			<form id="list-form" action="newlist.php" method='post' accept-charset='utf-8'>
				<input id="list-title" type='text' name='list-title' placeholder='Title'><br>
				<input id="list-check" type='checkbox' name='list-check[]'>
				<input id="list-item" type='text' name='list-item[]' placeholder='List item' onkeypress="enterHandler(event)">
				<!-- <i class="material-icons add-icon">create</i> -->
				<button type="submit"></button>
			</form>
		</div>
	</div>
	</body>
</html>
