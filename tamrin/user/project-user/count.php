<?php
include_once "config.php";
$count = $db->query("SELECT count(*) FROM users")->fetchColumn();
echo $count;