<?php
session_start();
require 'Database.php';
$title = $_POST['list-title'];
$state = $_POST['list-check'];
$content = $_POST['list-item'];
$time = getdate();

$db = new Database();

if (isset($_SESSION['user_id'])) {
    $query = "SELECT * FROM users WHERE (user_id = '".$_SESSION['user_id']."')";
    $user = $db->querySingle($query);

    $query = "INSERT INTO lists VALUES(:user_id, NULL, :title, :date_created, :last_modified, '1')";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":user_id", $user['user_id'], SQLITE3_INTEGER);
    $stmt->bindValue(":title", $title, SQLITE3_TEXT);
    $stmt->bindValue(":date_created", $time, SQLITE3_TEXT);
    $stmt->bindValue(":last_modified", $time, SQLITE3_TEXT);
    $stmt->execute();

    $query = "SELECT last_insert_rowid();";
    $result = $db->querySingle($query, true);
    $entryNumber = 0;

    foreach($result as $element) {
        $entryNumber += $element;
    }

    for($i = 0; $i < count($content); $i++) {
        $query = "INSERT INTO list_items VALUES('$entryNumber', NULL, '$content[$i]', '$state[$i]')";
        $db->exec($query);
    }
    header("Location:main.php");
} else {
    header("Location: index.php");
}
?>
