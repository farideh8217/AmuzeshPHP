<?php
$x=10;
$y=20;
function sum(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
    
}
sum();
echo $z;