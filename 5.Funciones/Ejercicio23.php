<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones. Argumentos variables</title>
</head>
<body>
    <?php
      function concatena(...$palabras){
        $resultado= "";
        foreach ($palabras as $palabra) {
           $resultado .= $palabra. " ";
        }
        return $resultado;
      }
      echo concatena( "Libro", "de", "PHP") . "<br/>";
      echo concatena("Jose", "Luis", "Moreno");

    ?>
</body>
</html>