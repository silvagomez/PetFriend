<?php
    require_once("conexion.php");

    class Animal{

        public $id_animal;
        public $nombre;
        public $especie;
        public $raza;
        public $edad;
        public $sexo;
        public $imagen;
        public $img_perfil;

        public static function crearAnimal($nombre,$especie, $raza, $edad, $sexo){

             //Metemos en la variable conexión la llamada a la class Conexion de conexion.php y usamos el método getConexion()
             $conexion=Conexion::getConexion();

             //insertamos los datos del animal en la BBDD
             $q=<<<sql
                INSERT INTO animal (nombre,especie, raza, edad, sexo) VALUES ('$nombre','$especie', '$raza', '$edad', '$sexo')
sql;
            $conexion->query($q) or die("ERRORRRR");

            //Cerramos conexión
            Conexion::cerrarConexion($conexion);

        }





    }






?>