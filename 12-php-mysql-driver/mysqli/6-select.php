<?php
include_once "1-connection.php";

// $sql ="select id,fullname from people where id>7";
// $result=$mysqli->query($sql);
// echo "<pre>";
// print_r($result->fetch_all());// فچ ال همه رو نشان می دهد
// echo "</pre>";

// echo "<pre>";
// print_r($result->fetch_assoc());//اولی را نشان می دهد اگر دوباره استفاده شود دومی را نشان می دهد 
// echo "<pre>";

// $sql="select avg(age) as age_average from people ";
// $stmt=$mysqli->prepare($sql);
// $stmt->execute();
// $stmt->bind_result($age_average);
// $stmt->fetch();
// echo "age average is $age_average";


$sql="select fullname,age from people";
$stmt=$mysqli->prepare($sql);
$stmt->execute();
$stmt->bind_result($fullname,$age);

while ($stmt->fetch()){
    echo "<div>$fullname : $age </div>";
}