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
		<script src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/list.js"></script>
		<script type="text/javascript" src="js/additem.js"></script>
		<script type="text/javascript" src="js/deleteitem.js"></script>
		<title>TickMe</title>
	</head>
	<body>

	<?php include "titlebar.php"; ?>
	<?php include "sidebar.php"; ?>
	<?php include "security.php"; ?>

	<div class="content">
		<div class="button-wrapper">
			<a href="list.php"><i class="material-icons add-icon">add</i></a>
		</div>
		<div class="list-wrapper">
			<?php
			$query = "SELECT * FROM lists WHERE (user_id = '".$user['user_id']."')";
			$results = $db->query($query);

			while (($list = $results->fetchArray())) {
				$query = 'SELECT * FROM list_items WHERE (list_id = "'.$list['list_id'].'")';

				$item_results = $db->query($query);

			 	$html .= '<div class="list" id="list-id'.h($list['list_id']).'">
						<form id="list-form" method="get" accept-charset="utf-8">
							<input id="list-title" type="text" name="list-title" value="'.h($list['title']).'"><br>';
				while (($item = $item_results->fetchArray())) {
					$html .= '<input id="'.h($item['item_id']).'" class="list-check" type="checkbox" name="list-check" ';
					if ($item['state'] === 1) {
						$html .= 'checked';
					}
					$html .= '>';
					$html .= '<input id="list-check-hidden-id'.h($item['item_id']).'" class="list-check-hidden" type="hidden" value="'.h($item['state']).'" name="list-check">';
					$html .= '<input id="list-item-id'.h($item['item_id']).'" class="list-item-class" type="text" name="list-item" value="'.h($item['content']).'" onkeypress="enterHandler(event)">';
				}
				$html .= '</form></div>';
			}
			echo $html;
			?>
		</div>
	</div>
	</body>
</html>
