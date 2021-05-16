<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos. Constructor</title>
</head>
<body>
    <?php
      function __constructor($nombre, $apellidos, $dni){
          $this ->nombre = $nombre;
          $this ->apellidos = $apellidos;
          $this ->dni = $dni;
      }
      $joseLuis = new Persona("Jose Luis", "Moreno Felipe", "143352546Z");
    ?>
</body>
</html>