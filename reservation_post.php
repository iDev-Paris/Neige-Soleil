<?php  
// Connexion a la base 
require_once("connexion.php");

// Requete
$req = $bdd->prepare('INSERT INTO reservation ( dateA, dateD, iduser, idhab) VALUES ( ?, ?, ?, ?)');
$req->execute(array($_POST['dateA'], $_POST['dateD'], $_POST['iduser'], $_POST['idhab']));
	echo "ok";
header('Location: index.php');

if (isset($_POST['NULL']) == $resultat['NULL']) {

	echo 'Veulliez remplire accidument ce laissez passé A38 !';
}

