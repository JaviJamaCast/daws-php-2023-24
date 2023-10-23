<?php
$estudiantes = [
    'Roberto Gonzales' => [5.1, 2.4],
    'Francisco Jimenez' => [10, 1.3],
    'Alex Alboran' => [2.1, 10],
    'Brayan Castro' => [4.3, 5.3],
    'Kevin Roldan' => [5.3, 5.1],
    'Nicolas Ramos' => [4.1, 2.3],
];


function calcularMediaNotas($estudiantes)
{
    foreach ($estudiantes as $key => $value) {
        $nota1 = $value[0];
        $nota2 = $value[1];
        echo "<tr>";
        echo "<td> $key</td>";
        echo "<td" . (($nota1 < 5) ? ' style="color: red;"' : '') . ">$nota1</td>";
        echo "<td" . (($nota2 < 5) ? ' style="color: red;"' : '') . ">$nota2</td>";
        echo "<td" . ((calcularMedia($nota1, $nota2) < 5) ? ' style="color: red;"' : '') . ">" . calcularMedia($nota1, $nota2) . "</td>";
        echo "</tr>";
    }
}


function calcularMedia($num1, $num2): float
{

    $media = ($num1 + $num2) / 2;
    return $media;
}
require "index.view.php";
