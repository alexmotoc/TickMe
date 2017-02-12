<?php
session_start();
require "Database.php";
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$confirm_email = $_POST['email_confirm'];
$password = $_POST['user_password'];
$confirm_password = $_POST['user_password_confirm'];

if ($password != $confirm_password) {

}

if ($email != $confirm_email) {

}

$salt = sha1(time());
$encrypted_password = sha1($salt."--".$password);

$db = new Database();
$query = "INSERT INTO users VALUES(NULL, '$username', '$name', '$email', '$encrypted_password', '$salt')";
$db->exec($query);
$query = "SELECT * FROM users WHERE (username = '$username')";
$user = $db->querySingle($query);
$_SESSION['user_id'] = $user['user_id'];
header("Location:main.php");
?>
