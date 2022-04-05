<?php
function A($value){
    echo '<pre>';
    print_r($value);
    echo '</pre><hr>';
}
function E($value){
  echo '<pre>';
  echo ($value);
  echo '</pre><hr>';
}

//utility array
$string = "test";
$arr = array("ali","erfan","maryam","ahmad","ali");
$arr1 = array("name"=>"ali","family"=>"ahmadi","age"=>20);

$arr3 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$arr4 = array("e"=>"red","f"=>"green","g"=>"blue");

$num = [1,2,3,4,5,6,7,8,102,99,34,47];
function odd(int $value){
  return ($value & 1);
}
function even(int $value){
  return (!($value & 1));
}
// echo odd(1);

A(array_filter($num,"odd"));
A(array_filter($num,"even"));

$name = 'erfan';
$gender = 'male';
$age = 20;

$makeArray = compact('name','gender','age');
A($makeArray);

extract($arr4);
echo "\$red = $e \$green = $f \$blue = $g";

// implode();

// explode();







