<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
        </tr>
        <?php foreach ($estudiantes as $key => $value) {
            $nota1 = $value[0];
            $nota2 = $value[1];
        ?>
            <tr>
                <td><?= $agenda[$i]["nombre"]; ?></td>
                <td><?= $agenda[$i]["apellidos"]; ?></td>
                <td><?= $agenda[$i]["telefono"]; ?></td>
                <td><?= $agenda[$i]["email"]; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>