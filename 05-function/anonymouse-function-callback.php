<?php
$sum=function(int $a,int $b){ //می توانیم توابع بی نام را درون متغیر بریزیم
    return $a+$b;
};// حتما سمی کالن میخاد
echo $sum(20,30);

//-----------------------
function name(string $str=null){
    // return strtoupper($str);
    // return strtolower($str);  //فقط ریترن اول را اجرا میکند برای رفع مشکل از ارایه استفاده میکنیم
    $results=array(
        "upper"=>strtoupper($str),
        "lower"=>strtolower($str),
    );
    return $results;

}
//print_r(name("ali"));
$name=name("ali");
echo  $name["upper"]; 

echo "<hr>";
//-----------------------
function string(string $str=null, $callback=null){
    
    $results=array(
        "upper"=>strtoupper($str),
        "lower"=>strtolower($str),
    );
    if (is_callable($callback)){
        call_user_func($callback,$results);
    }else{
        echo "not callable";
    }

}
string("ali",function($x){
    print_r($x);
});