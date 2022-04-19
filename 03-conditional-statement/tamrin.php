<?php

$users=array(
    "ali"=>[
        "author"=>"aa",
        "email"=>"kddkdkd",
    ]
);
$d=(object)$users;
echo ($d->ali["author"]);



echo "<hr>";
// $as=json_decode(json_encode($users));
// if ($as->ali->author=="aa"){
//     echo "ok";
// }else{
//     echo "no";
// }

// echo "<hr>";
// $a=5;
// switch($a){
//     case 1:
//         echo "ss";
//         break; 
//         default:
//         echo "peyda nashod";   
// }
// $a=100;
// echo($a==100) ? "yes" :"no"; 