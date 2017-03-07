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
		<script src="js/todo.js"></script>
		<script type="text/javascript" src="js/list.js"></script>
		<title>TickMe</title>
	</head>
	<body>

	<?php include "titlebar.php"; ?>
	<?php include "sidebar.php"; ?>
	<?php include "security.php"; ?>

	<div class="content">
		<?php
		$id = $_GET['id'];
		if (isset($id)) {
			$query = "SELECT * FROM lists WHERE (list_id = :id);";
			$stmt = $db->prepare($query);
			$stmt->bindValue(':id', $id, SQLITE3_INTEGER);
			$results = $stmt->execute();
			$result = $results->fetchArray();

			$query = 'SELECT * FROM list_items WHERE (list_id = :id)';
			$stmt = $db->prepare($query);
			$stmt->bindValue(':id', $id, SQLITE3_INTEGER);
			$item_results = $stmt->execute();

			$html .= '<div class="list" id="add-list">
					<form id="list-form" action="updatelist.php?id='.h($id).'" method="post" accept-charset="utf-8">
						<input id="list-title" type="text" name="list-title" value="'.h($result['title']).'"><br>';
			$counter = 0;
			while (($item = $item_results->fetchArray())) {
				$html .= '<input id="list-check-hidden" type="hidden" value="0" name="list-check['.$counter.']">';
				$html .= '<input class="list-check-class" id="list-check'.$counter.'" type="checkbox" value="1" name="list-check['.$counter.']" ';
				if ($item['state'] === 1) {
					$html .= 'checked';
				}
				$html .= '>';
				$html .= '<input class="list-item-class" id="list-item'.$counter.'" type="text" name="list-item[]" value="'.h($item['content']).'" onkeypress="enterHandler(event)">';
				$counter++;
			}
			$html .= '</form>
				<div id="add-list-button">
					<a onclick="document.forms[0].submit()"><i class="material-icons add-icon">create</i></a>
				</div>
			</div>';
		} else {
			$html = '<div class="list" id="add-list">
				<form id="list-form" action="newlist.php" method="post" accept-charset="utf-8">
					<input id="list-title" type="text" name="list-title" placeholder="Title"><br>
					<input id="list-check-hidden" type="hidden" value="0" name="list-check[0]">
					<input id="list-check" type="checkbox" value="1" name="list-check[0]">
					<input id="list-item" type="text" name="list-item[]" placeholder="List item" onkeypress="enterHandler(event)">
				</form>
				<div id="add-list-button">
					<a onclick="document.forms[0].submit()"><i class="material-icons add-icon">create</i></a>
				</div>
			</div>';
		}
		echo $html;
		?>
	</div>
	</body>
</html>
