<!DOCTYPE html>
<?php
require "Database.php";
$db = new Database();
?>
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
		<div class="button-wrapper">
			<a href="list.php"><i class="material-icons add-icon">add</i></a>
		</div>
		<div class="list-wrapper">
			<?php
			$query = 'SELECT * FROM lists WHERE user_id = "1"';
			$results = $db->query($query);

			while (($list = $results->fetchArray())) {
				$query = 'SELECT * FROM list_items WHERE list_id = "'.$list['list_id'].'"';
				$item_results = $db->query($query);

			 	$html .= '<div class="list">
						<form method="get" accept-charset="utf-8">
							<input id="list-title" type="text" name="list-title" value="'.$list['title'].'"><br>';
				while (($item = $item_results->fetchArray())) {
					$html .= '<input id="list-check" type="checkbox" name="list-check" ';
					if ($item['state'] === 1) {
						$html .= 'checked';
					}
					$html .= '>';
					$html .= '<input id="list-item" type="text" name="list-item" value="'.$item['content'].'">';
				}
				$html .= '</form></div>';
			}
			echo $html;
			?>
		</div>
	</div>
	</body>
</html>
