<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos. Clases anonimas</title>
</head>
<body>
    <?php
      interface Datos{
        public function detalle (string $nombre);
      }
      class Empresa{
          private $razonSocial;
          function getRazonSocial(){
            return $this -> razonSocial;
        }
        function setRazonSocial(Datos $razonSocial){
            $this -> razonSocial = $razonSocial;
        }
      }
      $empresa = new Empresa();
      $empresa->setRazonSocial(new class implements Datos {
          public function detalle(string $nombre){
              echo $nombre;
          }
      });
      $empresa->getRazonSocial()->detalle("Anaya Multimedia");
    ?>
</body>
</html>