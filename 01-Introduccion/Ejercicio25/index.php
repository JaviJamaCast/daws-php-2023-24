<?php
$estudiantes = ["Ane", "Markel", "Nora", "Danel ", "Amaia", "Izaro"];


function mostrarConWhile($estudiantes)
{

    $x = 0;
    while ($x < count($estudiantes)) {
        echo "<li id='$x'>$estudiantes[$x]</li>";
        $x++;
    }
}

require "index.view.php";
