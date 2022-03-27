<?php
$users=array(
    "0" => [
        "name" => [
            "firstname" => "erfan",
            "lastname" => "bayat",
        ],

        "eamil" =>" farideh@yahoo.com",
        "username" =>"farideh8217",
    ],
    "1" => [
        "name" => "maryam",
        "eamil" =>" maryam@yahoo.com",
        "username" =>"farideh8217",
    ]
);
$userstoobjects=(object)$users; //tabdil array to object
print_r($userstoobjects) ;
echo "<hr>";
$userstoarray=(array)$userstoobjects; //tabdil object to array
print_r($userstoarray) ;
echo "<hr>";

//sakht object
$car= new stdClass;
$car -> name="audio";
$car->model=2020;
print_r($car);
print"<br>";
print_r($car->name);
print"<br>";

$car2=$car; //dar araye va object vaghti mosavi gharar midahim meghdar an yeki mishavad va hardo yek ja az hafeze ra migirad
$car2->name="benz";
echo $car->name;
print"<br>";
echo $car2->name;
$car3= clone $car;//یک کپی ازکار می گیرد وآن را در جای دیگر حافظه نگه می دارد
$car3->name="bmw";
echo $car3->name;


echo"<br>";
$f=20; // برای متغیرها اینگونه نیست 
$g=$f;
echo $f;
echo "<br>";
$g=40;
echo $g;
