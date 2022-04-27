<?php
function getCurrentUrl(){
    return 1;
}
function isAjaxRequest(){
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){ //برای اینکه چک کند آیا درخواست ای جکس هست یا نه
        return true;
    }
    return false;
}

function diepage($msg){
    echo "<div style='padding: 30px;
    width: 80%;
    margin: 50px auto;
    background: #f9dede;
    border: 1px solid;
    color: black;
    border-radius: 5px;
    font-family: inherit;'>
    $msg</div>";
    die();
}
