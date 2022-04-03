 <?php 
// declare(strict_types=1);//باید نوع داده ای که به پارامترها دادیم دقیقا همان نوع در آرگومان باشد وگرنه ارور می دهد
// function sum(int $a=null,int $b=null){
//     return $a+$b;
// }
// echo sum(10,"20 days");



//-------------------------
echo "<hr>";
function sum1(int $a=null,string $b=null){
    return $a+$b;
}
echo sum1(10,"50");
//----------------------------
echo "<hr>";
function sum2(int $a=null,float $b=null):int{ //تاکید می کنیم که حتما اینت برگرداند ولی اگر مقادیر آرگومان چیز دیگری غیر از اینت بود خودش گرد می کند وتبدیل به اینت می کند
    return $a+$b;
}
echo sum2(10,20.2);//----->60 خروجی است
//----------------------------
declare(strict_types=1);// ارور می دهد چون تاکید میکند که حتما اینت برگرداند
echo "<hr>";
function sum3(int $a=null,float $b=null):int{ //تاکید می کنیم که حتما اینت برگرداند ولی اگر مقادیر آرگومان چیز دیگری غیر از اینت بود خودش گرد می کند وتبدیل به اینت می کند
    return $a+$b;
}
echo sum3(10,20.2);