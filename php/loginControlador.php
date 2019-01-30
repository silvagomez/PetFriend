<?php
    require_once "usuario.php";

    $mail = $_REQUEST['mail'];
    $password = $_REQUEST['password'];

    $password=md5($password);

    $usuario = Usuario::login($mail,$password);

    if ($usuario->mail != null && $usuario->mail !='') {
        session_start();

        $_SESSION['user']=serialize($usuario);
        if ($usuario->mail == 'admi.petfriend@gmail.com') {
            //admi
            if($_REQUEST['recordar']=="recordar"){
            setcookie("pet","$mail", time() +60*60*24*365);
            }
            header("Location: ../interface/administrador.php");

        }else {
            //usuarios
            // if($_REQUEST['recordar']=="recordar"){
            //     setcookie("pet","$mail", time() +60*60*24*365);
            //     }
            header("Location: ../interface/perfil.php");
        }

    }else {
        //no usuarios registrados
        header("Location: ../interface/sesion.php?error=pass");
    }

     
    // if(isset($_REQUEST['mail'])){
    //     setcookie('user',$_REQUEST['mail'],time()+60*60*24*365);
    // }
?>
