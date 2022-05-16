<?php
include_once "config.php";

if(!isset($_GET["id"])) {
    exit("error, ID needed");
}
$id = $_GET["id"];
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]);
header("Location: home.php");