<?php
require 'Database.php';
$db = new Database();
$item_id =$_POST['id'];

$query = "DELETE FROM list_items WHERE (item_id = "."$item_id".");";
$db->exec($query);
?>
