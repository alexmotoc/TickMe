<?php
session_start();
require "Database.php";
$username = $_POST['username'];
$password = $_POST['user_password'];

$db = new Database();
$query = "SELECT * FROM users WHERE (username = '$username')";
$user = $db->querySingle($query);

if (sha1($user['salt']."--".$password) == $user['password']) {
    $_SESSION['user_id'] = $user['user_id'];
    header("Location:main.php");
} else {
    header("Location:index.php");
}
?>
