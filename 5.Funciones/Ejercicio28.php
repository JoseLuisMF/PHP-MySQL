<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos. Herencia</title>
</head>
<body>
    <?php
      class PersonaEspaña extends Persona{
        public $dni;

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