<?php

$data =$_POST['data'];

if(strlen($data)<10){
    echo "emkan zakhire file baraye bishtar az 10 karakter  vojod nadarad";
    die();
}
file_put_contents('data.txt',$data.PHP_EOL,FILE_APPEND);

$filecontent=file_get_contents('data.txt');
echo nl2br($filecontent);