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
	<link rel="stylesheet" type="text/css" href="../css/modal.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<!--<link href="https://fonts.googleapis.com/css?family= Quicksand " rel="stylesheet">-->

	<!--Zona para los scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="../js/buscador.js" async defer></script>
</head>

<body>
	<?php
	require_once 'header.php';
	?>
	<div class="wrapper w2">
		<main>
			<article class="buscador">
				<!-- <form autocomplete="off"> -->
					<input class="search" type="text" placeholder=" Cuatro patas..." id="busqueda" name="buscar" onkeyup="buscar_ajax(this.value);">
					<!--<button type="submit" class="lookup"><i class="fa fa-search"></i></button>-->
				<!-- </form> -->
				<select class="bus_animal" name="" id="rz">
					<option value="Animales" disabled:selected>Animales</option>
					<option value="Perro">Perro</option>
					<option value="Gato">Gato</option>
					<option value="Ave">Ave</option>
					<option value="Pez">Pez</option>
					<option value="Reptil">Reptil</option>
					<option value="Roedor">Roedor</option>
				</select>
				<button type="submit" class="icono_ani" onclick="miFiltro()">Aplicar filtro</button>
				<!-- <input type="submit"    value="Aplicar" onclick="miFiltro()"> -->
				<section>
					<ul id="mostrar">

					</ul>
				</section>
			</article>
			<article class="animals">
				<?php
				
				require_once '../php/list_animales.php';

				?>
			</article>

			<article class="load">
				<a href="animales.php"><img src="../img/cargando.gif" alt=""></a>
			</article>

			<!-- inicio modal -->

			<div id="lamascara" class="mascara">
				<div class="contenido">
					<a href=""><span class="cerrar">&times;</span></a>
					<div class="animal_div">
						<div class="animal_img">
							<img class="ani_img" id="img_p" src="">
						</div>
						<div class="animal_txt">
							<div class="texto_perfil">
								<p class="nombre_animal"><span class="uno" id="vn_animal"></span></p>
								<div class="posicion">
									<p class="sexo"><span class="dos" id="vn_sexo"></span></p>
									<p class="anios"><span class="tres" id="vn_anho"></span></p>
								</div>
								<p class="especie" id="vn_esp"><span class="cuatro" ></p>
							</div>
							<div class="botones">
								<a href="reservar.php" id="vn_link"> <button type="button" name="" class="btn_comp">Reservar tiempo</button></a>
								<a href="adoptar.php"> <button type="button" name="" class="btn_adop">Adóptalo</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript" src="../js/modal.js"></script>
			

		</main>
	</div>
	<?php
	require_once 'footer.php';
	?>


</body>

</html>