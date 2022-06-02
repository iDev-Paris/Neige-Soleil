<?php
// Connexion a la base 
require_once("connexion.php");

// Requete
$req = $bdd->prepare('INSERT INTO habitat (libelle, description, nbpersonne, type, prix) VALUES (?, ?, ?,?,?)');
$req->execute(array($_POST['libelle'], $_POST['description'], $_POST['nbpersonne'], $_POST['type'], $_POST['prix']));
echo "ok";
header('Location: index.php');

if (isset($_POST['NULL']) == $resultat['NULL']) {

	echo 'Veulliez remplire accidument ce laissez passé A38 !';
}