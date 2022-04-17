<?php
include_once "1-connection.php";

function echopeople($row) 
{
    foreach($row as $col) 
    {
        echo "$col -";
    }
    echo PHP_EOL; // echo implode("-",$row).PHP_EOL; می توانیم از این تابع هم استفاده کنیم
}
function echopeoples($rows) 
{
    foreach($rows as $row) 
    {
        echopeople($row);
    }
}
$sql="select * from people where age < 40";
$stmt=$db->prepare($sql);
$stmt->execute();
//fetchall
// $rows=$stmt->fetchAll(PDO::FETCH_OBJ);
// echopeoples($rows);


while ($row=$stmt->fetch(PDO::FETCH_OBJ)){
    echo("$row->fullname :$row->age");
}

