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
	<div class="container-contact100">
		<div class="wrap-contact100">
		<a class="mbtn" href="index.php"><img src="assets/img/close.png"></a>
			<form class="contact100-form validate-form" action="info-habitat_post.php" method="post" autocomplete="off">
				<span class="contact100-form-title">
					INFORMATION
				</span>

<!-- 
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div> -->

				<div class="wrap-input100 validate-input">
					<span class="label-input100">idhab</span>
					<?php echo' <input class="input100" type="int" name="idhab" id="idhab" value="'. $_SESSION['idhab'] .'"></input>';?>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input">
					<span class="label-input100">libelle</span>
					<?php echo' <input class="input100" type="text" name="libelle" id="libelle" value="'. $_SESSION['libelle'] .'"></input>';?>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" >
					<span class="label-input100">description</span>
					<?php echo'<input class="input100" type="text" name="description" id="description" value="'. $_SESSION['description'] .'"></input>';?>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input">
					<span class="label-input100">nbpersonne</span>
					<?php echo'<input class="input100" type="int" name="nbpersonne" id="nbpersonne" value="'. $_SESSION['nbpersonne'] .'"></input>';?>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input form">
					<span class="label-input100">Vous êtes ?</span>
					<div class="container">
						<div class="radio-tile-group">
							<div class="input-container">
								<input id="walk" class="radio-button" id="vacant" name="vacant" value="1" type="radio" />
								<div class="radio-tile">
									<div class="icon walk-icon">
										<img fill="#000000" height="90" viewBox="0 0 24 24" width="90" src="assets/img/ProprioOn.png">
									</div>
									<label for="walk" class="radio-tile-label">PROPRIETAIRE</label>
								</div>
							</div>

							<div class="input-container">
								<input id="bike" class="radio-button" id="vacant" name="vacant" value="0" type="radio" />
								<div class="radio-tile">
									<div class="icon walk-icon">
										<img fill="#000000" height="90" viewBox="0 0 24 24" width="90" src="assets/img/LocataireOn.png">
									</div>
									<label class="radio-tile-label">LOCATAIRE</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
							Mettre à jour
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
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>