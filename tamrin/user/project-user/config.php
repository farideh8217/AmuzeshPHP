<?php
$database = [
    'host'=>'localhost',
    'dbname'=>'user',
    'user'=>'root',
    'pass'=>''
];
try {
    $db = new PDO("mysql:host={$database['host']};dbname={$database['dbname']}", $database['user'], $database['pass']);
    } catch (PDOException $e) {
    die("An error happend, Error: " . $e->getMessage());
}