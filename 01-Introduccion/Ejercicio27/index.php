<?php
$grupos = ["Falling in reverse", "El fercho", "Nickelback", "Diomedes diaz ", "Daftpunk", "Trueno", "Paulo Londra", "Pierce the veil"];

function mostrarGrupos($grupos)
{

    foreach ($grupos as $grupo) {
        echo "El grupo musical es: {$grupo} <br>";
    }
}
require "index.view.php";
