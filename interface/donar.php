<!DOCTYPE html>
<html>

<head>
	<title>Pet Friend</title>
	<meta charset="utf-8">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="animales, perro, gato, alquilar, adoptar">
	<meta name="author" content="Allen Edv, Diego Camilo Silva Gómez, Mikel Calvo, Sandra Lopez">

	<!--Zona para los links-->
	<link rel="stylesheet" type="text/css" href="../css/master.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<!--<link href="https://fonts.googleapis.com/css?family= Quicksand " rel="stylesheet">-->

	<!--Zona para los scripts-->
</head>

<body>
	<header>
		<div class="wrapper w1">
			<nav>
				<div class="logo">
					<a href="home.php"><img class="img_logo" src="../img/logo.png"></a>
				</div>
					<div class="menu">
						<ul>
							<li><a href="contacto.php">Contácto</a></li>
							<li><a href="donar.php">Donar</a></li>
							<li><a href="animales.php">Animales</a></li>
							<!-- <li><a href="somos.php">Quienes somos</a></li> -->
						</ul>
					</div>
					<div class="mi_cuenta">
						<ul>
							<li><a href="cuenta.php" class="login">Cuenta</a></li>
						</ul>
					</div>
			</nav>
		</div>
	</header>
	<div class="wrapper w2">
		<main>
            <article class="donate">
                <div class="">
                    <form class="form1">
                        <label for="cantidad">Cantidad:</label>
                        <input name="cantidad" placeholder="€500">
                        <label for="nombre">Nombre en la tarjeta:</label>
                        <input name="nombre" placeholder="Nombre">
                        <label for="ntarjeta">Número de la tarjeta:</label>
                        <input name="ntarjeta" type="ntarjeta" placeholder="0000-0000-0000-0000">
                        <label for="cseguridad">Código de seguridad</label>
                        <input name="cseguridad" placeholder="000">
                        <label for="expira">Expiración:</label>
                        <input name="expira" type="expira" placeholder="mes-año">
                        <br>
                        <br>
                        <button type="button" name="button" class="btn_basic">Donar</button>
                    </form>
                </div>
                <div class="">
                    <img src="../img/donar.jpg" alt="">
                </div>
            </article>

		</main>
	</div>
	<footer>
		<div class="w5">

			<div class="wfooter aviso_legal">
				<p class="titulillo">muuu@petfriend.com</p><br>
				<a href="cookies.php" class="a_footer">Cookies</a><br>
				<a href="https://ec.europa.eu/justice/smedataprotect/index_en.htm" class="a_footer">Política de privacidad</a><br>
				<a href="error404.php" class="a_footer">Aviso legal</a><br>
				<a href="error404.php" class="a_footer">Términos y condiciones</a>
			</div>
			<div class="wfooter us">
				<p class="titulillo">Sobre nosotros</p><br>
				<a href="somos.php" class="a_footer">Quienes somos</a><br>
				<a href="contacto.php" class="a_footer">Contacto</a><br>
				<a href="error404.php" class="a_footer">Blog Animal</a><br>
				<a href="error404.php" class="a_footer">Noticias</a><br>

			</div>

			<div class="wfooter market">
				<div class="suscriptor">
					<form class="" action="index.php" method="post">
						<p class="titulillo">No te pierdas nuestras novedades</p>
						<br>
						<input type="text" name="" value="email" class="sus_email">
						<input type="button" name="" value="¡Apúntate!" class="btn_apuntate">
					</form>
				</div>
				<div class="redes_sociales">
					<p class="titulillo">Síguenos en nuestras redes sociales</p>
					<a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					<a href="https://www.snapchat.com/"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>

				</div>

			</div>
		</div>
		<div class="propiedad">
			<small>Copyright (c) 2018 Copyright Holder All Rights &nbsp Allende Eguía Del Valle - Mikel Calvo Pariente - Diego Camilo Silva Gómez - Sandra Lopez Villarragut</small>
		</div>
	</footer>


</body>

</html>
