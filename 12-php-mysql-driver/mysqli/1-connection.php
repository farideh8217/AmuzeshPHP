<?php

$mysqli=new mysqli("localhost","root","","world");

if ($mysqli->connect_error){
    echo "failed to connect to mysql.Error: ".$mysqli->connect_error;
}

#connection is ok
echo "successfuly connect to mysql";
$mysqli->set_charset('utf8');