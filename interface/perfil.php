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

                    <article class="datos_uno">
                        <div class="column">
                            <div class="div_datosp">
                                <label class="label_perfil">Nombre</label>
                                <input type="text" name="nombre" class="input_datos" placeholder="MIKEL CALVO">
                            </div>
                            <div class="div_datosp">
                                <label class="label_perfil">Correo electrónico</label>
                                <input type="text" name="email" class="input_datos" placeholder="mikelc513@gmail.com">
                            </div>
                        </div>
                        <div class="column">
                            <div class="div_datosp">
                                <label class="label_perfil">Apellidos</label>
                                <input type="text" name="apellidos" class="input_datos" placeholder="CALVO PARIENTE">
                            </div>
                            <div class="div_datosp">
                                <label class="label_perfil">F. nacimiento</label>
                                <input type="text" placeholder="28 de enero de 1999" name="" class="input_datos">
                                <input type="submit" name="" value="Guardar cambios" class="btn_cambios">
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
                                <input type="text" name="dni" class="input_datos" placeholder="16104684S" >
                            </div>

                            <div class="div_datosp">
                                <label class="label_perfil">Dirección</label>
                                <input type="text" name="direccion" class="input_datos" placeholder="Sabino Arana nº22 drch 1ºB">
                            </div>

                        </div>
                        <div class="column">
                            <div class="div_datosp">
                                <label class="label_perfil">Sexo</label>
                                <input type="text" checked="checked" class="input_datos" placeholder="Hombre">
                            </div>

                            <div class="div_datosp">
                                <label class="label_perfil">Provincia</label>
                                <input type="text" placeholder="Bizkaia" name="" class="input_datos">
                            </div>

                            <div class="div_datosp">
                                <label class="label_perfil">Código postal</label>
                                <input type="text" name="cp" class="input_datos" placeholder="48940">
                                <input type="submit" name="" value="Guardar cambios" class="btn_cambios">
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
                                <input type="text" class="input_datos" placeholder="mikelcpariente">
                            </div>

                        </div>
                        <div class="column">
                            <div class="div_datosp">
                                <label class="label_perfil">Contraseña</label>
                                <input type="text" name="password" class="input_datos" placeholder="***********">
                            </div>
                            <div class="div_datosp">
                                <label class="label_perfil">Confirmar contraseña</label>
                                <input type="text" name="password" class="input_datos" placeholder="***********">
                                <input type="submit" name="" value="Guardar cambios" class="btn_cambios">
                            </div>
                        </div>
                    </article>
                </section>


                <section class="pantalla_central2 section_drch">
                    <div class="i_perfil">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>

                    <div class="p_nombre">
                        <h3 class="nombre">Mikel Calvo</h3>

                    </div>

                    <div class="p_location">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h3>Leioa, Bizkaia</h3>

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
    					<a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
    					<a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    					<a href="https://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
    					<a href="https://www.snapchat.com/"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>

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
