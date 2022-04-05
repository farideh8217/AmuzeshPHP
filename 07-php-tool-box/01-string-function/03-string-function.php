<?php
echo stripos("Ali test is 30 years old","Is");///اولین ایز در رشته از ایندکس چندم شروع شده را نشان می دهد وحساس به حروف کوچک وبزرگ نیست مثلا ایز را چه کوچک باشد چه بزرگ باشد ایندکس آن را نشان میدهد 
echo "<hr>";
echo strpos("Ali test is 30 years Is old","Is"); 
echo "<hr>";
$str = "Erfan Salehi";
echo md5($str);
// echo "&amp;"; //نمایش یک کاراکتر خاص
// echo "<script>alert('hacked');</script>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
$str = '<a href="https://www.7learn.com.com">سون لرن</a>';
echo $str."<br>"; // دراین حالت فقط سون لرن را به صورت لینک نشان میدهد
echo htmlentities($str); //دقیقا همان رشته ی اس تی آر را چاپ میکند 
echo "<hr>";
$str1="&lt;a href=&quot;https://www.7learn.com.com&quot;&gt;سون لرن&lt;/a&gt;";
echo html_entity_decode($str1);
echo "<hr>";
$str2 = '<a href="https://www.7learn.com.com">سون لرن</a>';
echo $str2."<br>";
echo htmlspecialchars($str2);
echo "<hr>";
echo htmlspecialchars_decode($str2);
echo "<hr>";
$str3 = '<a href="https://www.7learn.com.com">سون لرن</a>';
echo $str3."<br>";
$str4 = "ali is <b>20</b> years old";
echo $str4."<br>";
echo strip_tags($str4);





