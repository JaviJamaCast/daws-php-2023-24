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

echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Apellidos</th><th>Teléfono</th><th>Correo Electrónico</th></tr>";
foreach ($agenda as $contacto) {
    echo "<tr>";
    foreach ($contacto as $dato) {
        echo "<td>$dato</td>";
    }
    echo "</tr>";
}
echo "</table>";

require "index.view.php";
