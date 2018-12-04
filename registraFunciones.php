<?php

include 'funciones.php';

$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$telefono = $_POST["telefono"];



$dni = (int) $dni;
$telefono = (int) $telefono;

$conexion = conectaBBDD();

$insertar = "INSERT INTO clientes (dni, nombre, apellidos, telefono) VALUES ('$dni', '$nombre', '$apellidos', '$telefono');";


$resultado = mysqli_query($conexion, $insertar);

if (!$resultado)
{
    echo 'Error al registrarse';
}else
    {
    echo 'Usuario registrado correctamente';
    
}