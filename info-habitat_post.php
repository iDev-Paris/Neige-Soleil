<?php
session_start();
?>

<?php  
// Connexion a la base 
require_once("connexion.php");

// Requete
$req = $bdd->prepare ('UPDATE habitat SET libelle= ?, description= ?, nbpersonne= ?, vacant= ?,  where idhab= ?;');
$req->execute(array($_POST['libelle'], $_POST['description'], $_POST['nbpersonne'], $_POST['vacant'], $_POST['idhab'],));
echo "ok";
header('Location: index.php');