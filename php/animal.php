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

        public static function crearAnimal($nombre,$especie, $raza, $edad, $sexo,$imagen,$img_perfil){

             //Metemos en la variable conexión la llamada a la class Conexion de conexion.php y usamos el método getConexion()
             $conexion=Conexion::getConexion();

             //insertamos los datos del animal en la BBDD
             $q=<<<sql
                INSERT INTO animal (nombre,especie, raza, edad, sexo, imagen, img_perfil) VALUES ('$nombre','$especie', '$raza', '$edad', '$sexo', '$imagen', '$img_perfil')
sql;
            $conexion->query($q) or die("ERRORRRR");

            //Cerramos conexión
            Conexion::cerrarConexion($conexion);

        }


        public static function mostrarAnimales(){

            $animales = array();

            $conexion = Conexion::getConexion();

            $q = "SELECT * from animal";

            $resultado = $conexion->query($q)or die("MIERDA!!!");


            while ($rows = $resultado->fetch_assoc()) {
            $animal = new Animal();
				$animal->nombre = $rows['nombre'];
				$animal->especie = $rows['especie'];
				$animal->raza = $rows['raza'];
				$animal->edad = $rows['edad'];
                $animal->sexo = $rows['sexo'];
                $animal->img_p = $rows['imagen'];
                $animal->img = $rows['img_perfil'];

                $animales[] = $animal;
        }

            
			Conexion::cerrarConexion($conexion);

			return $animales;

    }
    }






?>