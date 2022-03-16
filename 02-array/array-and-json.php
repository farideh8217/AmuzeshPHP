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

//array to json
$jsonstr =json_encode($users);
echo $jsonstr;
echo "<hr>";
//json to array assoc
$jsonArr =json_decode($jsonstr,1);
print_r($jsonArr);
echo "<hr>";
echo "<hr>";
//json to array object
$userobject =json_decode($jsonstr);
print_r($jsonArr);
echo ($userobject->{0}->name->firstname);

