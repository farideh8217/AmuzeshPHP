<?php
echo round(2.4).'<hr>';
echo round(2.6).'<hr>';
echo round(2.5).'<hr>';
echo ceil(2.1).'<hr>';//حتما روبه بالا گرد میکند
echo floor(2.9).'<hr>';//برعکس بالایی
echo sqrt(64).'<hr>';
echo abs(-3.4).'<hr>'; //همه ی اعداد را به صورت مثبت نشان می دهد
echo min(-3.4,3,17,-1,-54.9).'<hr>';
echo max(-3.4,3,17,-1,-54.9).'<hr>';
echo pi().'<hr>';
echo $c = 2*pi()*10; //محیط دایره به شعاع 10
echo '<hr>';
echo is_infinite(20); //اگر بی نهایت باشد تورو برمیگرداند
echo is_infinite(log(0));