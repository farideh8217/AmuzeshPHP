<?php
echo file_exists('dir/test.php').'<hr>';//ایا فایلی وجود دارد
echo is_file('dir/test.php').'<hr>';//ایا فایلی که داریم فایل است
echo is_dir('dir/test.php').'<hr>';//چون دایرکتوری نیست و فایل است فالس برمیگرداند
$dirpath ="dir/new-dir"; //مسیر ایجاد فایل را مشخص میکنیم
if(!file_exists($dirpath)){ //چون هربار که اجرا میکند فایل از قبل وجود دارد به ارور میخورد برای همین داخل ایف می گذاریم که اگر فایل وجود نداشت آن را ایجاد کند
    mkdir($dirpath);
}else{
    echo "dir $dirpath already exists!!! ";
}
echo '<hr>';

@unlink("dir/new-dir"); //فایل را حذف میکند
 $dirpath1 = "dir/logs.txt";
// $fileOpen = fopen($dirpath1,'a+');ای پلاس یعنی بتوانیم به انتهای فایل چیزی اضافه کنیم دستور اف اوپن حتی اگر فایل با اون نام وجود نداشته باشد آن را می سازد
// for($i = 1; $i <=10; $i++){
// fwrite($fileOpen,"vahid"); وحید را 10بار چاپ میکند
// }
// fclose($fileOpen);




// $dirpath1 = "dir/logs.txt";
// $fileOpen = fopen($dirpath1,'r');
// for($i = 1; $i <=5; $i++){

//     // echo $read1 = fgetc($fileOpen); درحلقه قرار میگیرد و 5کاراکتر اول را نشان می دهد
//     echo $read2 = fgets($fileOpen).'<br>'; //کل محتوای فایل را می توانیم بخوانیم

// }
// fclose($fileOpen);
echo '<hr>';
$str = 'This is new text' . PHP_EOL; //برای اینکه هربار چاپ به لاین بعدی برود
file_put_contents($dirpath1,$str,FILE_APPEND);//محتوایی را به اخر فایل اضافه میکند
$str2 = file_get_contents($dirpath1); //فایل را می خواند وچاپ میکند ولی به خط بعد نمی رود همه را پشت سرهم چاپ کند
echo nl2br($str2);// به خط بعد می رود 





