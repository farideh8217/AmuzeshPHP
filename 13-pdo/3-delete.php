<?php
include "1-connection.php";

$sql="delete from people where age < :age";
$stmt=$db->prepare($sql);
$stmt->execute(["age"=>32]);