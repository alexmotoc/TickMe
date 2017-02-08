<?php
require 'Database.php';
$title = $_POST['list-title'];
$state = $_POST['list-check'];
$content = $_POST['list-item'];
$time = getdate();

$db = new Database();
$query = "INSERT INTO lists VALUES('1', NULL, '$title', '$date', '$date', '1'";
$db->exec($query);
?>
