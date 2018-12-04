<?php

include 'funciones.php';
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$raza = $_POST["raza"];
$especie = $_POST["especie"];
$fecha_n = $_POST["fecha_n"];

$id = (int) $id;
$fecha_n = (int) $fecha_n;

$conexion = conectaBBDD();

$insertar = "INSERT INTO mascotas (id, nombre, sexo, raza, especie, fecha_n) VALUES ('$id', '$nombre', '$sexo', '$raza', '$especie','$fecha_n');";


$resultado = mysqli_query($conexion, $insertar);

if (!$resultado)
{
    echo 'Error al registrarse';
}else
    {
    echo 'Usuario registrado correctamente';
    
}
