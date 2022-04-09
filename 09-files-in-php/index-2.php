<?php
 $dirpath1 = "dir/logs.txt";
 echo filesize($dirpath1)."<hr>";
 echo filetype($dirpath1)."<hr>";

 
 $list = glob('*.php'); //همه ی فایل ها که پسوند پی اچ پی دارند ر ا نمایش می دهد
 var_dump($list);



