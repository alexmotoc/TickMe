<?php
session_start();
require 'Database.php';
$title = $_POST['list-title'];
$state = $_POST['list-check'];
$content = $_POST['list-item'];
$time = getdate();
$list_id = $_GET['id'];

$db = new Database();

if (isset($_SESSION['user_id'])) {
    $query = "SELECT * FROM users WHERE (user_id = '".$_SESSION['user_id']."')";
    $user = $db->querySingle($query);

    $query = "UPDATE lists SET title = '$title', last_modified = '$time' WHERE (list_id = '".$list_id."')";
    $db->exec($query);

    $query = "DELETE FROM list_items WHERE (list_id = '".$list_id."')";
    $db->exec($query);

    for($i = 0; $i < count($content); $i++) {
        $query = "INSERT INTO list_items VALUES('$list_id', NULL, '$content[$i]', '$state[$i]')";
        $db->exec($query);
    }
    header("Location:main.php");
} else {
   header("Location: index.php");
}
?>
