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
            <article class="marco_confirmacion">
                <div class="fila_confirmacion fc2">
                <h2>CONFIRMACIÓN DE PAGO</h2>
                </div>
                <div class="fila_confirmacion fc1">
                    <div class="column_confimacion">
                        <label class="label_titulo">Animal</label><br>
                        <label>Ramona</label>
                    </div>
                    <div class="column_confimacion">
                        <label class="label_titulo">Dia</label><br>
                        <label>25/25/2020</label>
                    </div>
                    <div class="column_confimacion">
                        <label class="label_titulo">Precio</label><br>
                        <label>33€</label>
                    </div>
                </div>
                <div class="fila_confirmacion fc1">
                    <div class="column_confimacion">
                        <label class="label_titulo">SubTotal</label><br>
                        <label class="label_titulo">IVA(21%)</label><br>
                        <label class="label_titulo">Total</label>
                    </div>
                    <div class="column_confimacion">
                        <label>33€</label><br>
                        <label>6.93€</label><br>
                        <label>39.93€</label><br>

                    </div>
                </div>
                <div class="fila_confirmacion">
                    <form class="form1" action="mensaje_pago.php" method="post">
                        <label for="cantidad" class="label_titulo">Cantidad:</label>
                        <input name="cantidad" placeholder="39.93€">
                        <label for="nombre" class="label_titulo">Nombre en la tarjeta: *</label>
                        <input name="nombre" placeholder="Nombre">
                        <label for="ntarjeta" class="label_titulo">Número de la tarjeta: *</label>
                        <input name="ntarjeta" type="ntarjeta" placeholder="0000-0000-0000-0000">
                        <label for="cseguridad" class="label_titulo">Código de seguridad: *</label>
                        <input name="cseguridad" placeholder="000">
                        <label for="expira" class="label_titulo">Expiración: *</label>
                        <input name="expira" type="expira" placeholder="mes-año">
                        <label for="TermsAndConditions" class="term_condition">
                            <input name="TermsAndConditions" type="checkbox" value="true" required>
                            <a href="error404.php">Términos y Condiciones</a>
                            <a href="error404.php">Política de Privacidad</a>
                        </label>
                        <br>
                        <button type="submit" name="button" class="btn_basic">Pagar</button>
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
