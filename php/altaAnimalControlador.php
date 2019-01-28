<?php


     //Recogemos los valores de los inpunt y los ingresamos en las variables;
     $nombre = $_REQUEST['nombre'];
     $especie = $_REQUEST['especie'];
     $raza = $_REQUEST['raza'];
     $edad = $_REQUEST['edad'];
     $sexo = $_REQUEST['sexo'];
     $imagen = $_FILES['img'];
     $img_perfil = $_FILES['img_perfil'];

     $imagenR = "../img/animales/".$imagen['name'];
     $img_perfilR = "../img/animales/".$img_perfil['name'];

    
     move_uploaded_file($imagen['tmp_name'], "../img/animales/".$imagen['name']);
     move_uploaded_file($img_perfil['tmp_name'], "../img/animales/".$img_perfil['name']);
    
    
     require_once("animal.php");

     Animal::crearAnimal( $nombre, $especie, $raza, $edad, $sexo, $imagenR, $img_perfilR);


         //cuando creas un animal vuelves a la pag admin
    header("Location: ../interface/administrador.php");
?>