<?php
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



function datosTabla($agenda)
{
    foreach ($agenda as $contacto) {
        echo "<tr>";
        foreach ($contacto as $dato) {
            echo "<td>$dato</td>";
        }
        echo "</tr>";
    }
}




require "index.view.php";
