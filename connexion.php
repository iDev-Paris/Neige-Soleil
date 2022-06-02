<?php

try {
                // VM --> $bdd = new PDO('mysql:host=localhost;dbname=neigesoleil;charset=utf8', 'guillaume ou idgie', 'guillaume ou idgie');
                //local --> $bdd = new PDO('mysql:host=localhost;dbname=neigesoleil;charset=utf8', 'root', '');
                // Hostinger --> 
                $bdd = new PDO('mysql:host=localhost;dbname=u276030526_neigesoleil;charset=utf8', 'u276030526_psycosgwak', 'j9K^KTje+R');
        } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
        }
?>