<?php

    require_once 'conexion.php';
//Recogemos la cadena
    $busqueda=$_POST['cadena'];
    $conexion=Conexion::getConexion();
    $consulta = mysqli_query ($conexion,"SELECT nombre FROM animal where nombre LIKE '%' '$busqueda' '%' ");

        if (!$consulta) {
            die ('No se pudo realizar la consulta : ' . mysqli_error());
        }

    $baseDatos = "SELECT nombre FROM animal WHERE nombre LIKE '%' '$busqueda' '%' ";
    $consu = mysqli_query($conexion, $baseDatos) or die("ERROR");
    $fila = mysqli_fetch_array ($consulta);
    $nfilas = mysqli_num_rows($consu);

        
        if ($nfilas > 0 ) {
            while ($fil = mysqli_fetch_array($consu)) {
              echo "<li class='busc'><a href='#' class='b'>" .$fil["nombre"] . "</a> </li>";
            }
        }else{
            echo "<li class='busc'> " .'No hay resultado en la BBDD' . " </li>";
        }
?>