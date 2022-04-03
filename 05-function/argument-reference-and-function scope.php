<?php
//argument by value یعنی ارگومان هایی که به سمت تابع می ایند تغییراتی روی انها انجام شود
function test($num=null){
    return $num *=$num;
}
$num=5;
echo $num;
echo test($num);
echo "<br>";
echo $num;

echo "<hr>";
function test1(&$num=null){ //by refrence بعد از انجام عملیات روی ارگومان مقدار آن را نگه می دارد
    return $num *=$num;
}
$num=5;
echo $num;
echo test1($num);
echo "<br>";
echo $num;
//----------------------------------------

//variable scope 
function test2(){
    return $msg="hello world";
}

echo test2();
echo $msg; //ارور می دهد متغیر خارج از فانکشن قابل دسترس نیست 

echo "<hr>";

// برعکس بالایی ------------------------

$msg2="hello world";
function test3(){
    return $msg2;
}
echo test3();//برعکس بالایی د داخل فانکشن نمی توان به متغیر بیرون از فانکشن دسترسی داشت

//---------------------------
echo "<hr>";
$msg2="hello world";
function test4(){
    global $msg2;
    return $msg2;
}
echo test4();
//--------------------------------
echo "<hr>";
function hello(){
    return "hello world";
}
$q="hello"; //می توانیم نام فانکشن را درون متغیر گذاشت و سپس آن را صدا بزنیم
echo $q(); 