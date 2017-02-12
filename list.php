<!DOCTYPE html>
<?php
session_start();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script
  		src="https://code.jquery.com/jquery-3.1.1.min.js"
  		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  		crossorigin="anonymous">
		</script>
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
				<input id='list-check-hidden' type='hidden' value='0' name='list-check[0]'>
				<input id="list-check" type='checkbox' value='1' name='list-check[0]'>
				<input id="list-item" type='text' name='list-item[]' placeholder='List item' onkeypress="enterHandler(event)">
			</form>
			<div id="add-list-button">
				<a onclick="document.forms[0].submit()"><i class="material-icons add-icon">create</i></a>
			</div>
		</div>
	</div>
	</body>
</html>
