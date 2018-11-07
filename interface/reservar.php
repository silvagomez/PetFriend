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
            <article class="reservar">
				<div class="marco_reserva">
					<form class="contenido_reserva" action="pago_reserva.php" method="post">
						<div class="column_reserva">
							<label>Compañero *</label>
							<input type="text" name="" value="Ramona">
						</div>
						<div class="column_reserva">
							<label>Inicio *</label>
							<input type="date" name="" value="">
						</div>
						<div class="column_reserva">
							<label>Fin *</label>
							<input type="date" name="" value="">
						</div>
						<div class="column_reserva2">
							<input type="submit" name="" value="RESERVAR" class="inpunt_basico2">
						</div>
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
