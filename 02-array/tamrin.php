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
echo "<hr>";

$users=array(
    array(
        "name"=>[
            "firstname"=>"farideh",
            "lastname"=>"zaker",
        ],
            "email"=>"far@yahoocom",
    )
);
$userstt=json_encode($users);
$r=json_decode($userstt);
echo($r[0]->name->firstname);


$car=new stdClass;
$car->name="benz";
echo($car->name);
