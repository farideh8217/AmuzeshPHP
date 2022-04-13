<?php

//index array yani az 0 defult shoro mishaad
$a=array(); //===>$a=[];
var_dump($a);
echo "<br>";
print_r($a);
echo "<hr>";
$car=array("pride","bmw","pejo");
var_dump($car);
// echo ($car); //error --->ba echo, array nemitavan chap kard 
echo "<hr>";
//associative array yani karbar masalan az yek araye ra index mikonad

$cc=array("iran"=>"tehran","japon"=>"tokyo",25,45);
print_r($cc); // chon adad 25 va 45 index nadarad be sorat defult index mishavad az 0
echo $cc["iran"];
echo "<hr>";
//multidemensional array haman araye chand bodi mibashad 

$users=array(
    array(
        "name" => "erfan",
        "eamil" =>" farideh@yahoo.com",
        "username" =>"farideh8217",
    ),
    array(
        "name" => "maryam",
        "eamil" =>" maryam@yahoo.com",
        "username" =>"farideh8217",
    )
);
print_r($users[0]);
echo "<br>";
print_r($users[0]["name"]);

$users=array(
    array(
        "name" => [
            "firstname" => "erfan",
            "lastname" => "bayat",
        ],

        "eamil" =>" farideh@yahoo.com",
        "username" =>"farideh8217",
    ),
    array(
        "name" => "maryam",
        "eamil" =>" maryam@yahoo.com",
        "username" =>"farideh8217",
    )
);
echo "<hr>";

$name=($users[0]["name"]["firstname"]);
echo "welcome $name";
