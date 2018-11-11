<?php
	session_start();
	require_once "../php/usuario.php";
	if (isset($_SESSION['user'])) {
		$user=unserialize($_SESSION['user']);
	}

?>
<?php

if (isset($_REQUEST['button'])) {
	$nombre=$_REQUEST['nombre'];
	$email=$_REQUEST['email'];
	$asunto=$_REQUEST['asunto'];
	$mensaje=$_REQUEST['mensaje'];

	require_once '../phpMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	// $mail->SMTPDebug = 6;                          // Enable verbose debug output

	$mail->isSMTP();                                // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                 // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                         // Enable SMTP authentication
	$mail->Username = 'admi.petfriend@gmail.com';   // SMTP username
	$mail->Password = 'romaol2$1';                  // SMTP password
	$mail->SMTPSecure = 'tls';                      // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                              // TCP port to connect to
	$mail->setFrom('admi.petfriend@gmail.com', $nombre);
	$mail->addAddress('admi.petfriend@gmail.com');                 // Name is optional
	$mail->isHTML(true);                                    // Set email format to HTML

	$mail->Subject = $asunto;
	$mail->Body    = "<b>De: ".$email."</b><br><br>".$mensaje;

	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

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
			<article class="contact">
				<div class="cancall">
					<img src="../img/contacto.jpg" alt="">
					<div class="mensaje_enviado">
						<!-- echo -->
						<br>
						<!-- El mensaje no se ha podido enviar -->
						<?php
						if (isset($_REQUEST['button'])) {
							if(!$mail->send()) {
								echo 'El mensaje no se ha podido enviar.';
								// echo 'Mailer Error: ' . $mail->ErrorInfo;
							} else {
								echo 'El mensaje se ha enviado exitosamente.';
							}
						}
						?>
					</div>
				</div>
					<div class="formulario">
						<form class="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="contacto" id="contacto">
							<label>Nombre: *</label>
							<input name="nombre" placeholder="Nombre" required>
							<label>Email: *</label>
							<input name="email" type="email" placeholder="ejemplo@email.com" required>
							<label>Asunto: *</label>
							<input name="asunto" placeholder="Asunto" required>
							<label>Mensaje: *</label>
							<textarea name="mensaje" placeholder="Danos tu mensaje" required></textarea>
							<br>
							<br>
							<button type="submit" name="button" class="btn_basic">Enviar</button>
						</form>
					</div>
			</article>

		</main>
	</div>
	<?php
	require_once 'footer.php';
	?>


</body>

</html>
