<?php
// $dayofweek=5;
// switch($dayofweek){
//     case 1:
//         echo "شنبه";
//     break;
//     case 2:
//         echo "شنبه1";
//     break;     
//     case 3:
//         echo "شنبه2";
//     break;   
//     case 4:
//         echo "شنبه3";
//     break;
//     case 5:
//         echo "شنبه4";
//     break; 
//     case 6:
//         echo "شنبه5";
//     break; 
//     case 7:
//         echo "جمعه";  
//         default:
//         echo "روزی پیدا نشد" ;                
// }

$day=date("l");//روز را نشان می دهد
echo $day;
switch($day){
    case saturday:
        echo "شنبه";
    break;
    case sunday:
        echo "شنبه1";
    break;     
    case monday:
        echo "شنبه2";
    break;   
    case 4:
        echo "شنبه3";
    break;
    case 5:
        echo "شنبه4";
    break; 
    case 6:
        echo "شنبه5";
    break; 
    case 7:
        echo "جمعه";  
        default:
        echo "روزی پیدا نشد" ;                
};