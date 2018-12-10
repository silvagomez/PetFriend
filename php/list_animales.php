<?php
    require_once("conexion.php");

    $conexion=Conexion::getConexion();

    $q=<<<sql
    SELECT nombre,especie,raza,edad,sexo FROM animal
sql;
    $resultado=$conexion->query($q);

    $resultcheck = mysqli_num_rows($resultado);

    if ($resultcheck >0) {

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo <<<abc
            <div class="list_animales">
            <div class="bd_row">{$row['nombre']}</div>  <div class="bd_row">{$row['especie']}</div>  <div class="bd_row">{$row['raza']}</div> <div class="bd_row">{$row['edad']}</div> <div class="bd_row">{$row['sexo']}</div> 
            </div>
abc;
        }

    }
    
    Conexion::cerrarConexion($conexion);
?>
