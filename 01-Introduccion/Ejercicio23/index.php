<?php
$estudiantes = ["Ane", "Markel", "Nora", "Danel ", "Amaia", "Izaro"];

function mostrarEstudiantes($estudiantes)
{
    foreach ($estudiantes as $estudiante) {
        echo "<li>$estudiante</li>";
    }
    echo "<hr>";

    for ($i = 0; $i < count($estudiantes); $i++) {
        echo "<li id='$i'>$estudiantes[$i]</li>";
    }
}



require "index.view.php";
