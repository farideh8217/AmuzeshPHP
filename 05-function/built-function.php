<?php
function dologin($email){
    return "your email $email";
}
echo dologin("farideh@yahoo.com");


function login($email,$pass=null){//مقادیر داخل فانکشن پارامترهستند اگر پسورد مقدار نال نگیرد چون یک ارگومان فرستاده شدهبه این تابع ارو می دهد
    return "your email $email";
}
echo login("farideh@yahoo.com");


function sum($a,$b){
    return $a+$b;
}
echo sum(20,30);

function sumall(){
    $args=func_get_args(); //برای دریافت بی نهایت ارگومان
    return array_sum($args);
}
echo sumall(1,2,3,4,5);

//...........


function sumall2(...$args){

    return array_sum($args);//خلاصه تر از دستورات بالا
}
echo sumall2(1,2,3,4,5);