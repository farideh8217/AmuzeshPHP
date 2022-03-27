<?php
for($j=0;$j<=10;$j++){
    echo "$j<br>";
}

$users=array(["erfan",20],["maryam",28],["ehsan",18],["sara",22]);
for($k=0;$k<=3;$k++){
    echo "{$users[$k][0]}<br>";//براکت اول برای حلقه ی فور که بچرخد وبراکت دوم برای نمایش نام داخل هر براکت
}
//for($k=0;$k<sizeof($users);$k++) //طول ارایه