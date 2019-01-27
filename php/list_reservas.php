<?php
    require_once("conexion.php");

    $conexion=Conexion::getConexion();

    $q=<<<sql
    SELECT al.id_usuariofk, al.id_animalfk, al.tiempo_ini, al.tiempo_fin, al.id_pagofk, p.cantidad FROM alquiler al, pago p where al.id_pagofk=p.id_pago 
sql;
    $resultado=$conexion->query($q);

    $resultcheck = mysqli_num_rows($resultado);

    if ($resultcheck >0) {

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo <<<abc
            <div class="list_usuarios">
                <div class="bd_row">{$row['id_usuariofk']}</div>
                <div class="bd_row">{$row['id_animalfk']}</div>
                <div class="bd_row">{$row['tiempo_ini']}</div>
                <div class="bd_row">{$row['tiempo_fin']}</div>
                <div class="bd_row">{$row['id_pagofk']}</div>
                <div class="bd_row">{$row['cantidad']}€</div>
            </div>
abc;
        }

    }
    Conexion::cerrarConexion($conexion);
?>
