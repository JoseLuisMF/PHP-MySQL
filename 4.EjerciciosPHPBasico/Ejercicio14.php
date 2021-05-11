<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores nulos (NULL)</title>
</head>
<body>
    <?php
        $variable_nula= NULL;
        if ( $variable_nula ){
            echo "La comprobacion es VERDADERA";
        }else{
            echo "La comprobacion es FALSA";
        }
    ?>
</body>
</html>