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
	<div class="w4">
		<main>
            <div class="logo2">
                <a href="home.php"><img class="img_logo2" src="../img/logo.png"></a>
			</div>
			<section class="pantalla_central pa1">

				<form class="" action="../php/altaAnimalControlador.php" method="post">

					<article class="titulo_central">
						<h2>AGREGAR UN ANIMAL A LA BBDD</h2>
					</article>


					<article class="datos">
						<div class="div_datos">
							<label>Nombre</label>
							<br>
							<input type="text" name="nombre" class="inpunt_basico" placeholder="Nombre" required>
						</div>

						<div class="div_datos">
							<label>especie</label>
							<br>
							<input type="text" name="especie" class="inpunt_basico" placeholder="especie" required>
						</div>

						<div class="div_datos">
							<label>Raza</label>
							<br>
							<input type="text" name="raza" class="inpunt_basico" placeholder="raza" required>
						</div>

						<div class="div_datos">
							<label>Edad</label>
							<br>
							<input type="number" name="edad" class="input_fecha" required>
						</div>

						<div class="div_datos">
							<label>Sexo</label>
							<br>
							<input type="text" name="sexo" class="inpunt_basico" placeholder="sexo" required>
						</div>

						
						<input type="submit" name="crear_animal" value="CREAR UN ANIMAL" class="btn">
					</article>
				</form>
			</section>
			<br>
			

		</main>
	</div>


</body>

</html>
