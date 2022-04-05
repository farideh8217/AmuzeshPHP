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

A(array_chunk($arr,2));//دوتا دوتا داخل یک ارایه مجزا می ریزد
A(array_merge($arr,$arr1));
A(array_unique($arr));
A(array_reverse($arr));
E(array_search("ali",$arr1));//علی را در ارایه جست وجو میکند وکلید ان را نشان می دهد
A(array_diff($arr3,$arr4)); //تفاوت دو ارایه را نشان می دهد
A(array_slice($arr3,1));//از ایندکس یک به بعد ارایه را نشان می دهد
// array_splice($arr3,2,1,$arr4); از ارایه سه از ایندکس دو به بعد راحذف کن از ارایه چهار از ایندکس یک به بعد حذف شود
// A($arr3);
// E(array_shift($arr3)); اولین عضو ارایه را حذف میکند
// A($arr3);
array_push($arr3,"pink","brown"); //به انتهای ارایه پینک و براون اضافه میکند
A($arr3);
array_pop($arr3);
A($arr3);

$arr5 = array_fill(0,5,"red");//از ایندکس صفر تا ایندکس 5همه را اورنج قرار می دهد
A($arr5);












