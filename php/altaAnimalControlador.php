<?php


     //Recogemos los valores de los inpunt y los ingresamos en las variables;
     $nombre = $_REQUEST['nombre'];
     $especie = $_REQUEST['especie'];
     $raza = $_REQUEST['raza'];
     $edad = $_REQUEST['edad'];
     $sexo = $_REQUEST['sexo'];
    
    
     require_once("animal.php");

     Animal::crearAnimal( $nombre, $especie, $raza, $edad, $sexo );


         //cuando creas un animal vuelves a la pag admin
    header("Location: ../interface/administrador.php");
?>