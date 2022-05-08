<?php
include "bootstrap/init.php";

$home_url = site_url();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $action = $_GET['action'];
    $params = $_POST;
    if($action == 'register') {
        $result = register($params);
        if(!$result){
            message("Error: an error in registration!");
        }
    }else if($action == 'login'){
        $result = login($params['email'],$params['password']); 
        if(!$result){
            message("Error: email or password is incorrect !");
        }else{
            message("Registration is successfull. welcome to todo .<br>
            <a href='$home_url'>Manage your task</a>
            ", 'success');
        }
    }
}
include "tpl/tpl-auth.php";