<?php

function conectar(){
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$baseDatos = "parroquia";

$conexion = new mysqli($servidor, $usuario, $contraseña, $baseDatos);
return($conexion);
}
$con=conectar();
?>