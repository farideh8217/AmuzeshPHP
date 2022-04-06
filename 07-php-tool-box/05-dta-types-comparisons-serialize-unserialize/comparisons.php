<?php
$a = '10';
echo gettype($a).'<br>';
$b = 6.7;
echo gettype($b).'<br>';
$c = array();
echo gettype($c).'<br>';
$d = 'erfan';
echo gettype($d).'<br>';
$e = 10;
echo gettype($e).'<br>';
$f = array('ali','erfan','sara');
echo gettype($f).'<br>';
$g= null;
echo gettype($g).'<br>';
$h = '';// همان استرینگ را برمیگرداند
echo gettype($h).'<br>';
$i = new stdClass;
echo gettype($i).'<br>';
$j = tmpfile();
echo gettype($j).'<br>';
$k = true;
echo gettype($k).'<br>';
echo '<hr>';

if(empty($c)){
    echo 'true : is empty';
}else{
    echo 'false : not empty';
}
echo '<hr>';
if(isset($c)){ //اگر مقدار متغیری حتی خالی باشد باز هم ست می شود و تورور برمیگرداند
    echo 'true : is set';
}else{
    echo 'false : not is set';
}
echo '<hr>';



