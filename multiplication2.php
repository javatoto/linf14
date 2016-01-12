<html>
<body>
<table border='#ccc 1px solid'>
<tr>
<td></td>
<?php
for ($b = 1; $b<10; $b++) {
?>
	<td style='background-color:blue; width:40px'><b><?php echo $b ?></b></td>
<?php
}
?>
</tr>
<?php
for ($a = 1; $a<10; $a++) {
?>
<tr>
	<td style='background-color:green; width:40px'><b><?php echo $a ?></b></td>
<?php	
	for ($b = 1; $b<10; $b++) {
?>
	<td style='width:40px;'><?php echo $a*$b ?></td>
<?php
}
?>
</tr>
<?php
}
?>
</table>
</body>
</html>