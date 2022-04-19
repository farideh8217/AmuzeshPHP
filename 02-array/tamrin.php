<?php
$users=array(
    array(
        "name"=>[
        "firstname"=>"farideh",
        "lastname"=>"zaker",
        ]
    )
);
echo($users[0]["name"]["firstname"]);
echo "<hr>";
$userstr=json_encode($users);
echo $userstr;
echo "<hr>";
$ss=json_decode($userstr);
echo($ss[0]->name->firstname);
echo "<hr>";

$userstoobjects=(object)$users;// manand balaee mibashad 
print_r($userstoobjects[0]->name->firstname) ;
echo "<hr>";
