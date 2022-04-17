<?php
list($host,$database,$user,$pass)=["localhost","world","root",""];

try {
    $db=new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4",$user,$pass); //اگر دچار خطا شد به کچ برو وگرنه ادامه ی ترای اجرا میشه
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "successfully connect to sql";
} catch (PDOException $e) {
    echo "PDO error:failed to connect".$e->getMessage();
    exit(); //اگر وصل نشد همینجا بسته شود کدمون
}