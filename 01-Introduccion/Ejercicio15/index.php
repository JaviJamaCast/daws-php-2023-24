<?php
$nombre = $_GET["usuario"];
$email = $_GET["dato"];

$diccionario = array(
    "JaviJama" => array(
        "Nombre" => "Javier",
        "Apellidos" => "Jamaica",
        "Email" => "javier@gmail.com"
    ),
    "LaGatitaGanster" => array(
        "Nombre" => "Laura",
        "Apellidos" => "Gonzales",
        "Email" => "laura@gmail.com"
    )
);
getDatos($diccionario, $nombre, $email);
function getDatos($diccionario, $nombreUsu, $dato)
{
    echo $diccionario[$nombreUsu][$dato];
}
require "index.view.php";
