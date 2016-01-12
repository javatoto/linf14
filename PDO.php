<?php
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
$query = "SELECT TOP 100 Code_Abonné, Login, Password, Nom_Abonné, Prénom_Abonné FROM Abonné;";
$req=$pdo->query($query);
while($row = $req->fetch()){
    echo $row['Login'].'------'.$row['Password'].'------'.$row[utf8_decode('Nom_Abonné')].'------'.$row[utf8_decode('Prénom_Abonné')].'<br/>';    
    }    
$req->closeCursor();  
?>