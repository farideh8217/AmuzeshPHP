<?php
include "constans.php";
include BASE_PATH."config.php";
include BASE_PATH."lib/helper.php";
include BASE_PATH."lib/lib-auth.php";
include BASE_PATH."lib/lib-tasks.php";
include BASE_PATH."vendor/autoload.php";



try{
    $pdo=new PDO("mysql:dbname=$database_config->db;host=$database_config->host",$database_config->user,$database_config->pass);
}catch(PDOException $e){
    diepage('connection failed:'.$e->getMessage()) ;
}
//echo "connection to database is ok";


