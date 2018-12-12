<?php
    require_once("conexion.php");

    $conexion=Conexion::getConexion();

    $q=<<<sql
    SELECT nombre, apellido, mail, telefono FROM cliente where id_usuario <> '1'
sql;
    $resultado=$conexion->query($q);

    $resultcheck = mysqli_num_rows($resultado);

    if ($resultcheck >0) {

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo <<<abc
            <div class="list_usuarios">
            <div class="bd_row">{$row['nombre']}</div>  <div class="bd_row">{$row['apellido']}</div>  <div class="bd_row">{$row['mail']}</div> <div class="bd_row">{$row['telefono']}</div> <div class="bd_row bda"><a href="#">editar</a></div> <div class="bd_row bda"><a href="#">eliminar</a><br></div>
            </div>
abc;
        }

    }
    Conexion::cerrarConexion($conexion);
?>
