<?php
    require_once("conexion.php");

    $conexion=Conexion::getConexion();

    $q=<<<sql
    SELECT * FROM animal
sql;
    $resultado=$conexion->query($q);

    $resultcheck = mysqli_num_rows($resultado);

    if ($resultcheck >0) {
        $num = 0;
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo <<<abc
            
                <div class="animalito {$row["raza"]}" style="display:block;">
                    <figure>
                        <a href="#" id="img_modal" onclick="display_modal('{$row["id_animal"]}','{$row["nombre"]}', '{$row["sexo"]}', '{$row["edad"]}', '{$row["especie"]}', '{$row["img_perfil"]}')">
                            <img src="{$row['imagen']}" class="a_pet">
                        </a>
                        <figcaption>
                            <button type="button" name="button" class="nombre_ani" id="btn_modal" onclick="display_modal('{$row["id_animal"]}','{$row["nombre"]}', '{$row["sexo"]}', '{$row["edad"]}', '{$row["especie"]}', '{$row["img_perfil"]}')">{$row['nombre']}</button>
                            <button type="button" name="button" class="icono_ani" id="demo" onclick=corazoncito($num)> <i class="fa fa-heart" aria-hidden="true"></i> </button>
                            <button type="button" name="button" class="icono_ani"> <i class="fa fa-share-alt" aria-hidden="true"></i> </button>
                        </figcaption>
                    </figure>
                </div>
abc;
$num++;
        }

    }
    
    Conexion::cerrarConexion($conexion);
?>
