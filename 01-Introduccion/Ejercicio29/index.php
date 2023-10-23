<?php
// Hice la dinamica al reves xd
$agenda = [
    [
        "nombre" => "Laura",
        "apellidos" => "Perez Urrea",
        "telefono" => "1214124",
        "email" => "laura@php.net"
    ],
    [
        "nombre" => "Javier",
        "apellidos" => "Jamaica Castaño",
        "telefono" => "1241241",
        "email" => "javier@php.net"
    ], [
        "nombre" => "Pepe",
        "apellidos" => "Pepito Perez",
        "telefono" => "534534",
        "email" => "pepe@php.net"
    ], [
        "nombre" => "Sara",
        "apellidos" => "Gonzales Jimenez",
        "telefono" => "775454",
        "email" => "sara@php.net"
    ], [
        "nombre" => "Estefania",
        "apellidos" => "Moreno Rodriguez",
        "telefono" => "3466434",
        "email" => "tefa@php.net"
    ]
];

function datosTablas($agenda)
{
    for ($i = 0; $i < count($agenda); $i++) {
        echo "<tr>";
        echo "<td>" . $agenda[$i]["nombre"] . "</td>";
        echo "<td>" . $agenda[$i]["apellidos"] . "</td>";
        echo "<td>" . $agenda[$i]["telefono"] . "</td>";
        echo "<td>" . $agenda[$i]["email"] . "</td>";
        echo "</tr>";
    }
}



require "index.view.php";
