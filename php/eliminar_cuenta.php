<?php
$id=$_REQUEST['var'];
require_once("conexion.php");
$conexion=Conexion::getConexion();
$q=<<<sql
    DELETE from usuario where id_usuario='$id'
sql;
$resultado=$conexion->query($q) or die ("ERROR query");
Conexion::cerrarConexion($conexion);
@session_start();
unset($_SESSION['user']); //session_destroy();
header("Location: ../interface/home.php");
?>