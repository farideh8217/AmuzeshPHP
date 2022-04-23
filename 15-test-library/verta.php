<?php

include "vendor/autoload.php";
use Hekmatinasser\Verta\Verta;

$v = new Verta();

var_dump($v);

$v->timezone = 'Asia/Baku';
echo $v->timezone;

echo $v->day;