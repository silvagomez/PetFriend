<?php
    require_once "usuario.php";

    $mail = $_REQUEST['mail'];
    $password = $_REQUEST['password'];

    $usuario = Usuario::login($mail,$password);

    if ($usuario->mail != null && $usuario->mail !='') {
        session_start();

        $_SESSION['user']=serialize($usuario);
        if ($usuario->mail == 'admi.petfriend@gmail.com') {

            header("Location: ../interface/administrador.php");

        }else {
            header("Location: ../interface/perfil.php");
        }

    }else {
        header("Location: ../interface/error404.php");
    }
?>
