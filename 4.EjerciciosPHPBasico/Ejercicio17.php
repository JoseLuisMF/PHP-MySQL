<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays. List()</title>
</head>
<body>
    <?php
        $colores= array("rojo", "verde", "amarillo", "azul");
        list( $color1, $color2, $color3) = $colores;
        print_r( $colores);
    ?>
</body>
</html>