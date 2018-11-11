<?php

class Conexion{
    //Con esto hacemos la conexión
    public static function getConexion(){
        $host="localhost"; //Servidor
        $user="root";
        $pass="";
        $database="petfriend"; //El nombre de la base de datos

        $conexion=new mysqli($host,$user,$pass,$database);

        if ($conexion->connect_errno) {
            die("FALLO AL CONECTAR");
            header("Location: ../interface/error404.php");
        }else {
            return $conexion;
        }
    }
    //Para cerrar la sesion
    public static function cerrarConexion($conexion){
        $conexion->close();
    }

}

?>
