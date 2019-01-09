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
            <div class="div_gemelos">
                <section class="pantalla_central3">
					<article class="titulo_sesion">
						<h2>PERFIL ADMINISTRADOR</h2>
					</article>
					<hr class="hr_uno">
					<br>
					<article class="3opc">
						<div class="opc">
							<img src="" alt="">
						</div>
						<div class="opc">
							<img src="" alt="">
						</div>
						<div class="opc">
							<img src="" alt="">
						</div>
					</article>
					<div class="btani">
							<a href="agregarAnimal.php">Agregar un animal</a>
					</div>
					<article class="lista_usuarios">
						<div class="list_usuarios">
                            <div class="bd_row brtitulo">
                                <p>Nombre</p>
                            </div>
                            <div class="bd_row brtitulo">
                                <p>Apellido</p>
                            </div>
                            <div class="bd_row brtitulo">
                                <p>E-mail</p>
                            </div>
                            <div class="bd_row brtitulo">
                                <p>Teléfono</p>
                            </div>
                            <div class="bd_row brtitulo bda">
                                <p>Editar</p>
                            </div>
                            <div class="bd_row brtitulo bda">
                                <p>Eliminar</p>
                            </div>
                        </div>
							<?php
							require_once "../php/list_usuarios.php";
							//require_once "../php/list_animales.php";
                            ?>
					</article>
					
				</section>

            </div>

		</main>
	</div>
	<?php
	require_once 'footer.php';
	?>


</body>

</html>
