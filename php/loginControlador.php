<?php
    require_once "usuario.php";

    $mail = $_REQUEST['mail'];
    $password = $_REQUEST['password'];

    $usuario = Usuario::login($mail,$password);

    if ($usuario->mail != null && $usuario->mail !='') {
        // sesion_start();

        $_SESSION['user']=serialize($usuario);

        header("Location: ../interface/home.php");
    }else {
        header("Location: ../interface/error404.php");
    }
?>
