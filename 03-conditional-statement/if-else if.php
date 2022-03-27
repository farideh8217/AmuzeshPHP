<?php

$user=array(
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

$users=json_decode(json_encode($user));

if ($users->ali->role=="author" && $users->ali->age>18){
    echo "شما دسترسی به پنل سایت را دارید";
}else if($users->erfan->age>18){
    echo "welcome dear erfan ";
}
else{
    echo "شما دسترسی به پنل ادمین را ندارید";
}