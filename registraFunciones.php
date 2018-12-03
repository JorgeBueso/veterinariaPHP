<?php

include 'funciones.php';
$id_usuario = $_POST["id"];
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];


$mysql = conectaBBDD();

$insertar = "INSERT INTO clientes (id,dni, nombre, apellidos, telefono) VALUES ('$id_usuario',$dni', '$nombre', '$apellidos', '$telefono')";


$verificar_usuario = mysqli_query($conexion, "SELECT * FROM cliente WHERE id = '$id_usuario'");


$resultado = mysqli_query($conexion, $insertar);

if (!$resultado)
{
    echo 'Error al registrarse';
}else
    {
    echo 'Usuario registrado correctamente';
    
}


 
