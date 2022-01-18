<!DOCTYPE html>
<html lang="en">

<head>
	<title>E-DOKAR</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	
	<link rel="icon" href="<?= base_url() ?>assets/new.png" type="image/png">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_login/css/main.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets_admin/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url() ?>assets/bg.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action='#' method="POST">
					<span class="login100-form-logo">
						<!-- <i class="zmdi zmdi-gamepad"></i> -->
						<img src="<?= base_url() ?>assets/new.png">
						<!-- <i class="zmdi zmdi-landscape"></i> -->
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						E-DOKAR
					</span>

					<div class="wrap-input100 validate-input <?php if (isset($error)) {
																	if ($error[0] == "email") echo "alert-validate";
																} ?>" data-validate="<?php if (isset($error)) {
																							if ($error[0] == "email") {
																								echo $error[1];
																							} else {
																								echo "Silahkan isi Email.";
																							}
																						} else {
																							echo "Silahkan isi Email.";
																						} ?>" id="pesanEmail">
						<input class="input100" type="email" id="email" name="email" placeholder="Email.." value="<?= set_value("email"); ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input <?php if (isset($error)) {
																	if ($error[0] == "pass") echo "alert-validate";
																} ?>" data-validate="<?php if (isset($error)) {
																							if ($error[0] == "pass") {
																								echo $error[1];
																							} else {
																								echo "Silahkan isi password.";
																							}
																						} else {
																							echo "Silahkan isi password.";
																						} ?>" id="pesanPass">
						<input class="input100 active" type="password" id="pass" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- <div class="row mb-4">
						<div class="col-6" id="tempatCaptcha">
							<?php //echo $fotoCaptcha; 
							?>
						</div>
						<div class="col-6">
							<input type="text" id="isiCaptcha" class="form-control" name="isiCaptcha" placeholder="kode..">
							<?php //if (isset($error)) {
							//if ($error[0] == "cap") echo "<i class='badge badge-danger'>" . $error[1] . "</i>";
							//} 
							?>
						</div>
					</div> -->
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="tombolLogin">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>



	<script src="<?= base_url() ?>assets_login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets_login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>assets_login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets_login/js/main.js"></script>

</body>

</html>