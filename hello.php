<html>
<body>
<?php
	$a = 2; 
	$b = 3;
	$mul = $a * $b;
	echo "<b>Bonjour PHP</b><br/>";
	echo $a . " * " . $b . " = " . $mul;
	
	$today = getdate();
    $filename = "img" . $today[0] . ".jpg";
	echo $filename;
?>
</body>
</html>