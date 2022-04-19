<?php
$i=1;
$j=1;
echo '<table width="99%"  border="2" align="center">';
while ($i<=10){
    $j=1;
    echo '<tr align="center">';
    while($j<=10){
        echo '<td>',$i * $j,'</td>';
        $j++;
    }
    echo '</tr>';
$i++;    
}
echo '</table>';