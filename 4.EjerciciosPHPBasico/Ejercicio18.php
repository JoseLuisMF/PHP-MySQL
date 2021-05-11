<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y sus tipos</title>
</head>
<body>
    <?php
        $variable = "hola";
        $$variable= "mundo";
        //Las dos lineas siguientes producen la misma salida
        echo "$variable ${$variable}<br>";
        echo "$variable $hola<br>";
        //Funciones
        $nombre = "Jose Luis Moreno";
        if( isset( $nombre )){
            echo "El nombre existe<br>";
        }
        //Podemos comprobar que pasa si liberamos la variable $nombre
        unset( $nombre );
        if( isset( $nombre)){
            echo "El nombre existe<br>";
        }else{
            echo "El nombre ya no existe<br>";
        }
        $numero_entero=0;
        if( is_integer( $numero_entero )){
            echo "numero_entero es del tipo integer";
        }
        $cadena = "1234";
        echo "El tipo de variable cadena es " . gettype($cadena ) . "<br>";
        $numero = intval( $cadena );
        echo "el numero es $numero";
    ?>
</body>
</html>