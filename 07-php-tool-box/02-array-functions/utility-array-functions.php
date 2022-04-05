<?php
function A($value){
    echo '<pre>';
    print_r($value);
    echo '</pre><hr>';
}
function E($value){
  echo '<pre>';
  ECHO ($value);
  echo '</pre><hr>';
}

//utility array
$string = "test";
$arr = array("ali","erfan","maryam","ahmad","ali");
$arr1 = array("name"=>"ali","family"=>"ahmadi","age"=>20);

$arr3 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$arr4 = array("e"=>"red","f"=>"green","g"=>"blue");

A(array_chunk($arr,2));
A(array_merge($arr,$arr1));
A(array_unique($arr));
A(array_reverse($arr));
E(array_search("ali",$arr1));
A(array_diff($arr3,$arr4));
A(array_slice($arr3,1));
// array_splice($arr3,2,1,$arr4);
// A($arr3);
// E(array_shift($arr3));
// A($arr3);
array_push($arr3,"pink","brown");
A($arr3);
array_pop($arr3);
A($arr3);

$arr5 = array_fill(0,5,"red");
A($arr5);












