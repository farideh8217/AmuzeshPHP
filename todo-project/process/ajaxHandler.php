<?php
include_once "../bootstrap/init.php";

if(!isAjaxRequest()){
    diepage("inavalid request");
}
if(!isset($_POST['action'])){
    diepage("inavalid request");
} 

switch($_POST['action']){

}
var_dump($_POST);