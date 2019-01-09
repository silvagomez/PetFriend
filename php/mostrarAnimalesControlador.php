<?php

$nombre = $_POST['nombre'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];

$animales = Animal::mostrarAnimales($nombre, $raza, $edad, $sexo);
?>