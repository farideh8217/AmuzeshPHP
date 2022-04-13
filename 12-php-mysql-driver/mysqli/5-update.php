<?php
include_once "1-connection.php";

// $sql="updated people set sex='m' where fullname LIKE 'log%'";
// if ($mysqli->query($sql)){
//     echo " record successfuly deleted".PHP_EOL;
// }else{
//     echo "failed to delete".PHP_EOL;
// }

$ageincvalue=1;
$sql="update people set age = age + ?
where id<10";
$stmt=$mysqli->prepare($sql);
$stmt->bind_param('i',$ageincvalue);
$stmt->execute();