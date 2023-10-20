<?php
$paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];

$pais = $_GET["pais"];
encontrarPosicion($pais, $paises);
function encontrarPosicion($pais, $paises)
{
    $pos = -1;
    for ($i = 0; $i < count($paises); $i++) {
        if ($paises[$i] == $pais) {
            $pos = $i;
        }
    }
    echo "La posicion de $pais es: $pos";
}
require "index.view.php";
