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
	<?php
	require_once 'footer.php';
	?>


</body>

</html>
