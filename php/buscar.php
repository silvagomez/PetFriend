<?php

    require_once 'conexion.php';
//Recogemos la cadena
    $busqueda=$_POST['cadena'];
    if ($busqueda==null) {
        # code...
    } else {
        # code...
        $conexion=Conexion::getConexion();
        $consulta = mysqli_query ($conexion,"SELECT * FROM animal where nombre LIKE '%' '$busqueda' '%' ");
    
            if (!$consulta) {
                die ('No se pudo realizar la consulta : ' . mysqli_error());
            }
    
        $baseDatos = "SELECT * FROM animal WHERE nombre LIKE '%' '$busqueda' '%' ";
        $consu = mysqli_query($conexion, $baseDatos) or die("ERROR");
        $fila = mysqli_fetch_array ($consulta);
        $nfilas = mysqli_num_rows($consu);
    
            
            if ($nfilas > 0 ) {
                while ($fil = mysqli_fetch_array($consu)) {
                //   echo "<li class='busc'><a href='#' class='b' >" .$fil["nombre"] . "</a> </li>";
                  echo <<<html
                  <li class='busc'><a href='#' class='b' onclick="display_modal('{$fil["id_animal"]}','{$fil["nombre"]}', '{$fil["sexo"]}', '{$fil["edad"]}', '{$fil["especie"]}', '{$fil["img_perfil"]}')">{$fil["nombre"]}</a></li>
html;
                }
            }else{
                echo "<li class='busc'> " .'No hay resultados con ese nombre' . " </li>";
            }
    }
    
?>