<?php
$nombre = $_GET["usuario"];
$datoS = $_GET["dato"];

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

function getDatos($diccionario, $nombreUsu, $dato)
{
    echo $diccionario[$nombreUsu][$dato];
}
require "index.view.php";
