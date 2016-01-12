<?php
if (isset($_POST['username'])) {
	$Login = $_POST['username'];
}
if (isset($_POST['password'])) {
	$Password = $_POST['password'];
}
if (isset($_POST['remember-me'])) {
	$keeploggedin = $_POST['remember-me'];
}
try {
    $strConnection = 'sqlsrv:Server=INFO-SIMPLET;Database=Classique'; 
    $arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); 
    $pdo = new PDO($strConnection, 'ETD', 'ETD', $arrExtraParam); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
    }
$query = "SELECT Code_Abonné, Nom_Abonné, Prénom_Abonné FROM Abonné WHERE Login = '$Login' AND Password = '$Password';";
$req=$pdo->query($query);
while($row = $req->fetch()){
    //echo $row['Login'].'------'.$row['Password'].'------'.$row[utf8_decode('Nom_Abonné')].'------'.$row[utf8_decode('Prénom_Abonné')].'<br/>';
	$Nom_User = $row[utf8_decode('Nom_Abonné')].' '.$row[utf8_decode('Prénom_Abonné')];
	$connecte = true;
    }    
$req->closeCursor();
$pdo = NULL;

if ($connecte) {
	session_start();
	$_SESSION["name"] = $Nom_User;
	$_SESSION["expire"] = time() + 60*60;
	if ($keeploggedin) {
		
	}
}
header("Location: index.php");
?>