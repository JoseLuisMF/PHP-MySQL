<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos. Instancia de una clase</title>
</head>
<body>
<h1>Ejemplo de clases</h1>
    <?php
      require_once("Ejercicio25.php");
      $joseLuis = new Persona();
      $joseLuis -> setNombre("Jose Luis");
      $joseLuis -> setApellidos("Moreno Felipe");
      $joseLuis -> setDni("15458943X");
    ?>
    <h1>Datos de <?=
        $joseLuis->getNombre() . " "
        . $joseLuis->getApellidos();
    ?>
    </h1>
    DNI: <?= $joseLuis->getDni() ?>
</body>
</html>