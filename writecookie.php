<?php
	$name = "name";
	$contenu = "Luong The Nhan";
	setcookie($name, $contenu, time()+ 365*24*60*60);
?>
<html>
	<h1>Ecriture de cookie</h1>
	<p>Un cookie a été envoyé</p>
	<p>Son nom est : <?php echo $name; ?></p>
	<p>Son contenu est : <?php echo $contenu; ?></p>
	<p><a href="readcookie.php">Suite</a></p>
</html>