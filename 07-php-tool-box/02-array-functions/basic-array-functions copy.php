<?php
function A($value){
    echo '<pre>';
    print_r($value);
    echo '</pre><hr>';
}

//basices array
$string = "test";
$arr = array("ali","erfan","maryam");
$arr1 = array("name"=>"ali","family"=>"ahmadi","age"=>20);
echo count($arr);
echo '<hr>';
echo sizeof($arr);//مانند همین کانت است و تعداد را برمیگرداند
A(array_keys($arr,"erfan"));//ایندکس عرفان را نشان می دهد
A(array_values($arr));//هم ایندکس و هم مقدار را نشان می دهد
A(array_values($arr));
if (array_key_exists("names",$arr1))//اگر در آرایه ،کلید نام وجود داشت
  {
  echo "Key exists!<hr>";
  }
else
  {
  echo "Key does not exist!<hr>";
  }
  if (in_array("name",$arr1))//ایا در ارایه مقدار نام وجود داد
  {
  echo "value exists!<hr>";
  }
else
  {
  echo "value not exist!<hr>";
  }
  if (is_array($arr1))//ایا ارایه هست یا نه
  {
  echo "is array<hr>";
  }
else
  {
  echo "not array!<hr>";
  }
  shuffle($arr1);
  A($arr1);

$students = array("ali","bahram","erfan");
sort($students);//اعضای ارایه را صعودی متب میکند بر اساس الفبا
$studentsLength=count($students);
    for($x=0;$x<$studentsLength;$x++)
        {
        echo $students[$x];
        echo "<br>";
        }

$num = array(7,4,6,13,33,2);
echo max($num)."<hr>";
echo min($num)."<hr>";
echo end($num)."<hr>";
echo array_sum($num)."<hr>";//جمع اعداد داخل ارایه
echo array_rand($num)."<hr>";// به صورت رندوم اعداد را نشان می دهد








