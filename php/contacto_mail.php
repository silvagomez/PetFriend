<?php

$nombre=$_REQUEST['nombre'];
$email=$_REQUEST['email'];
$asunto=$_REQUEST['asunto'];
$mensaje=$_REQUEST['mensaje'];

/************/

require_once '../phpMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

// $mail->SMTPDebug = 6;                          // Enable verbose debug output

$mail->isSMTP();                                // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                 // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                         // Enable SMTP authentication
$mail->Username = 'hola.petfriend@gmail.com';   // SMTP username
$mail->Password = 'romaol2$1';                  // SMTP password
$mail->SMTPSecure = 'tls';                      // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                              // TCP port to connect to

$mail->setFrom('hola.petfriend@gmail.com', $nombre);
// $mail->setFrom('hola.petfriend@gmail.com', 'contacto');
// $mail->addAddress('joe@example.net', 'Joe User');       // Add a recipient
$mail->addAddress('admi.petfriend@gmail.com');                 // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');        // Add attachments
// $mail->addAttachment('/tmp/image.jpg','new.jpg');    // Optional name
$mail->isHTML(true);                                    // Set email format to HTML

$mail->Subject = $asunto;
$mail->Body    = $email."<br>".$mensaje;
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

// if(!$mail->send()) {
//     echo 'El mensaje no se ha podido enviar.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'El mensaje se ha enviado exitosamente.';
// }
?>
