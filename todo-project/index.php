<?php
include "bootstrap/init.php";

if(!isLoggedIn()){
    header("location: " . site_url('auth.php'));
}

if(isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])){ //درصفحه تی پی ال ایندکس برای اچ رف ایکن دیلیت است دیلیت فولدر جلوی گت
    $deletedcount=deletefolder($_GET['delete_folder']);
    //echo "$deletedcount folders succesfully deleted";
}
if(isset($_GET['delete_task']) && is_numeric($_GET['delete_task'])){
    $deletedcount=deleteTask($_GET['delete_task']);
    //echo "$deletedcount folders succesfully deleted";
}


$folders=getFolders();
$tasks=getTasks();


include "tpl/tpl-index.php";
