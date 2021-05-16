<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos. Clases con metodos estaticos</title>
</head>
<body>
    <?php
      public static function comprobarDni($dni){
          $letras = explode(",", "T, R, W, A, G, M, Y, F, P, D, X, B, N, J, Z, S, Q, V, H, L, C, K, E");
          if (strlen($dni)){
              $dni = "0" . $dni;
          }
          $numero = intval($dni);
          $letra = strtoupper( substr($dni, -1));
          if(strlen($dni)==9 && $letra == $letras[ $numero % 23]){
              return true;
          }else{
              return false;
          }
      }
    ?>
</body>
</html>