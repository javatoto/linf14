<?php
echo "Je m'appelle " . $_POST["name"];
echo "<br/>";
echo "Je suis " . ($_POST["gender"] == "Nam" ? "un homme" : "une femme");
echo "<br/>";
echo "Mon nombre secret est " . $_POST["secret"];
?>