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
	<?php
	require_once 'header.php';
	?>
	<div class="wrapper w2">
		<main>
			<article class="contact">
				<div class="cancall">
					<img src="../img/contacto.jpg" alt="">
				</div>
					<div class="formulario">
						<form class="form1">
							<label for="nombre">Nombre:</label>
							<input name="nombre" placeholder="Nombre">
							<label for="apellido">Apellido:</label>
							<input name="apellido" placeholder="Apellidos">
							<label for="email">Email:</label>
							<input name="email" type="email" placeholder="ejemplo@email.com">
							<label for="mensaje">Mensaje:</label>
							<textarea name="mensaje" placeholder="Danos tu mensaje"></textarea>
							<br>
							<br>
							<button type="button" name="button" class="btn_basic">Enviar</button>
						</form>
					</div>
			</article>

		</main>
	</div>
	<?php
	require_once 'footer.php';
	?>


</body>

</html>
