<?php
    require_once("conexion.php");

    $conexion=Conexion::getConexion();

    $q=<<<sql
    SELECT nombre,especie,raza,edad,sexo,imagen FROM animal
sql;
    $resultado=$conexion->query($q);

    $resultcheck = mysqli_num_rows($resultado);

    if ($resultcheck >0) {

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo <<<abc
            
                <div class="animalito">
                    <figure>
                        <a href="#">
                            <img src="{$row['imagen']}" class="a_pet">
                        </a>
                        <figcaption>
                            <button type="button" name="button" class="nombre_ani">{$row['nombre']}</button>
                            <button type="button" name="button" class="icono_ani"> <i class="fa fa-heart" aria-hidden="true"></i> </button>
                            <button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
                        </figcaption>
                    </figure>
                </div>
abc;
        }

    }
    
    Conexion::cerrarConexion($conexion);
?>
