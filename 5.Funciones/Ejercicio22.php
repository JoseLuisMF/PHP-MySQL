<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones. Argumentos por defecto</title>
</head>
<body>
    <?php
      function capitales($pais, $capital = "Madrid", $habitantes = "muchos"){
        return ("la capital de $pais es $capital y tiene $habitantes.<br>");
      }
      echo capitales("España");
      echo capitales("Portugal", "Lisboa");
      echo capitales("Francia", "Paris", "muchisimos");
    ?>
</body>
</html>