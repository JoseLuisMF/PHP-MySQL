<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones. Funciones con tipo definido</title>
</head>
<body>
    <?php
      function sumaEnteros(int $sumando1, int $sumando2) : int{
        return $sumando1 + sumando2;
      }
      echo concatena( "La suma de 3 y 4 es igual a: " . sumaEnteros(3 , 4));
    ?>
</body>
</html>