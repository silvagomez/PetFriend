<?php

    //Recogemos los valores de los inpunt y los ingresamos en las variables;
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $mail = $_REQUEST['mail'];
    $fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
    $dni_pass = $_REQUEST['dni_pass'];
    $sexo = $_REQUEST['sexo'];
    $telefono = $_REQUEST['telefono'];
    $direccion = $_REQUEST['direccion'];
    $provincia = $_REQUEST['provincia'];
    $cp = $_REQUEST['cp'];
    $nom_user = $_REQUEST['nom_user'];
    $password = $_REQUEST['password'];
    $img = $_REQUEST['img'];

    require_once("usuario.php");

    Usuario::createUser($nombre, $apellido, $mail, $fecha_nacimiento, $dni_pass, $sexo, $telefono, $direccion, $provincia, $cp, $nom_user, $password,$img);

    //Para cuando te creas una cuenta te vas a la página inicial
    header("Location: ../interface/home.php");

?>
