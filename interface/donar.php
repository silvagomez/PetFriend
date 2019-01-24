<?php
	session_start();
	require_once "../php/usuario.php";
	if (isset($_SESSION['user'])) {
		$user=unserialize($_SESSION['user']);
	}

?>
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
                        <input type="number" name="cantidad" placeholder="€500" required>
                        <label for="nombre">Nombre en la tarjeta:</label>
                        <input type="text" name="nombre" placeholder="Nombre" required>
                        <label for="ntarjeta">Número de la tarjeta:</label>
                        <input type="number" name="ntarjeta" placeholder="0000-0000-0000-0000" min="16" max="16" required>
                        <label for="expira">Expiración:</label>
                        <input type="month" name="expira" placeholder="mes-año" required>
						<label for="cseguridad">Código de seguridad CCV</label>
						<input type="number" min="3" max="3" name="cseguridad" placeholder="000" pattern="[0-9]{3}" required>
                        <br>
                        <br>
                        <button type="submit" name="button" class="btn_basic">Donar</button>
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
