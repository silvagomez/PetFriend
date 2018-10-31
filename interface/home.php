
<?php
	// sesion_start();
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
	<script src="../js/jquery-3.1.0.min.js"></script>
	<script src="../js/main.js"></script>
</head>

<body>
	<?php
	require_once 'header.php';
	?>
	<div class="wrapper w2">
		<main>
			<article class="slideshow">
				<ul class="slider">
					<li><img src="../img/slide1.png" alt=""></li>
					<li><img src="../img/slide2.png" alt=""></li>
					<li><img src="../img/slide3.png" alt=""></li>
					<li><img src="../img/slide4.png" alt=""></li>
					<li><img src="../img/slide5.png" alt=""></li>
					<li><img src="../img/slide6.png" alt=""></li>
					<li><img src="../img/slide7.png" alt=""></li>
				</ul>

				<ol class="pagination"></ol>

				<div class="left">
					<span class="fa fa-chevron-left"></span>
				</div>
				<div class="right">
					<span class="fa fa-chevron-right"></span>
				</div>
			</article>
			<article class="txt">
				<hr>
				<p><span>"</span> Para tener una verdadera perspectiva de uno mismo, todo el mundo <br> debería tener un perro que le adora y un gato que le ignora <span>"</span> </p>
				<hr>
			</article>

			<article class="video">
				<video controls="">
				<source src="../video/video.mp4" type="video/mp4">
			</video>
			</article>

			<article class="txt">
				<hr>
				<p><span>"</span> Nuestros compañeros perfectos nunca tienen menos de cuatro patas<span>"</span> </p>

				<hr>
			</article>

			<article class="exp">
				<div class="miexp izq">
					<div class="exp_img">
						<img src="../img/op1.png" class="op">
				</div>
						<div class="exp_txt">
							<h3 class="experiencia">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</h3>
						</div>

					</div>
					<div class="miexp drch">
						<div class="exp_img">
							<img src="../img/op2.png" class="op">
				</div>
							<div class="exp_txt">
								<h3 class="experiencia">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</h3>
							</div>
							<div class="reset"></div>
						</div>
			</article>

		</main>
	</div>
	<?php
	require_once 'footer.php';
	?>


</body>

</html>
