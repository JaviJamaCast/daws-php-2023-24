<?php

$palabras = [
    "PERRO" => "DOG",
    "EDAD" => "AGE",
    "NOMBRE" => "NAME",
    "ROJO" => "RED",
    "ARRIBA" => "UP",
   ];
   foreach ($palabras as $espanol => $ingles) {
    echo "La palabra $espanol se traduce al inglés como $ingles.<br>";
}
require "index.view.php";
