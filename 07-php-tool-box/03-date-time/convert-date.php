<?php
include 'jdf.php';
include 'helper.php';
// var_dump(gregorian_to_jalali(2019,3,22));
echo gregorian_to_jalali(2019,3,22,'/');//تبدیل تاریخ میلادی به شمسی
echo "<hr>";
echo jdate('Y-m-j H:i:s');//سال وماه وروز به صورت فارسی نوشته می شود
echo "<hr>";
$date ='2020-12-22 13:24:23';
echo jdate($date);
echo "<hr>";
echo dateToJalali($date);//از تابعی که در فایل هلپر وجود دارد استفاده می کند

