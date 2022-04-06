<?php
function dateToJalali(string $date){
    $array = explode(' ',$date); //فاصله ی بین تاریخ وساعت که تاریخ وساعت را جدا میکند
    list($year,$month,$day) = explode('-',$array[0]);//ایندکس صفر ارایه که تاریخ است براساس دشت جدا می شود و در لیست ریخته می شود
    list($hour,$minute,$second) = explode(':',$array[1]);
    $timestamp = mktime($hour,$minute,$second,$month,$day,$year);//اعداد اینتیجر را میگیرد وتبدیل می کند به تایم استپ
    return jdate("Y-m-d H:i:s",$timestamp,'','Asia/Tehran','fa');//تابعی که تایم استپ را تبدیل به تاریخ میلادی میکند
}