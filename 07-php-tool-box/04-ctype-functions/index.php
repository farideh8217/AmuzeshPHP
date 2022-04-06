<?php
$data = array('php','vahid%$salehi','123a');
foreach($data as $example){
    if(ctype_alnum($example)){ //برای چک کردن اینکه فقط عدد یا فقط حروف باشد مقدار دوم ارایه چون کاراکتر خاص دارد فالس برمیگرداند
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array('php','vahid%$salehi','123a');
foreach($data as $example){
    if(ctype_alpha($example)){ //اگر فقط مقدار متغیر حروف باشد تورو برمیگرداند 
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array("\n\t\r",'vahid%$salehi','123a');
foreach($data as $example){
    if(ctype_cntrl($example)){ //حتما باید ارایه کنترلی باشد مثل اسلش و بک اسلش و غیره وداخل جفت کوتیشن باشد
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array('176','120.7','123a',220,'12');
foreach($data as $example){
    if(ctype_digit($example)){ //فقط اعداد وحتما به صورت استرینگ
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array('php',"\n\t\r",'123 a',220,'12');
foreach($data as $example){
    if(ctype_graph($example)){ //هرچیزی که بشه دید تورو برمیگرداند مثلا کاراکترهای کنترلی قابل دیدن نیستند پس فالس می شود بین کاراکترها اگر فاصله باشد فالس برمیگرداند 
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array('php',"\n\t\r",'123 a',220,'12');
foreach($data as $example){
    if(ctype_print($example)){ //مانند بالایی است اگر فاصله باشد بین کاراکترها تورو برمیگرداند
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array('php','Erfan','ALI','sAra');
foreach($data as $example){
    if(ctype_lower($example)){ //کل محتوا باید از نوع استرینگ باشد
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array('php!','Erfan','ALI','sAra2','!#(');
foreach($data as $example){
    if(ctype_punct($example)){ //اگر شامل کاراکترهای نشانه گذاری باشد تورو برمیگرداند 
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array("\n\t",' ','ALI','sAra2','!#(');
foreach($data as $example){
    if(ctype_space($example)){ // کاراکترهایی که فضای خالی بر میگرداند
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array('php','Erfan','ALI','sAra');
foreach($data as $example){
    if(ctype_upper($example)){ //فقط مقادیری که با حروف بزرگ هستند را تورو میکند
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
$data = array('ABC','ffffff','000000','ffbe76');
foreach($data as $example){
    if(ctype_xdigit($example)){ //اگر ساختار هگزا دسیمال داشته باشد تورور برمیگرداند
        echo 'true'.'<br>';
    }else{
        echo 'false'.'<br>';
    }
}
echo '<hr>';
