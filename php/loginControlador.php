<?php
    require_once "usuario.php";

    $mail = $_REQUEST['mail'];
    $password = $_REQUEST['password'];

    $usuario = Usuario::login($mail,$password);

    if ($usuario->mail != null && $usuario->mail !='') {
        session_start();

        $_SESSION['user']=serialize($usuario);
        if ($usuario->mail == 'admi.petfriend@gmail.com') {
            //admi
            if($_REQUEST['recordar']=="recordar"){
            setcookie("usu","$mail", time() +60*60*24*365);
            }

            header("Location: ../interface/administrador.php");

        }else {
            //usuarios
            if($_REQUEST['recordar']=="recordar"){
                setcookie("usu","$mail", time() +60*60*24*365);
                }
            header("Location: ../interface/perfil.php");
        }

    }else {
        //no usuarios registrados
        header("Location: ../interface/error404.php");
    }

     
    if(isset($_REQUEST['mail'])){
        setcookie('user',$_REQUEST['mail'],time()+60*60*24*365);
    }
?>
