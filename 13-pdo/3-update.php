<?php
include_once "1-connection.php";

// $sql="update people set issingle =0";
// $stmt=$db->prepare($sql);
// $stmt->execute();

// $sql="update people set issingle =1 where id<?";
// $stmt=$db->prepare($sql);
// $stmt->execute([20]);


$sql="update people set issingle =1 where id < :id";
$stmt=$db->prepare($sql);
$stmt->execute(['id'=>20]);