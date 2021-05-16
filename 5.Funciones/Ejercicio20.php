<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones. Fecha</title>
</head>
<body>
    <?php
       date_default_timezone_set("UTC");
       $meses = [1 => "Enero" ,2 => "Febrero" ,3 => "Marzo" ,4 => "Abril" ,
       5 => "Mayo" ,6 => "Junio" ,7 => "Julio" ,8 => "Agosto" ,
       9 => "Septiembre" ,10 => "Octubre" ,11 => "Noviembre" ,12 => "Diciembre"];
       echo "Fecha actual: " . date ("d-m-y") . "<br>";
       echo "Dia del año: " . date ("z") . "<br>";
       echo "Estamos en el mes: " . $meses [date ("n")] . "<br>";
    ?>
</body>
</html>