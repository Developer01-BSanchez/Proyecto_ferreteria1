<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="img/logo-icono.png">
	<title>Ingreso - Ferreteria E . E</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="js/sweetalert2.js" ></script>

	<!-- General Styles -->
	<link rel="stylesheet" href="css/style.css">

</head>
<body id="main-body">

	<!-- Header -->
	<header class="header full-box bg-white">
	    <div class="header-brand full-box">
	        <a href="index.php">
	            <img src="img/logo-escoinfer.png" alt="Designlopers" class="img-fluid">
	        </a>
	    </div>
	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold scroll" onclick="show_menu_mobile()" >
	            <ul class="list-unstyled full-box" >
	                <li>
						<a>Ferreteria Escoinfer Escobillas</a>
					</li>
	                <li>
	                    <a id="inicio" href="../index.php" >Inicio</a>
	                </li>
	                <li>
	                    <a href="registration_usuario.php" >Regístrate</a>
	                </li>
	            </ul>
	        </nav>
	        <div class="dropdown-menu div-bordered popup-login" aria-labelledby="userMenu">
	            <p class="text-center" style="padding-top: 10px;">
	                <i class="fas fa-user-circle fa-3x"></i><br>
	                <small>Nombre de usuario</small>
	            </p>
	            <a class="dropdown-item" href="javascript:void(0);">
	                <i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard
	            </a>
	            <a class="dropdown-item" href="javascript:void(0);">
	                <i class="fas fa-sign-out-alt"></i> &nbsp; Cerrar sesión
	            </a>
	        </div>

	        <a href="javascript:void(0);" class="header-button full-box text-center d-lg-none" title="Menú" onclick="show_menu_mobile()" >
	            <i class="fas fa-bars"></i>
	        </a>
	    </div>
	</header>


	<!-- Content -->
	<section class="container-signin">
	    <div class="login-content div-bordered mb-4">
	        <figure class="full-box mb-4">
	            <center><img src="img/logo-icono.png" alt="" class="icon-login" style="height: 150px; width: auto" ></center>
	        </figure>
	        <form action="../controller/login.php" method="POST" autocomplete="off">
	            <div class="form-outline mb-4">
				<input type="email" class="form-control" name="login_email" id="login_email" maxlength="47" required="">
	                <label for="login_email" class="form-label"><i class="fas fa-envelope-open-text"></i> &nbsp; Email</label>
	            </div>
	            <div class="form-outline mb-4">
				<input type="password" class="form-control" name="login_clave" id="login_clave" required="">
	                <label for="login_clave" class="form-label"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
	            </div>
	            <button type="submit" name="btningresar" class="btn btn-primary text-center mb-4 w-100">Ingresar</button>
	        </form>
	    </div>
	    <p class="text-center poppins-regular">¿No tienes cuenta? <a href="registration_usuario.php" class="font-weight-bold">Regístrate aquí</a></p>
	</section>

	<!-- Footer 
	<footer class="footer">
	</footer>-->


	<!-- MDBootstrap V5 -->
	<script src="js/mdb.min.js" ></script>

	<!-- General scripts -->
	<script src="js/main.js" ></script>
</body>
</html>