<<?php
session_start();
require 'Database.php';
$db = new Database();
$list_id = $_GET['id'];

$query = "DELETE FROM list_items WHERE (list_id = '".$list_id."')";
$db->exec($query);
?>
