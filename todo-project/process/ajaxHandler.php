<?php
include_once "../bootstrap/init.php";

if(!isAjaxRequest()){
    diepage("inavalid request");
}
if(!isset($_POST['action']) || empty($_POST['action'])){
    diepage("inavalid action");
} 

switch($_POST['action']){
    case "addFolder":
       if(!isset($_POST['folderName']) || strlen($_post['folderName']) < 3){
           echo "نام فولدر باید بزرگتر از 2حرف باشد";
           die();
       }
       echo addFolders($_post['folderName']);
    break;

    case "addTask":

    default:
        diepage("Invalid Action");
}
var_dump($_POST);