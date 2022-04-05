<?php
$str = "Hello,world,It,s,a,beautiful,day.";
print_r(explode(",", $str));// رشته را باتوجه به سمی کالن بین آنها تبدیل به آرایه میکند
echo "<hr>";
$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo implode(".", $arr); //آرایه را میگیرد و تبدیل به رشته میکند و بعد از هر عضو ارایه نقطه می گذارد 
echo "<hr>";
echo substr("Hello world!!!", 7);//هفت کاراکتر و اسپیس اول رشته را نادیده بگیر وبقیه را چاپ کن
echo "<hr>";
echo strstr("Hello world! world!", "l"); //در رشته هلو ورد دنبال ال بگرد و  از آن به بعد هرچی بود را چاپ کن
echo "<hr>";
echo str_replace("world", "Vahid", "Hello world!");//در رشته هلو ورد هرجا ورد بود با وحید جایگزین کن
echo "<hr>";
echo str_repeat("Erfan", 7);
echo "<hr>";
echo str_shuffle("Hello World");
echo "<hr>";
echo str_word_count("Hello Erfan Salehi"); //کلمات را میشمارد
echo "<hr>";
$string = "Hello/world./Beautiful/day today.test";
$token = strtok($string, "/");

while ($token == true) {
    echo "$token<br>";
    $token = strtok("/");
}


echo "<hr>";
$age = 30;
$str = "Tehran";
printf("Ali is %u years old and live in %s.", $age, $str);
