<!DOCTYPE html>
<html lang="en">

<head>
	<title>NEIGE & SOLEIL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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
			<form class="contact100-form validate-form" action="habitat-registration_post.php" method="post" autocomplete="off">
				<span class="contact100-form-title">
					HABITAT
				</span>
				<!-- 
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div> -->

				<div class="wrap-input100 validate-input form" data-validate="Valid email is required: ex@abc.xyz">
					<span class="label-input100">Nom</span>
					<input class="input100" type="text" name="nom" id="nom" placeholder="Nom" required></input>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input form" data-validate="Valid email is required: ex@abc.xyz">
					<span class="label-input100">Description</span>
					<input class="input100" type="text" name="description" id="description" placeholder="description" required></input>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input form" data-validate="Message is required">
					<span class="label-input100">Nombre de personne</span>
					<input class="input100" type="text" name="nbpersonne" id="nbpersonne" placeholder="Nb personne" required></input>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input form" data-validate="Message is required">
					<span class="label-input100">Prix</span>
					<input class="input100" type="text" name="prix" id="prix" placeholder="prix" required></input>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input form">
					<span class="label-input100">Vous enregistrez un ?</span>
					<div class="container">
						<div class="radio-tile-group">
							<div class="input-container">
								<input id="walk" class="radio-button" id="type" name="type" value="Chalet" type="radio" />
								<div class="radio-tile">
									<div class="icon walk-icon">
										<img fill="#000000" height="90" viewBox="0 0 24 24" width="90" src="assets/img/ProprioOn.png">
									</div>
									<label class="radio-tile-label">CHALET</label>
								</div>
							</div>

							<div class="input-container">
								<input id="bike" class="radio-button" tid="type" name="type" value="Appartement" type="radio" />
								<div class="radio-tile">
									<div class="icon walk-icon">
										<img fill="#000000" height="90" viewBox="0 0 24 24" width="90" src="assets/img/LocataireOn.png">
									</div>
									<label class="radio-tile-label">APPARTEMENT</label>
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
								Ajouter
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
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

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
</body>

</html>