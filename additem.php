<?php
require 'Database.php';
$db = new Database();
$item = $_POST['text'];
$list = $_POST['list'];

$query = "INSERT INTO list_items VALUES('$list', NULL, '$item', '0')";
$db->exec($query);
?>
