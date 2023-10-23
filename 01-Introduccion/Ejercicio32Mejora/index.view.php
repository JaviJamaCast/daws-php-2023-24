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
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota media</th>
        </tr>

        <?php foreach ($estudiantes as $key => $value) :
            $nota1 = $value[0];
            $nota2 = $value[1];
        ?>

            <tr>
                <td><?= $key ?></td>
                <td<?php echo ($nota1 < 5) ? ' style="color: red;"' : ''; ?>><?php echo $nota1; ?></td>
                <td<?php echo ($nota2 < 5) ? ' style="color: red;"' : ''; ?>><?php echo $nota2; ?></td>
                <td<?php echo (calcularMedia($nota1, $nota2) < 5) ? ' style="color: red;"' : ''; ?>><?php echo calcularMedia($nota1, $nota2); ?></td>
            </tr>

        <?php endforeach ?>

    </table>
</body>

</html>