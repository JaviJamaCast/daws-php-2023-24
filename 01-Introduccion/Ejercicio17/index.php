<?php

$usuarios = [
    "JaviJama" => [
        "nombre" => "JavierJamaica",
        "contraseña" => "123",
        "email" => "Javier@php.net"
    ],
    "ElLoco" => [
        "nombre" => "Pepe",
        "contraseña" => "12345",
        "email" => "pepe@php.net"
    ],
];
$usuario = $_GET["usuario"];
$contrasenya = $_GET["contraseña"];

comprobarDatos($usuario, $contrasenya, $usuarios);

function comprobarDatos($usuario, $contrasenya, $diccionario)
{

    if (array_key_exists($usuario, $diccionario)) {
        if ($diccionario[$usuario]["contraseña"] == $contrasenya) {
            echo "Sesion iniciada";
        } else {
            echo "Usuario y/o contraseña incorrectos";
        }
    } else {
        echo "Usuario y/o contraseña incorrectos";
    }
}


require "index.view.php";
