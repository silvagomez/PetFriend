<?php
    require_once("conexion.php");

    $conexion=Conexion::getConexion();

    $q=<<<sql
    SELECT * FROM animal
sql;
    $resultado=$conexion->query($q);

    $resultcheck = mysqli_num_rows($resultado);

    if ($resultcheck >0) {

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo <<<abc
            <div class="list_usuarios">
            <div class="bd_row">{$row['nombre']}</div>  <div class="bd_row">{$row['raza']}</div>  <div class="bd_row">{$row['sexo']}</div> <div class="bd_row">{$row['edad']}</div> <div class="bd_row bda"><a href="#">editar</a></div> <div class="bd_row bda"><a href="#" onclick="eliminar_animal({$row['id_animal']})">eliminar</a><br></div>
            </div>
abc;
        }

    }
    
    Conexion::cerrarConexion($conexion);
?>
