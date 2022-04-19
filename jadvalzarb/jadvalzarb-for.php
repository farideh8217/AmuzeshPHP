<?php
echo '<table width="100%"  border="2" align="center">';
for($i=1;$i<=10;$i++){
	echo '<tr align="center">';
	for($j=1;$j<=10;$j++){
		echo '<td>',$i * $j,'</td>';
	}
	echo '</tr>';
}
echo '</table>';
