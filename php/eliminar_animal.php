<?php
$id_ani=$_REQUEST['ani'];
require_once("conexion.php");
$conexion=Conexion::getConexion();
$q=<<<sql
    DELETE from animal where id_animal='$id_ani'
sql;
$resultado=$conexion->query($q) or die ("ERROR query");
Conexion::cerrarConexion($conexion);
header ("Location: ../interface/administrador.php");
?>