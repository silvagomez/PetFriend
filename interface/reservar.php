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
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
	<link rel="stylesheet" href="../css/calendario.css">
	<!--<link href="https://fonts.googleapis.com/css?family= Quicksand " rel="stylesheet">-->

	<!--Zona para los scripts-->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js" refer></script>
	<!-- <script src="../js/calendario.js" async refer></script> -->
</head>

<body>
	<?php
	require_once 'header.php';
	?>
	<div class="wrapper w2">
		<main>
		<?php
			if (isset($_SESSION['user'])) {
				# code...
				$pet=$_REQUEST['pet'];
				$id=$_REQUEST['id'];
				echo <<<html
				<article class="reservar">
					<div class="marco_reserva">
						<form class="contenido_reserva" action="pago_reserva.php?id={$_REQUEST['id']}" method="post">
							<div class="column_reserva">
								<label>Compañero *</label>
								<input type="text" name="pet" value="$pet">
							</div>
							<div class="column_reserva">
								<label for="fecha">Inicio *</label>
								<input autocomplete="off" placeholder="aa-mm-dd" id="start-date" name="f_ini" value="" class="datepicker calendar" >
							</div>
							<div class="column_reserva">
								<label>Fin *</label>
								<input  autocomplete="off"  placeholder="aa-mm-dd" id="end-date" name="f_fin" value=""  class="datepicker2 calendar">
							</div>
							<div class="column_reserva2">
								<input type="submit" name=""  value="RESERVAR" class="inpunt_basico2">
							</div>
						</form>
					</div>
				</article>
				<script src="../js/calendario.js"></script>
html;
			} else {
				# code...
				echo <<<html
				<article class="nosession">
				<div class="marco_mensajedepago">
					<h2>DEBES INICIAR SESIÓN PARA CONTINUAR</h2>
				</div>
            </article>
html;
			}
		?>
		</main>
	</div>
	<?php
	require_once 'footer.php';
	?>


</body>

</html>
