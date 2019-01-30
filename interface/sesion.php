<?php
	session_start();
	if (isset($_COOKIE['pet'])) {
        require_once "../php/conexion.php";
        $conexion=Conexion::getConexion();
        $mail=$_COOKIE['user'];
        $result=mysqli_query($conexion, "SELECT mail FROM usuario where mail=".$mail."");
        if (mysqli_num_rows($result)) {
            $arr=mysqli_fetch_array($result);
            $_SESSION['user']=$arr['user'];
            
        }
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
     <div class="w3">
        <main>
            <div class="logo2">
                <a href="home.php"><img class="img_logo2" src="../img/logo.png"></a>
			</div>
            <div class="gemelos">
                <section class="pantalla_central">

                     <form class="" action="../php/loginControlador.php" method="post">

                         <article class="titulo_sesion">
                             <h2>INICIAR SESIÓN</h2>
                         </article>
                        <?php
                            if (isset($_REQUEST['error'])) {
                                echo <<<html
                                <article class="titulo_sesion">
                                <p>Error en el correo ó contraseña</p>
                                </article>
html;
                            }
                        ?>
                         <article class="usuario">
                             <input type="text" name="mail" class="username" placeholder="Correo">
                             <input type="password" name="password" class="password" placeholder="Contraseña">
                         </article>

                         <article class="enviar">
                             <input type="submit" name="i_sesion" value="INICIAR SESIÓN" class="btn">
                         </article>

                         <article class="recuerdame">
                             <label><input type="checkbox" name="recordar" value="recordar">Recuérdame</label>
                             <!-- <span class="checkmark"></span> -->
                         </article>
                         <div class="ayuda">
                             <a href="contacto.php">¿Necesitas ayuda?</a>
                         </div>
                     </section>
                     <section class="pantalla_central">
                         <article class="titulo_sesion">
                             <h2>¿Quieres formar parte de PetFiend?</h2>
                         </article>
                         <p class="pc1">Si todavia no tienes una cuenta en PetFriend aquí te dejamos el formulario.</p>
                         <input type="button" name="" value="CREAR CUENTA" class="btn" onclick="location.href='registro.php'">

                     </form>

			    </section>

            </div>
        </main>
    </div> 

</body>

</html>
