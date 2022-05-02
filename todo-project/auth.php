<?php
include "bootstrap/init.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $action = $_GET['action'];
    $params = $_POST;
    if($action == 'register') {
        $result = register($params);
    }else if($action == 'login'){
        $result = login($params['email'],$params['password']);
    }
}
include "tpl/tpl-auth.php";