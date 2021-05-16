<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones. Funciones propias</title>
</head>
<body>
    <?php
      /* $resultado = 1;
       $factorial = 4;
       for ($x=$factorial; $x > 0; $x--) { 
           $resultado = $resultado * $x;
       }
       echo "El factorial de $factorial es $resultado<br>";
       $resultado = 1;
       $factorial = 3;
       for ($x=$factorial; $x > 0; $x--) { 
           $resultado = $resultado * $x;
       }
       echo "El factorial de $factorial es $resultado<br>";
       $resultado = 1;
       $factorial = 5;
       for ($x=$factorial; $x > 0; $x--) { 
           $resultado = $resultado * $x;
       }
       echo "El factorial de $factorial es $resultado<br>";*/

       function factorial($numero){
        $resultado = 1;
        for ($x=$numero; $x > 0; $x--) { 
            $resultado = $resultado * $x;
            return $resultado;
        }
        echo "El factorial de 4 es" . factorial(4) . "<br>";
        echo "El factorial de 3 es" . factorial(3) . "<br>";
        echo "El factorial de 5 es" . factorial(5) . "<br>";
       }
    ?>
</body>
</html>