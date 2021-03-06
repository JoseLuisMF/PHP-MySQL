<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1>Formulario simple</h1>
        <div class="col-md-12 well">
            <form id="myForm" role="form" action="nuevoContacto.php" method="post">
                <div class="form-group">
                    <label for="exampleInputNombre">*Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="exampleInputNombre"
                        placeholder="Escribe tu nombre" minlength="5" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEdad">*Edad</label>
                    <input class="form-control" type="text" name="edad" id="exampleInputEdad" number="true"
                        placeholder="Escribe tu edad" minlength="3" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">*Email</label>
                    <input class="form-control" type="text" name="email" id="exampleInputEmail" email="true"
                        placeholder="Escribe tu email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputWeb">Web</label>
                    <input class="form-control" type="text" name="web" id="exampleInputWeb" url="true"
                        placeholder="Escribe tu web">
                </div>
                <p>(*) Campos obligatorios</p>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
</body>

</html>
<script type="text/javascript">
    $("#myForm") .validate();
</script>