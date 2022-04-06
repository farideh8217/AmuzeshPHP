<?php
include 'helper.php';
echo $rand = rand(10,100);
echo gettype($rand);
echo '<hr>';
echo $rand1 = mt_rand(100,1000); //سرعت آن از رند خیلی بیشتر است
echo gettype($rand1);
echo '<hr>';
echo $rand2 = random_int(100,1000);
echo gettype($rand2);
echo '<hr>';
echo $rand3 = random_bytes(3); //کاراکترهای خاص با طول سه ایجاد میکند
echo gettype($rand3);
echo '<hr>';
echo $rand4 = bin2hex(random_bytes(3));//تبدیل به هگزا دسیمال میکند
echo gettype($rand4);
echo '<hr>';
echo genrateRandomString(20); //استرینی 20 رقمی شامل حروف واعداد وکاراکترهای خاص را تولید میکند




