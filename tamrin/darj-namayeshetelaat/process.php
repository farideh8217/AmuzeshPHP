<?php
include_once "config.php";

if (isset($_POST["save"])) {
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $cityname = $_POST["city_name"];
    $email = $_POST["email"];
    $sql="INSERT INTO userinformation(firstname,lastname,cityname,email) values (?,?,?,?) ";
    $stmt =$db->prepare($sql);
    $stmt->execute([
        $firstname,
        $lastname,
        $cityname,
        $email
    ]); 
    echo "create successfully";
}