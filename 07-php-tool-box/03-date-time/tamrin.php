<?php
include 'jdf.php';
// function s(string $date){
//     list($year,$month,$day)=explode("-",$date);
//     $timestamp=mktime($year,$month,$day);
//     return jdate('Y-m-d',$timestamp,'','Asia/Tehran','fa');   
// }
// $date='2020-3-12';
// echo s($date);


$timestamp=mktime(2020,3,12);
echo jdate('Y-m-d',$timestamp,'','Asia/Tehran','fa');   


