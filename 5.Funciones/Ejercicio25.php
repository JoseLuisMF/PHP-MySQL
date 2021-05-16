<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos. Definicion de clases</title>
</head>
<body>
    <?php
      class Persona {
          public $nombre;
          public $apellidos;
          public $dni;

          function getNombre(){
              return $this -> nombre;
          }
          function setNombre($nombre){
              $this -> nombre = $nombre;
          }
          function getApellidos(){
            return $this -> apellidos;
        }
        function setApellidos($apellidos){
            $this -> apellidos = $apellidos;
        }
        function getDni(){
            return $this -> dni;
        }
        function setDni($dni){
            $this -> dni = $dni;
        }
      }
    ?>
</body>
</html>