<?php
list($host,$database,$user,$pass)=["localhost","world","root",""];

try {
    $db=new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4",$user,$pass);
    echo "successfully connect to sql";
} catch (PDOException $e) {
    echo "PDO error:failed to connect".$e->getMessage();
}