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
        public $img;

        //Hacemos la función login y le ingresamos los parámetros que vamos a usar
        public static function login($mail,$password){

            //En la variable user se guardan los parámetros que hemos definido antes
            $user=new Usuario();

            //Creamos conexión
            $conexion=Conexion::getConexion();

            //Hacemos la select e ingresamos los datos en q

            $q=<<<sql
            SELECT * from usuario where mail='$mail' and password='$password'
sql;
            $resultado=$conexion->query($q);

            //

            $rows = $resultado->fetch_assoc();

            $user-> id_usuario = $rows['id_usuario'];
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
            $user-> img = $rows['img'];

            Conexion::cerrarConexion($conexion);

            return $user;

        }

        //Creamos la función createUser para crear los usuarios
        public static function createUser($nombre, $apellido, $mail, $fecha_nacimiento, $dni_pass, $sexo, $telefono, $direccion, $provincia, $cp, $nom_user, $password,$img){

            //Metemos en la variable conexión la llamada a la class Conexion de conexion.php y usamos el método getConexion()
            $conexion=Conexion::getConexion();

            //Ahora vamos hacer un insert a la bd
            $q=<<<sql
            INSERT INTO usuario(nombre, apellido, mail, fecha_nacimiento, dni_pass, sexo, telefono, direccion, provincia, cp, nom_user, password, img) VALUES ('$nombre','$apellido','$mail','$fecha_nacimiento','$dni_pass','$sexo','$telefono','$direccion','$provincia','$cp','$nom_user','$password','$img')
sql;
            $conexion->query($q) or die(header("Location: ../interface/registro.php?error=mail"));

            //Cerramos conexión
            Conexion::cerrarConexion($conexion);

        }

        public static function modificarUser($nombre, $apellido, $mail, $fecha_nacimiento, $dni_pass, $sexo, $telefono, $direccion, $provincia, $cp, $nom_user, $password){

            
                //Metemos en la variable conexión la llamada a la class Conexion de conexion.php y usamos el método getConexion()
                $conexion=Conexion::getConexion();

                //Ahora vamos hacer un update a la bd de los nuevos datos
                $q=<<<sql
                UPDATE usuario SET nombre='$nombre', apellido='$apellido', fecha_nacimiento='$fecha_nacimiento', dni_pass='$dni_pass', sexo='$sexo', telefono='$telefono', direccion='$direccion', provincia='$provincia', cp='$cp', nom_user='$nom_user', password='$password'  WHERE mail='$mail'
sql;
                //Realiza la sentencia
                $resultado=$conexion->query($q) or die ("ERROR");



            //Cerramos conexión
            Conexion::cerrarConexion($conexion);

            header ("Location: ../../../interface/perfil.php");

        }

        public static function borrarUsuario($id_usuario){
            $conexion=Conexion::getConexion();

            $q=<<<sql
            DELETE from usuario where id_usuario='$id_usuario'
sql;
            //Cerramos conexión
            Conexion::cerrarConexion($conexion);
        }

        public static function mostrarUsuario(){

            //En la variable user se guardan los parámetros que hemos definido antes
            $user=new Usuario();

            //Creamos conexión
            $conexion=Conexion::getConexion();

            //Hacemos la select e ingresamos los datos en q

            $q=<<<sql
            SELECT * from usuario
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
        }
    }


?>
