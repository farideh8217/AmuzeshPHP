<?php
$array=array(1,2,3,4,5,6);
foreach($array as $v){ //مقادیر ارایه را داخل متغیر وی میریزد
    echo "$v <br>";
}

foreach($array as $v){
    if ($v==5)continue;
echo "$v <br>";
}

$users=array(
    "ali" =>[
        "role"=>"author",
        "age"=>17,
        "email"=>"ali@gmail.com"
    ],
    "erfan" =>[ 
        "role"=>"admin",
        "age"=>28,
        "email"=>"erfan@gmail.com"
    ]
);
foreach($users as $key=>$value){
    //echo $key; کلیدهای اصلی همان علی وعرفان رانشان می دهد
    // print_r($value); //چون خود ولیوها ارایه هستند باید پرینت نوشت 
    echo "$key :role: {$value["role"]} age:{$value["age"]}<br>";
    echo "<hr>";
    
}

foreach($users as $user){
    echo"{$user["role"]}<br>";
}