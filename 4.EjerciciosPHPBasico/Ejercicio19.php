<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php
       define( "LIBRO", "PHP y MySQL");
       define( "Autor1", "Jose Luis Moreno");
       define( "Autor2", "Jose Antonio Jimenez");
       echo LIBRO . "<br>";
       echo Autor1 . "<br>";
       echo Autor2 . "<br>";
       define("ANIMALES", ['Perro', 'Gato', 'Mono']);
       echo ANIMALES[1] . "<br>";
       //Constantes predefinidas
       echo __LINE__ . ".- Version de PHP: " . PHP_VERSION . "<br>";
       echo __LINE__ . ".- Sistema operativo servidor: " . PHP_OS . "<br>";
       echo __LINE__ . ".- Ruta de las extensiones: " . PHP_EXTENSION_DIR . "<br>";
       echo __LINE__ . ".- Api del servidor: " . PHP_SAPI . "<br>";
    ?>
</body>
</html>