<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from eres.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 03:44:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ERES - Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="#" method="POST">
                                        <div class="form-group validate-input <?php if (isset($error)) {
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
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email.." value="<?= set_value("email"); ?>">
                                        </div>
                                        <div class="form-group validate-input <?php if (isset($error)) {
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
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" id="tombolLogin">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>

</body>


<!-- Mirrored from eres.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 03:44:29 GMT -->
</html>