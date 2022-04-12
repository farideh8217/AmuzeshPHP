<?php
include_once "1-connection.php";
$sql="
CREATE TABLE people(
    id int PRIMARY KEY AUTO_INCREMENT,
    fullname varchar(256),
    age int UNSIGNED, 
    sex ENUM('f','m'),
    issingle boolean DEFAULT 1
);
";
if($mysqli->query($sql)){
    echo "table successfully created";
}else{
    echo "table is not created";
}


