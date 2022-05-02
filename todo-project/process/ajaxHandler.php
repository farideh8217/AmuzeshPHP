<?php
include_once "../bootstrap/init.php";

if(!isAjaxRequest()){ //داخل هلپر نوشته شده این فانکشن
    diepage("inavalid request");
}
if(!isset($_POST['action']) || empty($_POST['action'])){
    diepage("inavalid action");
} 

switch($_POST['action']){
    case "doneSwitch":
        $task_id = $_POST['taskId'];
        if(!isset($task_id) || !is_numeric($task_id)){
            echo "آیدی تسک معتبر نیست";
            die();
        }
        doneSwitch($task_id);
    case "addFolder":
       if(!isset($_POST['folderName']) || strlen($_POST['folderName']) < 3){
           echo "نام فولدر باید بزرگتر از 2حرف باشد";
           die();
       }
       echo addFolders($_POST['folderName']);
    break;

    case "addTask":
        $folderId = $_POST['folderId'];
        $taskTitle = $_POST['taskTitle'];
        if(!isset($folderId) || empty($folderId) ){
            echo "فولدر را انتخاب کنید";
            die();
        }
        if(!isset($taskTitle) || strlen($taskTitle) < 3 ){
            echo "عنوان تسک باید بزرگتر از دو حرف باشد";
            die();
        }
        echo addTask($taskTitle,$folderId);
    default:
        diepage("Invalid Action");
}

// var_dump($_POST);
