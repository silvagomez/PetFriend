<?php
    require_once("conexion.php");

    class Usuario {
        //Hacemos las variables de nuestros campos de la bd
        public $id_usuario;
        public $nombre;
        public $apellido;
        public $mail;
        public $fecha_nacimiento;
        public $dni_pass;
        public $sexo;
        public $telefono;
        public $direccion;
        public $provincia;
        public $cp;
        public $nom_user;
        public $password;

        //Hacemos la función login y le ingresamos los parámetros que vamos a usar
        public static function login($mail,$password){

            //En la variable user se guardan los parámetros que hemos definido antes
            $user=new Usuario();

            //Creamos conexión
            $conexion=Conexion::getConexion();

            //Hacemos la select e ingresamos los datos en question

            $q=<<<sql
            SELECT * from cliente where mail='$mail' and password='$password'
sql;
            $resultado=$conexion->query($q);

            //

            $rows = $resultado->fetch_assoc();
            $user-> nombre = $rows['nombre'];
            $user-> apellido = $rows['apellido'];
            $user-> mail = $rows['mail'];
            $user-> fecha_nacimiento = $rows['fecha_nacimiento'];
            $user-> dni_pass = $rows['dni_pass'];
            $user-> sexo = $rows['sexo'];
            $user-> telefono = $rows['telefono'];
            $user-> direccion = $rows['direccion'];
            $user-> provincia = $rows['provincia'];
            $user-> cp = $rows['cp'];
            $user-> nom_user = $rows['nom_user'];
            $user-> password = $rows['password'];

            Conexion::cerrarConexion($conexion);

            return $user;

        }

        //Creamos la función createUser para crear los usuarios
        public static function createUser($nombre, $apellido, $mail, $fecha_nacimiento, $dni_pass, $sexo, $telefono, $direccion, $provincia, $cp, $nom_user, $password){

            //Metemos en la variable conexión la llamada a la class Conexion de conexion.php y usamos el método getConexion()
            $conexion=Conexion::getConexion();

            //Ahora vamos hacer un insert a la bd
            $q=<<<sql
            INSERT INTO cliente(nombre, apellido, mail, fecha_nacimiento, dni_pass, sexo, telefono, direccion, provincia, cp, nom_user, password) VALUES ('$nombre','$apellido','$mail','$fecha_nacimiento','$dni_pass','$sexo','$telefono','$direccion','$provincia','$cp','$nom_user','$password')
sql;
            $conexion->query($q);

            //Cerramos conexión
            Conexion::cerrarConexion($conexion);

        }

    }


?>
