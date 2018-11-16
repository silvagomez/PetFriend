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
                <section class="pantalla_central2 section_izq">
                    <article class="titulo_sesion">
                        <h2>PERFIL</h2>
                    </article>
                    <hr class="hr_uno">
                    <br>
					<form class="" action="../php/perfilControlador.php" method="post">
						<article class="datos_uno">
							<div class="column">
								<div class="div_datosp">
									<label class="label_perfil">Nombre</label>
									<input type="text" name="nombre" class="input_datos" value="<?php echo $user->nombre ?>">
									<span></span>
								</div>
								<div class="div_datosp">
									<label class="label_perfil">Correo electrónico</label>
									<input type="email" name="mail" class="input_datos" value="<?php echo $user->mail ?>">
								</div>
							</div>
							<div class="column">
								<div class="div_datosp">
									<label class="label_perfil">Apellidos</label>
									<input type="text" name="apellido" class="input_datos" value="<?php echo $user->apellido ?>">
								</div>
								<div class="div_datosp">
									<label class="label_perfil">F. nacimiento</label>
										<input type="date" value="<?php echo $user->fecha_nacimiento ?>" name="fecha_nacimiento" class="input_datos">
									<input type="submit" name="change" value="Guardar cambios" class="btn_cambios">
								</div>
							</div>
						</article>

						<br>
						<hr class="hr_uno">
						<br>

						<article class="datos_uno">
							<div class="column">
								<div class="div_datosp">
									<label class="label_perfil">DNI/Pasaporte</label>
									<input type="text" name="dni_pass" class="input_datos" value="<?php echo $user->dni_pass ?>" >
								</div>

								<div class="div_datosp">
									<label class="label_perfil">Dirección</label>
									<input type="text" name="direccion" class="input_datos" value="<?php echo $user->direccion ?>">
								</div>

								<div class="div_datosp">
									<label class="label_perfil">Telefono</label>
									<input type="tel" name="telefono" class="input_datos" value="<?php echo $user->telefono ?>" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
								</div>

							</div>
							<div class="column">
								<div class="div_datosp">
									<label class="label_perfil">Sexo</label>
									<input type="text" name="sexo" class="input_datos" value="<?php echo $user->sexo ?>">
								</div>

								<div class="div_datosp">
									<label class="label_perfil">Provincia</label>
									<input type="text" value="<?php echo $user->provincia ?>" name="provincia" class="input_datos">
								</div>

								<div class="div_datosp">
									<label class="label_perfil">Código postal</label>
									<input type="number" name="cp" class="input_datos" value="<?php echo $user->cp ?>">
									<input type="submit" name="change" value="Guardar cambios" class="btn_cambios">
								</div>
							</div>

						</article>

						<br>
						<hr class="hr_uno">
						<br>

						<article class="datos_uno">
							<div class="column">
								<div class="div_datosp">
									<label class="label_perfil">Usuario</label>
									<input type="text" class="input_datos" value="<?php echo $user->nom_user ?>" name="nom_user">
								</div>

							</div>
							<div class="column">
								<div class="div_datosp">
									<label class="label_perfil">Contraseña</label>
									<input type="password" name="password" class="input_datos" value="<?php echo $user->password ?>">
								</div>
								<div class="div_datosp">
									<label class="label_perfil">Confirmar contraseña</label>
									<input type="password" name="c_password" class="input_datos">
									<input type="submit" name="change" value="Guardar cambios" class="btn_cambios">
								</div>
							</div>

						</article>
						<br>
						<hr class="hr_uno">
						<br>
						<!-- <article class="datos_uno">
							<div class="column">
								<div class="div_datosp">
									<label class="label_perfil">Eliminar cuenta</label>
									<input type="submit" name="delete" value="Eliminar cuenta" class="btn_cambios">
								</div>
								<div class="div_datosp">

								</div>
							</div>

						</article> -->

					</form>
                </section>


                <section class="pantalla_central2 section_drch">
                    <div class="i_perfil">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>

                    <div class="p_nombre">
                        <h3 class="nombre"><?php echo $user->nombre." ".$user->apellido ?></h3>

                    </div>

                    <div class="p_location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h3><?php echo $user->direccion ?></h3>

                    </div>

                    <br>
                    <hr class="hr_uno">
                    <br>

                    <div class="p_descripcion">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                    </div>

                    <br>
                    <hr class="hr_uno">
                    <br>

                    <div class="redes_sociales">
    					<!-- <a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
    					<a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    					<a href="https://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
    					<a href="https://www.snapchat.com/"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a> -->
						<form class="" action="../php/cerrar_sesion.php" method="post">
							<br>
							<input type="submit" name="" value="Cerrar Sesión" class="cerrar">
						</form>

    				</div>


                </section>
            </div>
        </main>
	</div>
	<?php
	require_once 'footer.php';
	?>


</body>

</html>
