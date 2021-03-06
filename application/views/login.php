<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Login | Melon - Flat &amp; Responsive Admin Template</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Theme -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

	<!-- Login -->
	<link href="assets/css/login.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="assets/js/libs/jquery-1.10.2.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Beautiful Checkboxes -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script>

	<!-- Form Validation -->
	<script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>

	<!-- Slim Progress Bars -->
	<script type="text/javascript" src="plugins/nprogress/nprogress.js"></script>

	<!-- App -->
	<script type="text/javascript" src="assets/js/login.js"></script>
	<script>
	$(document).ready(function(){
		"use strict";

		Login.init(); // Init login JavaScript
	});
	</script>
</head>

<body class="login">
	<!-- Logo -->
    <div class="logo">
        <img src="assets/img/PazyBien.png" alt="logo" style="height: 120px;"/>
        <br/>
        <img src="assets/img/aecid.png" alt="logo" style="width: 180px;"/>
        <img src="assets/img/HelpAge.png" alt="logo" style="width: 100px;"/>
        
    </div>
    <!-- /Logo -->

    <!-- Login Box -->
    <div class="box">
        <div class="content">
            <!-- Login Formular -->
            <form class="form-vertical login-form" action="dashboard" method="post">
                <!-- Title -->
                <h3 class="form-title">Ingresar sus datos</h3>

                <!-- Error Message -->
                <div class="alert fade in alert-danger" style="display: none;">
                    <i class="icon-remove close" data-dismiss="alert"></i>
                    Introduzca su nombre de usuario y contraseña.
                </div>

                <!-- Input Fields -->
                <div class="form-group">
                    <!--<label for="username">Username:</label>-->
                    <div class="input-icon">
                        <i class="icon-user"></i>
                        <input type="text" name="username" class="form-control" placeholder="Nombre de Usuario" autofocus="autofocus" data-rule-required="true" data-msg-required="Por favor introduzca su nombre de usuario." />
                    </div>
                </div>
                <div class="form-group">
                    <!--<label for="password">Password:</label>-->
                    <div class="input-icon">
                        <i class="icon-lock"></i>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" data-rule-required="true" data-msg-required="Por favor introduzca su contraseña." />
                    </div>
                </div>
                <!-- /Input Fields -->

                <!-- Form Actions -->
                <div class="form-actions">
                    <label class="checkbox pull-left"><input type="checkbox" class="uniform" name="remember"> Recordarme</label>
                    <button type="submit" class="submit btn btn-primary pull-right">
                        Ingresar <i class="icon-angle-right"></i>
                    </button>
                </div>
            </form>
            <!-- /Login Formular -->

            <!-- Register Formular (hidden by default) -->
            <form class="form-vertical register-form" action="index.html" method="post" style="display: none;">
                <!-- Title -->
                <h3 class="form-title">Registrarse</h3>

                <!-- Input Fields -->
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-user"></i>
                        <input type="text" name="username" class="form-control" placeholder="Nombre de Usuario" autofocus="autofocus" data-rule-required="true" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-lock"></i>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" id="register_password" data-rule-required="true" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-ok"></i>
                        <input type="password" name="password_confirm" class="form-control" placeholder="Confirmar Contraseña" data-rule-required="true" data-rule-equalTo="#register_password" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="icon-envelope"></i>
                        <input type="text" name="Email" class="form-control" placeholder="Correo Electronico" data-rule-required="true" data-rule-email="true" />
                    </div>
                </div>

                <!--
                <div class="form-group spacing-top">
                    <label class="checkbox"><input type="checkbox" class="uniform" name="remember" data-rule-required="true" data-msg-required="Please accept ToS first."> Estoy de acuerdo con los <a href="javascript:void(0);">Términos del servicio</a></label>
                    <label for="remember" class="has-error help-block" generated="true" style="display:none;"></label>
                </div>
                <!-- /Input Fields -->

                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="button" class="back btn btn-default pull-left">
                        <i class="icon-angle-left"></i> Atrás</i>
                    </button>
                    <button type="submit" class="submit btn btn-primary pull-right">
                        Registrarse <i class="icon-angle-right"></i>
                    </button>
                </div>
            </form>
            <!-- /Register Formular -->
        </div> <!-- /.content -->

        <!-- Forgot Password Form -->
        <div class="inner-box">
            <div class="content">
                <!-- Close Button -->
                <i class="icon-remove close hide-default"></i>

                <!-- Link as Toggle Button -->
                <a href="#" class="forgot-password-link">¿Olvidó su contraseña?</a>

                <!-- Forgot Password Formular -->
                <form class="form-vertical forgot-password-form hide-default" action="login.html" method="post">
                    <!-- Input Fields -->
                    <div class="form-group">
                        <!--<label for="email">Email:</label>-->
                        <div class="input-icon">
                            <i class="icon-envelope"></i>
                            <input type="text" name="email" class="form-control" placeholder="Introduce dirección de correo electrónico" data-rule-required="true" data-rule-email="true" data-msg-required="Por favor introduzca su correo electrónico." />
                        </div>
                    </div>
                    <!-- /Input Fields -->

                    <button type="submit" class="submit btn btn-default btn-block">
                        Restablecer su contraseña
                    </button>
                </form>
                <!-- /Forgot Password Formular -->

                <!-- Shows up if reset-button was clicked -->
                <div class="forgot-password-done hide-default">
                    <i class="icon-ok success-icon"></i> <!-- Error-Alternative: <i class="icon-remove danger-icon"></i> -->
                    <span>Te hemos enviado un e-mail.</span>
                </div>
            </div> <!-- /.content -->
        </div>
        <!-- /Forgot Password Form -->
    </div>
    <!-- /Login Box -->

    <!-- Single-Sign-On (SSO) -->
    <div class="single-sign-on">
        <span>ó</span>

        <button class="btn btn-facebook btn-block">
            <i class="icon-facebook"></i> Ingrese con su sesión de facebook
        </button>

        <button class="btn btn-twitter btn-block">
            <i class="icon-twitter"></i> Ingrese con su sesión de Twitter
        </button>

        <button class="btn btn-google-plus btn-block">
            <i class="icon-google-plus"></i> Ingrese con su sesión de Google
        </button>
    </div>
    <!-- /Single-Sign-On (SSO) -->

    <!-- Footer -->
    <div class="footer">
        <a href="#" class="sign-up">No tienen una cuenta todavía? <strong>Regístrese</strong></a>
    </div>
    <!-- /Footer -->
</body>
</html>