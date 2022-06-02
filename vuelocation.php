<?php
session_start();
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NEIGE & SOLEIL</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
<?php  
// Connexion a la base 
require_once("connexion.php");

// Requete
$req = $bdd->prepare('SELECT * FROM locationproprio WHERE iduser = ?');
$req->execute(array($_SESSION['iduser']));
$resultat = $req->fetchAll();
?>
<!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <img class="logo" src="assets/img/logo.png">
            <a class="navbar-brand js-scroll-trigger" href="index.php">Neige & Soleil</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <?php if (isset($_SESSION['mail']) and isset($_SESSION['password'])) {
                echo '<div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio"></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact"></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#activite"></a></li>
                </ul>
                <div class="btn-group">
                <button type="button" class="btn btn-co btn3">Bonjour, ' . $_SESSION['username'] . '</button>
                <button type="button" class="btn btn-co dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">';
                if (($_SESSION['type'] == '1')) {
                    echo ' <a class="dropdown-item" href="information.php">Mes informations</a>
                        <a class="dropdown-item" href="vuelocation.php">Mes locations</a>
                  <a class="dropdown-item" href="habitat-registration.php">Louer</a>
                  <a class="dropdown-item" href="img.php">Img</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Decconexion</a>
                </div>
              </div>
            </div>';
                } else {
                    echo ' <a class="dropdown-item" href="information.php">Mes informations</a>
                    <a class="dropdown-item" href="vuereser.php">Mes reservations</a>
                    <a class="dropdown-item" href="vuefail.php">failconnexion</a>
                    <a class="dropdown-item" href="reservation.php">Reserver</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Decconexion</a>
                  </div>
                </div>
              </div>';
                }
            } else {
                echo '<div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio"></a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"></a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact"></a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#activite"></a>
                        </li>
                    </ul>
                    <div class="btn-group">
                        <a class="font-weight-bold btn btn-co btn3" role="button" href="login.php"> Mon compte</a>
                  </div>
                </div>';
            } ?>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead2 text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Heading-->
    </header>

    <section class="page-section text-black mb-0">
        <div class="container2">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase">Mes locations</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-snowflake"></i>&nbsp<i class="fas fa-snowflake"></i>&nbsp<i class="fas fa-snowflake"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <?php include("tableloca.php"); ?>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <!-- <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        2215 John Daniel Drive
                        <br />
                        Clark, MO 65243
                    </p> -->
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Retrouvez</h4>
                    <h4 class="text-uppercase mb-4">Neige & Soleil</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/neige_et_soleil/"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <!-- <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About iDev</h4>
                    <p class="lead mb-0">
                        
                        <a href="http://startbootstrap.com"></a>
                        .
                    </p>
                </div> -->
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © iDev N&S 2020</small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- datepicker-->
    <script src="../assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>
</body>