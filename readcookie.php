<?php
echo "<h1>Lecture de cookie</h1>";
$name = "name";
if (isset($_COOKIE[$name])) {
	echo "<p>Un cookie a été envoyé</p>";
	echo "<p>Son nom est : " .  $name . "</p>";
	echo "<p>Son contenu est : ". $_COOKIE[$name] . "</p>";
}
?>