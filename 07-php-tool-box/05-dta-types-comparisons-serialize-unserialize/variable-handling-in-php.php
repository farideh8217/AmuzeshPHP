<?php
$a = 'vahid';
echo is_array($a);
$b = array("vahid","erfan");
echo is_array($b).'<br>';
$c = false;
echo is_bool($c).'<br>';
$d = null;
echo is_null($d).'<br>';
$e = 22;
echo is_integer($e).'<br>';
echo is_int($e).'<br>';//مخفف بالایی و فرقی نداره
echo is_long($e).'<br>';
$f = "22";
echo is_string($f).'<br>';
$g = [1,2,3,4,5];
echo is_iterable($g).'<br>'; //اعضای ارایه ها ایتریبل و قابل تکرار هستند
// is_readable;
// is_resource;
// is_object;
// is_scalar;
// is_real;
$h = "sds";
echo intval($h).'<hr>'; //هرچیزی غیر از اینتیجر را صفر برمیگرداند
// $data = serialize(array('cat','dog','duck'));
$data = serialize('vahid');// تبدیل به سریال میکند
echo $data.'<br>';

$data = unserialize($data);
// var_dump($data);
echo $data.'<br>';









