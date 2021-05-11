<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays. In_array()</title>
</head>
<body>
    <?php
        $colores= array("rojo", "verde", "amarillo", "azul");
        if( in_array( "rojo", $colores)){
            echo "Se ha encontrado el valor rojo";
        }else{
            echo "No se ha encontrado";
        }
    ?>
</body>
</html>