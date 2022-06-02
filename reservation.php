<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>NEIGE & SOLEIL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
<?php
$requete="select * from habitat;";

// Connexion a la base 
require_once("connexion.php");

$select=$bdd->prepare($requete);
$select->execute();
$habitations=$select->fetchAll();
//$habitations=$uncontroler->selectHabitation();
?>
	<div class="container-contact100">
		<div class="wrap-contact100">
		<a class="mbtn" href="index.php"><img src="assets/img/close.png"></a>
		<form class="contact100-form validate-form" action="reservation_post.php" method="post" autocomplete="off">
		<span class="contact100-form-title">RESERVATION</span>

				<!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div> -->

                <div class="wrap-input100 validate-input" data-validate = "Valid user is required: ex@abc.xyz">
					<span class="label-input100">Username</span>
					<?php echo'<input class="input100" type="text" name="username" id="username" value="' . $_SESSION['username'] . '" readonly></input>';?>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Valid dateA is required: ex@abc.xyz">
					<span class="label-input100">Date debut</span>
					<input class="input100" type="date" name="dateA" id="=dateA" placeholder="AAAA-MM-JJ" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid dateD is required: ex@abc.xyz">
					<span class="label-input100">Date fin</span>
					<input class="input100" type="date" name="dateD" id="dateD" placeholder="AAAA-MM-JJ" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid dateD is required: ex@abc.xyz">
					<span class="label-input100">Lieu</span>
					<select class="input100" name="idhab" id="idhab">
						<?php
						foreach($habitations as $unehabitation){
							echo "<option value='".$unehabitation['idhab']."'>".$unehabitation["type"]."&nbsp".$unehabitation["libelle"]."&nbsp&nbsp|&nbsp&nbsp".$unehabitation["nbpersonne"]."&nbsp pers.</option>";
						}
						?>
					</select>
					<span class="focus-input100"></span>
				</div>

                    <?php echo'<input class="input100H" type="text" name="iduser" id="iduser" value="' . $_SESSION['iduser'] . '" readonly></input>';?>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
							ENREGISTRER
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
		


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
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
</html>