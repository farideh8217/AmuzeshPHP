<?php

include "bootstrap/init.php";

$folders=getFolders();
var_dump($folders[0]->name);
// $tasks=getTasks($folders);


include "tpl/tpl-index.php";
