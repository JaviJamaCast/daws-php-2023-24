<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($palabras as $espanol => $ingles) {
        echo "La palabra $espanol se traduce al inglés como $ingles.<br>";
    }
    ?>
</body>

</html>