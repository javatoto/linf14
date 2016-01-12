<?php
echo "<table border='#ccc 1px solid'>";
echo "<tr>";
echo "<td></td>";
for ($b = 1; $b<10; $b++) {
	echo "<td style='background-color:blue; width:40px'><b>" . $b . "</b></td>";
}
echo "</tr>";
for ($a = 1; $a<10; $a++) {
	echo "<tr>";
		echo "<td style='background-color:green; width:40px'><b>" . $a . "</b></td>";
		for ($b = 1; $b<10; $b++) {
			echo "<td style='width:40px;'>" . $a*$b . "</td>";
		}
	echo "</tr>";
}
echo "</table>";
?>