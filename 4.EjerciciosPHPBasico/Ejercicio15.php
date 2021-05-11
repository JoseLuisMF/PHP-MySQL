<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $mi_array = array( "cero" => 23, "uno" => 45, 2 => 76);
        echo $mi_array ["uno"] . "<br>";
        echo $mi_array [ 2 ];
        echo "Numero de datos en el array: " . count( $mi_array);//LA funcion count() sirve para contar
    ?>
</body>
</html>