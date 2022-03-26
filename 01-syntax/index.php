<?php

echo "hello world";
echo "hello world";
echo "<br>"; 
echo "hello world";
echo "<br>";
echo "hello world";
echo "<br>";
echo "hello world";
echo "<br>";


echo "heloo" . "    ".$x;
#echo "farideh";
echo '<p style="color:red">'.'salam'.' '.'khobi'.'</p>';
$x="people";
print_r($x); 
echo "<br>";
var_dump($x);

$txt = 14;
echo $txt;


$b="zahra";
echo "$b welcome"; // hatman bayad dakhel "" gharar girad 


echo "<p style='color:green'>welcome {$b}</p>";
//tarif sabet
const url="7learn.com";
echo "<hr>";
echo url;
// ravesh dovom tarif sabet   hatman bayad name uniqe bashad
define("BASEURL","7learn.com");
echo BASEURL;

echo "<hr>";
$f=456;
var_dump($f);// integer shamel hame adad sahih decimal octal manfi

$s=1.235;
var_dump($s);


echo "<hr>";
$a=10;
echo $a++; // aval chap mikonad sepas ezafe mikonad

echo "<hr>";
$b=20;
echo ++$b;


$a="hello";
$b="farideh";
echo $a.$b; // reshte a va b ra beham michasbanad 
$a .= $b; // reshte a va b ra michasbanad va dar a mirizad
echo $a;


// dar dastor <=> agar har do taraf yeksan bashad adad sefr agar samt rast bozorgtar az samt chap bashad adad -1, va agar samt rast kochektar az samt chap bashad 1 ra namayes midahad
echo "<hr>";
$s=7;
$p=6;
$f = $s <=> $p;
echo $f;

echo "<hr>";
$a=20;
$b=30;
if ($a == 20 && $b == 30){
    echo "true";
}
else{
    echo "false";
}



if ($a == 10 || $b == 30){
    echo "true";
}
else{
    echo "false";
}



if ($a == 10 xor $b == 30){
    echo "true";
}
else{
    echo "false";
}




if ($a != 20){
    echo "true";
}
else{
    echo "false";
}

echo "<hr>";
var_dump($a === $b); //ham az nazar tasavi va ham az nazar noe dade ke masalan hardo int ya str hastand baresi mishavad
var_dump($a != $b); //bejaye != mitavan <> gharar dad