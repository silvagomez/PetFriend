<?php
	session_start();
	require_once "../php/usuario.php";
	require_once "../php/conexion.php";
	if (isset($_SESSION['user'])) {
		$user=unserialize($_SESSION['user']);
	}

	$id_animal=$_REQUEST['id'];
	$id_user=$user->id_usuario;
	$tiempo_ini=$_REQUEST['ini'];
	$tiempo_fin=$_REQUEST['fin'];
	$cantidad=$_REQUEST['cantidad'];
	$numero=rand(10000,99999);

	$conexion=Conexion::getConexion();
	$q1=<<<sql
	INSERT INTO pago (id_pago, tipo_pago, cantidad) VALUES ('$numero', 'Transacción online', '$cantidad');
sql;
	$q2=<<<sql
	INSERT INTO alquiler (tiempo_ini, tiempo_fin, id_usuariofk, id_animalfk, id_pagofk) VALUES ('$tiempo_ini', '$tiempo_fin', '$id_user', '$id_animal', '$numero');
sql;
	$query1=mysqli_query($conexion,$q1) or die("ERROR1");
	$query2=mysqli_query($conexion,$q2) or die("ERROR2");
	Conexion::cerrarConexion($conexion);
	

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
            <article class="mensajedepago">
				<div class="marco_mensajedepago">
					<h2>EL PAGO SE REALIZÓ CON ÉXITO</h2>
				</div>
            </article>

		</main>
	</div>
	<?php
	require_once 'footer.php';
	?>


</body>

</html>
