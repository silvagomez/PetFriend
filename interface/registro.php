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

				<form class="" action="../php/altaUserControlador.php" method="post">

					<article class="titulo_central">
						<h2>CREAR UNA CUENTA</h2>
					</article>


					<article class="datos">
						<div class="div_datos">
							<label>Nombre</label>
							<br>
							<input type="text" name="nombre" class="inpunt_basico" placeholder="Nombre" required>
						</div>

						<div class="div_datos">
							<label>Apellidos</label>
							<br>
							<input type="text" name="apellido" class="inpunt_basico" placeholder="Apellidos" required>
						</div>

						<div class="div_datos">
							<label>Correo electrónico</label>
							<br>
							<input type="email" name="mail" class="inpunt_basico" placeholder="Correo electrónico" required>
						</div>

						<div class="div_datos">
							<label>Fecha de nacimiento</label>
							<br>
							<input type="date" name="fecha_nacimiento" class="input_fecha" required>
						</div>

						<div class="div_datos">
							<label>DNI/Pasaporte</label>
							<br>
							<input type="text" name="dni_pass" class="inpunt_basico" placeholder="DNI/Pasaporte" required>
						</div>

						<div class="div_datos">
							<label>Sexo</label>
							<br>
							<div class="div_sexo">
								<input type="radio" name="sexo" value="mujer" checked="checked" class="input_sexo">
								<label>Mujer</label>
								<br>
								<input type="radio" name="sexo" value="hombre" class="input_sexo">
								<label>Hombre</label>
							</div>
						</div>

						<div class="div_datos">
							<label>Teléfono</label>
							<br>
							<input type="tel" name="telefono" class="inpunt_basico" placeholder="1231231234" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}" >
						</div>

						<div class="div_datos">
							<label>Dirección</label>
							<br>
							<input type="text" name="direccion" class="inpunt_basico" placeholder="Dirección" required>
						</div>

						<div class="div_datos">
							<label>Provincia</label>
							<br>
							<select class="busqueda_provincia" name="provincia" required>
								<option value='alava'>Álava</option>
								<option value='albacete'>Albacete</option>
								<option value='alicante'>Alicante/Alacant</option>
								<option value='almeria'>Almería</option>
								<option value='asturias'>Asturias</option>
								<option value='avila'>Ávila</option>
								<option value='badajoz'>Badajoz</option>
								<option value='barcelona'>Barcelona</option>
								<option value='burgos'>Burgos</option>
								<option value='caceres'>Cáceres</option>
								<option value='cadiz'>Cádiz</option>
								<option value='cantabria'>Cantabria</option>
								<option value='castellon'>Castellón/Castelló</option>
								<option value='ceuta'>Ceuta</option>
								<option value='ciudadreal'>Ciudad Real</option>
								<option value='cordoba'>Córdoba</option>
								<option value='cuenca'>Cuenca</option>
								<option value='girona'>Girona</option>
								<option value='laspalmas'>Las Palmas</option>
								<option value='granada'>Granada</option>
								<option value='guadalajara'>Guadalajara</option>
								<option value='guipuzcoa'>Guipúzcoa</option>
								<option value='huelva'>Huelva</option>
								<option value='huesca'>Huesca</option>
								<option value='illesbalears'>Illes Balears</option>
								<option value='jaen'>Jaén</option>
								<option value='acoruña'>A Coruña</option>
								<option value='larioja'>La Rioja</option>
								<option value='leon'>León</option>
								<option value='lleida'>Lleida</option>
								<option value='lugo'>Lugo</option>
								<option value='madrid'>Madrid</option>
								<option value='malaga'>Málaga</option>
								<option value='melilla'>Melilla</option>
								<option value='murcia'>Murcia</option>
								<option value='navarra'>Navarra</option>
								<option value='ourense'>Ourense</option>
								<option value='palencia'>Palencia</option>
								<option value='pontevedra'>Pontevedra</option>
								<option value='salamanca'>Salamanca</option>
								<option value='segovia'>Segovia</option>
								<option value='sevilla'>Sevilla</option>
								<option value='soria'>Soria</option>
								<option value='tarragona'>Tarragona</option>
								<option value='santacruztenerife'>Santa Cruz de Tenerife</option>
								<option value='teruel'>Teruel</option>
								<option value='toledo'>Toledo</option>
								<option value='valencia'>Valencia/Valéncia</option>
								<option value='valladolid'>Valladolid</option>
								<option value='vizcaya'>Vizcaya</option>
								<option value='zamora'>Zamora</option>
								<option value='zaragoza'>Zaragoza</option>
							</select>
						</div>

						<div class="div_datos">
							<label>Código postal</label>
							<br>
							<input type="number" name="cp" class="inpunt_basico" placeholder="00000" required pattern="[0-9]{5}">
						</div>

						<div class="div_datos">
							<label>Nombre de usuario</label>
							<br>
							<input type="text" name="nom_user" class="inpunt_basico" placeholder="Nombre de usuario" required>
						</div>

						<div class="div_datos">
							<label>Contraseña</label>
							<br>
							<input type="password" name="password" class="inpunt_basico" placeholder="Contraseña" required>
						</div>

						<div class="div_datos">
							<label>Confirmar contraseña</label>
							<br>
							<input type="password" name="confirm_password" class="inpunt_basico" placeholder="Confirmar contraseña" required>
						</div>

						<div class="terminos">
							<label class="checkbox" for="TermsAndConditions">
								<input name="TermsAndConditions" type="checkbox" value="true" required>
								<a>Al crear tu cuenta, aceptas nuestros </a>
								<a href="error404.php">Términos y Condiciones</a>
								<a href="error404.php">Política de Privacidad</a>
							</label>
						</div>

						<input type="submit" name="Iniciar sesión" value="UNETE A PET FRIEND" class="btn">
					</article>
				</form>
			</section>
			<br>
			<p>hola</p>

		</main>
	</div>


</body>

</html>
