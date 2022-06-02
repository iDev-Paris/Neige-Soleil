 <?php
// Connexion a la base 
require_once("connexion.php");

// Requete
        $req = $bdd->prepare('SELECT iduser, prenom, dateNaissance, ville, cp, adresse, tel, username, nom, mail, password, type FROM user WHERE mail = ?');
        $req->execute(array($_POST['mail']));
        $resultat = $req->fetch();
        $password = $_POST['password'];
        if (isset($_POST['mail']) == $resultat['mail']) {
                if ($password == $resultat['password']) {
                        session_start();
                        $_SESSION['iduser'] = $resultat['iduser'];
                        $_SESSION['prenom'] = $resultat['prenom'];
                        $_SESSION['dateNaissance'] = $resultat['dateNaissance'];
                        $_SESSION['ville'] = $resultat['ville'];
                        $_SESSION['cp'] = $resultat['cp'];
                        $_SESSION['adresse'] = $resultat['adresse'];
                        $_SESSION['username'] = $resultat['username'];
                        $_SESSION['tel'] = $resultat['tel'];
                        $_SESSION['nom'] = $resultat['nom'];
                        $_SESSION['mail'] = $resultat['mail'];
                        $_SESSION['password'] = $resultat['password'];
                        $_SESSION['type'] = $resultat['type'];
                        echo 'Vous êtes connecté !';
                        header('Location: index.php');
                } else {
                        echo 'Mauvais identifiant ou mot de passe !';
                        $req = $bdd->prepare('INSERT INTO LF ( idlog,DH) VALUES ( ?, ?)'); 
                        $req->execute(array($_POST['idlog'], $_POST['DH']));
                                echo "ok";
                }
        }
?>