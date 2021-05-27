<?php

echo "<center> <h1> Table </h1> <table>";

for($j=1;$j<=10;$j++){
	echo "<tr>";
	for($i=1;$i<=10;$i++){
		if ($i%2==0) {
			if ($j%2==0) {
				echo "<td bgcolor='pink' width='100px' align='center'>$i X $j = ".($i*$j)."</td>";
			} else {
				echo "<td bgcolor='red' width='100px' align='center'>$i X $j = ".($i*$j)."</td>";
			}
		} else {
			if ($j%2==0) {
				echo "<td bgcolor='grey' width='100px' align='center'>$i X $j = ".($i*$j)."</td>";
			} else {
				echo "<td bgcolor='orange' width='100px' align='center'>$i X $j = ".($i*$j)."</td>";
			}
		}
	}
	echo "</tr>";
}
echo "</table> </center>";
?>
