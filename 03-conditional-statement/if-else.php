<?php

// $num=101;
// if ($num==100){
//     echo "$num is equal 100";
// }else{
//     echo "$num is not equal 100";
// }

// if ($num==100){
//     echo "شرط 1 برقرار است";
//     echo "<br>";
//     if ($num==100){
//         echo "شرط 2 برقرار است";
//     }else{
//         echo "شرط 2 برقرار نیست";
//     }
// }else{
//     echo "شرط یک برقرار نیست";
// }



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
$users=(object)$user;

if ($users->ali["role"]=="admin"){
    echo "خوش آمدید مدیر محترم";
}else{
    echo "شما به این بخش دسترسی ندارید";
}

// if ($users->ali->role=="admin"){ اگر بخواهیم اینجوری بنویسیم باید قبل ار براکت وبعد از کلیدها مثلا علی و عرفان داخل پرانتز آبجکت بنویسیم
//     echo "خوش آمدید مدیر محترم";
// }else{
//     echo "شما به این بخش دسترسی ندارید";
// }
echo "<hr>";

$arraytojson=json_encode($user); //تبدیل به آرایه جیسون
$jsontoobject=json_decode($arraytojson);
if ($jsontoobject->ali->role=="admin"){
    echo "خوش آمدید مدیر محترم";
}else{
    echo "شما به این بخش دسترسی ندارید";
}


$users=json_decode(json_encode($user));// خلاصه شده دوخط بالا

echo "<hr>";
if ($users->ali->role=="author" && $users->ali->email="ali@gmail.com"){
    echo "خوش آمدید";
}else{
    echo "رمز عبور اشتباه است";
}


