<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo getValor($ciudades, $posicion) ."<br>"; 
    echo var_export(setValor($ciudades, $posicion, $valor));
    ?>
</body>

</html>