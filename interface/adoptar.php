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
			<?php
			if (isset($_SESSION['user'])) {
				# code...
			echo <<<html
            <article class="adoptar">
                <img src="../img/adopta1.png" alt="">
                <div class="txt_adopt">
                    <p>
                        ESTAMOS EMPACANDO LOS JUGUETES DE TU NUEVA COMPAÑIA <br>
                        EN POCO TIEMPO NOS CONTACTAREMOS CONTIGO
                    </p>
                </div>

			</article>
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
