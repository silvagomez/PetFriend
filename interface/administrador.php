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
	<script src="../js/funciones.js" defer></script>
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
					<article class="three_opc">
						<figure class="iconos_admi">
							<figcaption>
								<h2 class="titulo_icon">- Usuarios -</h2>
							</figcaption>
							<a href="#" class="vista _user" onclick=display_list(0)>
								<img src="../img/iconos_admi_usuarios.png" class="icon_sw">
							</a>
						</figure>

						<figure class="iconos_admi">
							<figcaption>
								<h2 class="titulo_icon">- Animales -</h2>
							</figcaption>
							<a href="#" class="vista _animal" onclick=display_list(1)>
								<img src="../img/iconos_admi_animales.png" class="icon_sw">
							</a>
						</figure>

						<figure class="iconos_admi">
							<figcaption>
								<h2 class="titulo_icon">- Reservas -</h2>
							</figcaption>
							<a href="#" class="vista _reserva" onclick=display_list(2)>
								<img src="../img/iconos_admi_reservas.png" class="icon_sw">
							</a>
						</figure>

					</article>
					<article class="lista_0" style="display:none;">
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
							<!-- <div class="bd_row brtitulo bda">
                                <p>Editar</p>
                            </div> -->
							<div class="bd_row brtitulo bda">
								<p>Eliminar</p>
							</div>
						</div>
						<?php
							require_once "../php/list_usuarios.php";
							//require_once "../php/list_animales.php";
                            ?>
					</article>
					<article class="lista_1" style="display:none;">
						<div class="btani">
							<a href="agregarAnimal.php">
								<button class="btn_basic_add">
									Agregar un animal
								</button>
							</a>
						</div>
						<div class="list_usuarios">

							<div class="bd_row brtitulo">
								<p>Nombre</p>
							</div>
							<div class="bd_row brtitulo">
								<p>Raza</p>
							</div>
							<div class="bd_row brtitulo">
								<p>Sexo</p>
							</div>
							<div class="bd_row brtitulo">
								<p>Likes</p>
							</div>
							<div class="bd_row brtitulo bda">
								<p>Editar</p>
							</div>
							<div class="bd_row brtitulo bda">
								<p>Eliminar</p>
							</div>
						</div>
						<?php
							require_once "../php/list_animales_total.php";
							?>

					</article>
					<article class="lista_2" style="display:none;">
						<div class="list_usuarios">
							<div class="bd_row brtitulo">
								<p>Usuario</p>
							</div>
							<div class="bd_row brtitulo">
								<p>Animal</p>
							</div>
							<div class="bd_row brtitulo">
								<p>Recogida</p>
							</div>
							<div class="bd_row brtitulo">
								<p>Entrega</p>
							</div>
							<div class="bd_row brtitulo bda">
								<p>Id_pago</p>
							</div>
							<div class="bd_row brtitulo bda">
								<p>Cantidad</p>
							</div>
						</div>
						<?php
							require_once "../php/list_reservas.php";
							?>

				</section>

			</div>

		</main>
	</div>
	<?php
	require_once 'footer.php';
	?>


</body>

</html>