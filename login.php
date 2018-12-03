<?php

session_start(); //inicia la sesión del navegador en el servidor PHP o la continua.    

include ('./funciones.php');

function limpiaPalabra($palabra)
{
    //filtro muy básico para evitar la inyecciÓn SQL
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, '"');
    return $palabra;
}

$mysqli = conectaBBDD();

$cajaNombre = limpiaPalabra($_POST ['nombre']);
$cajapassword = limpiaPalabra($_POST ['password']);



//  echo 'Has puesto el usuario:' .$nami. ' y la contraseña :'.$password;
//para encriptar la contaseña
$passwordEncriptada = password_hash($cajapassword, PASSWORD_BCRYPT);

$resultadoQuery = $mysqli->query("SELECT * FROM usuarios WHERE nombreUsuario = '$cajaNombre' and password='$passwordEncriptada' ");
$numUsuarios = $resultadoQuery->num_rows;

if ($numUsuarios > true) 
    {
        $resultado = $resultadoQuery->fetch_array();
        if (password_verify($cajapassword, $resultado['userPass']))
        {

            //almaceno mi primera variable de sesión, y en esta guardo el nombre de usuario
            $_SESSION['nombreUsuario'] = $cajaNombre;
            //en la variable de sesión idUsuario guardo el id del usuario
            $_SESSION['idUsuario'] = $resultado['idUsuario'];
            //muestro la pantalla de la aplicación 
            require 'clientes.php';
            
        } else {
            //muestro una pantalla de error porque la contraseña está mal
            require 'error.php';
        }
    } else {
        //muestro  una pantalla de error porque el nombre de usuario está mal
        require 'clientes.php';
    }