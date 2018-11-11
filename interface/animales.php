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
</head>

<body>
	<?php
	require_once 'header.php';
	?>
	<div class="wrapper w2">
		<main>
			<article class="buscador">
				<select class="bus_animal" name="">
					<option value="" disabled:selected>Animales</option>
					<option value="">Perro</option>
					<option value="">Gato</option>
					<option value="">Pájaro</option>
					<option value="">Pez</option>
					<option value="">Reptil</option>
				</select>
				<input class="search" type="text" placeholder=" Cuatro patas.." name="search">
				<button type="submit" class="lookup"><i class="fa fa-search"></i></button>
			</article>
			<article class="animals">
				<div class="animalito">
					<figure>
						<a href="#">
							<img src="../img/a_bird1.png" class="a_pet">
						</a>
						<figcaption>
							<button type="button" name="button" class="nombre_ani">Margarita</button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
						</figcaption>
					</figure>
				</div>
				<div class="animalito">
					<figure>
						<a href="#">
							<img src="../img/a_cat1.png" class="a_pet">
						</a>
						<figcaption>
							<button type="button" name="button" class="nombre_ani">Nyah</button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
						</figcaption>
					</figure>
				</div>
				<div class="animalito">
					<figure>
						<a href="#">
							<img src="../img/a_can1.png" class="a_pet">
						</a>
						<figcaption>
							<button type="button" name="button" class="nombre_ani">Tomate</button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
						</figcaption>
					</figure>
				</div>
				<div class="animalito">
					<figure>
						<a href="#">
							<img src="../img/a_fish2.png" class="a_pet">
						</a>
						<figcaption>
							<button type="button" name="button" class="nombre_ani">Tiburoncin</button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
						</figcaption>
					</figure>
				</div>
				<div class="animalito">
					<figure>
						<a href="#">
							<img src="../img/a_rept1.png" class="a_pet">
						</a>
						<figcaption>
							<button type="button" name="button" class="nombre_ani">Rene</button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
						</figcaption>
					</figure>
				</div>
				<div class="animalito">
					<figure>
						<a href="#" id="img_modal">
							<img src="../img/a_bird5.png" class="a_pet">
						</a>
						<figcaption>
							<button type="button" name="button" class="nombre_ani" id="btn_modal">Ramona</button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
						</figcaption>
					</figure>
				</div>
				<div class="animalito">
					<figure>
						<a href="#">
							<img src="../img/a_cat5.png" class="a_pet">
						</a>
						<figcaption>
							<button type="button" name="button" class="nombre_ani">Jack</button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
						</figcaption>
					</figure>
				</div>
				<div class="animalito">
					<figure>
						<a href="#">
							<img src="../img/a_can2.png" class="a_pet">
						</a>
						<figcaption>
							<button type="button" name="button" class="nombre_ani">Blue</button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
							<button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
						</figcaption>
					</figure>
				</div>
			</article>
			<article class="load">
				<img src="../img/cargando.gif" alt="">
			</article>

			<div id="lamascara" class="mascara">
            <div class="contenido">
            	<span class="cerrar">&times;</span>
            	<div class="animal_div">
                     <div class="animal_img">
                         <img class="ani_img" src="../img/p_bird5.png">
                     </div>
                     <div class="animal_txt">
                         <div class="texto_perfil">
                             <p class="nombre_animal"><span class="uno">Nombre: </span> Ramona</p>
                             <div class="posicion">
                                <p class="sexo"><span class="dos">Sexo: </span> Hembra</p>
                                 <p class="anios"><span class="tres">Años: </span> 1 año</p>
                            </div>
                             <p class="especie"><span class="cuatro">Especie:</span> El <span class="cinco">loro harinoso amazónico </span>(Amazona farinosa) es una especie de ave de la familia de los loros (Psittacidae) ampliamente distribuida desde Sudamérica, pasando por América Central, y hasta México. Habita en las selvas tropicales, espacios de árboles esparcidos y manglares. Se cría comúnmente en cautiverio.
                            El amazona farinoso tiene una longitud total de 38 a 41 cm aproximadamente,1​2​ y pesa entre 540 y 700 g. El amazona farinoso es principalmente verde. La parte posterior y la nuca tienen generalmente un tono blanquecino, como si hubiese sido cubierto con una capa delgada de harina, que justifica su nombre.
                            </p>
                         </div>
						 <div class="botones">
							<a href="reservar.php"> <button type="button" name="" class="btn_comp">Reservar tiempo</button></a>
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
