<?php
        // Connexion a la base 
        require_once("connexion.php");

        // Requete
        $req = $bdd->prepare('SELECT idhab, nom, description, nbpersonne, vacant FROM habitat WHERE idhab = ?');
        $req->execute(array($_POST['idhab'], $_POST['nom'], $_POST['description'], $_POST['nbpersonne'], $_POST['vacant']));

?>