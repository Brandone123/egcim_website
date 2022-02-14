<!DOCTYPE html>
<html lang="en">
<head>
	<title>EGCIM|UN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="http://egcim-univ-ndere.cm/assets/img/logoEGCIM40.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/admin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="http://egcim-univ-ndere.cm/assets/img/EGCIM-logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?= site_url('login/mdp')?>" method="post">
					<span class="login100-form-title">
						Bienvenu Dr ... Veillez
						Changez votre mot de passe
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="login" placeholder="Login">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<label for='pass'>Votre ancien mot de passe</label><br/>
						<input class="input100" type='password' name='pass' id='mdp' placeholder="Old Password"/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<label for='NewPass'>Votre nouveau mot de passe</label><br/>
						<input class="input100" type='password' name='NewPass' id='mdp' placeholder="New Password"/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<label for='NewPassVerif'>Confirmez votre nouveau mot de passe</label><br/>
						<input class="input100" type='password' name='NewPassVerif' placeholder="Password"/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Valider
						</button>
					</div>

					<!-- <div class="text-center">
						<a class="btn btn-primary" href="<?= site_url('/')?>" style="margin: 10px">
							Page d'accueil
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
					<!-- <div class="text-center p-t-136">
						<a class="txt2" href="<?= site_url('login/register')?>">
							Creer un compte
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?= base_url()?>assets/admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/admin/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/admin/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/admin/js/main.js"></script>

</body>
</html>