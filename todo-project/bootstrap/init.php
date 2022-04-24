<?php
include "constans.php";
include "config.php";
include "lib/helper.php";
include "lib/lib-auth.php";
include "lib/lib-tasks.php";
include "vendor/autoload.php";



try{
    $pdo=new PDO("mysql:dbname=$database_config->db;host=$database_config->host",$database_config->user,$database_config->pass);
}catch(PDOException $e){
    diepage('connection failed:'.$e->getMessage()) ;
}
echo "connection to database is ok";


