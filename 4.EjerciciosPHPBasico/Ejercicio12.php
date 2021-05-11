<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena de caracteres</title>
</head>
<body>
    <?php
        $cadena1 = "Esto es una cadena de caracteres";
        $cadena2 = 'Esto es una cadena con comillas simples';
        $cadena3 = ""; //Cadena con 0 caracteres
        $dato= "IMPRIMIBLE";
        $texto_simple= 'No puede imprimir la variable $dato';
        $texto_doble=" Imprimir la variable dato como $dato";
        echo "$texto_simple<br>";
        echo "$texto_doble";
    ?>
</body>
</html>