<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table V04</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/img/logo.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--===============================================================================================-->
</head>

<body>
<?php  
// Connexion a la base 
require_once("connexion.php");

// Requete
$req = $bdd->prepare('SELECT * FROM locationproprio WHERE iduser = ?');
$req->execute(array($_SESSION['iduser']));
$resultat = $req->fetchAll();
?>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">Num??ro logement</th>
                                    <th class="cell100 column2">Nom</th>
                                    <th class="cell100 column3">Pr??nom</th>
                                    <th class="cell100 column4">Logement</th>
                                    <th class="cell100 column5">Type</th>
                                    <th class="cell100 column5">Prix</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                                <?php 
                                        foreach($resultat as $unResultat)
                                            {
                                                //var_dump($tab);
            
                                                echo"<tr>
                                                <td class='cell100 column1'>".$unResultat['idhab']."</td>
                                                <td class='cell100 column2'>".$unResultat['nom']."</td>
                                                <td class='cell100 column3'>".$unResultat['prenom']."</td>
                                                <td class='cell100 column4'>".$unResultat['libelle']."</td>
                                                <td class='cell100 column5'>".$unResultat['type']."</td>
                                                <td class='cell100 column5'>".$unResultat['prix']."</td>
                                                </tr>";
                                            }
                                    ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>