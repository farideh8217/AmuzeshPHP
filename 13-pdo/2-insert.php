<?php
include_once "1-connection.php";


// $sql="insert into people (fullname,age) value (?,?)";
// $stmt=$db->prepare($sql);
// $stmt->execute(["hassan",59]);


$sql="insert into people (fullname,age) value (?,?)";
$stmt =$db->prepare($sql);
$users=[
    ["sara",33],
    ["changiz",44],
    ["ahnad",11]
];
foreach($users as $user){
    $stmt->execute($user);
}