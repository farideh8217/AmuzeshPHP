<?php
$str = "VAHID SALEHI";
$str1 = "VA\nHID\nSALEHI";
$number = "1000000";
echo is_string($str); //ایا رشته است یا نه 
echo "<hr>";
echo strlen($str); //طول رشته نشان می دهد
echo "<hr>";
echo lcfirst($str); //اولین کاراکتر رشته را کوچک می کند
echo "<hr>";
echo ucfirst($str);//اولین کاراکتر رشته را بزرگ میکند
echo "<hr>";
echo ucwords($str);// اول هر کلمه را بزرگ میکند اگر حتی اسپیس بین کلمات باشد اعمال میشود
echo "<hr>";
echo strtoupper($str);
echo "<hr>";
echo strtolower($str);
echo "<hr>";
echo ltrim($str,"VAH");//از سمت چپ رشته حذف کند vah
echo "<hr>";
echo trim($str); //از هردوطرف فاصله هارا حذف میکند
echo "<hr>";
echo rtrim($str,"HI");
echo "<hr>";
echo trim($str1,"VHI");
echo "<hr>";
echo nl2br($str1);// اگر مثلا بک اسلش انی در رشته باشد آن را اعمال میکند وبه خط بعد می رود
echo "<hr>";
echo number_format($number,2);// فرمت اعداد را سه رقم سه رقم جدا میکند