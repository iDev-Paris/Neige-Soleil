<?php  
// Connexion a la base 
require_once("connexion.php");

// Requete
$req = $bdd->prepare('INSERT INTO images (url_im, idhab) VALUES ( ?, ?)');
$req->execute(array($_POST['url_im'], $_POST['idhab']));
echo "ok";
header('Location: index.php');