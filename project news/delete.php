<?php
///////////////////////////////////////connection db
$database = [
    'host' => 'localhost',
    'dbname' => 'news',
    'user' => 'root',
    'pass' => ''
    ];
try {
    $db = new PDO("mysql:host={$database['host']};dbname={$database['dbname']}", $database['user'], $database['pass']);
    } catch (PDOException $e) {
    die("An error happend, Error: " . $e->getMessage());
}

////////////////////// namayesh etelat db /////////
if(!isset($_GET["id"])) {
    exit("error, ID needed");
}
$id = $_GET["id"];
$sql = "DELETE FROM news WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([
    $id
]);
header("Location: index.php");
