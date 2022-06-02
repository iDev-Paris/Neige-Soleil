<?php  
// Connexion a la base 
require_once("connexion.php");

// Requete
$req = $bdd->prepare('INSERT INTO user (username, prenom, dateNaissance, ville, cp, adresse, tel, nom, mail, password, type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['username'], $_POST['prenom'], $_POST['dateNaissance'], $_POST['ville'], $_POST['cp'], $_POST['adresse'], $_POST['tel'], $_POST['nom'], $_POST['mail'], $_POST['password'], $_POST['type']));
	echo "ok";
header('Location: index.php');

if (isset($_POST['NULL']) == $resultat['NULL']) {

	echo 'Veulliez remplire accidument ce laissez passé A38 !';
}