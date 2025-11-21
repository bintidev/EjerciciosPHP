<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Campos Ocultos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid w-75 m-auto w-75 bg-secondary-subtle rounded shadow">
    <form class="p-3" method="get">
            <h1 class="text-primary">Campos Ocultos</h1>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input class="form-control" type="text" placeholder="Nombre del restaurante" aria-label="default input example"
                id="nombre" name="nombre">
                <div id="idusuarioHelp" class="form-text">Obligatorio</div>
            </div>

            <div class="mb-3">
                <label for="tipoCocina" class="form-label">Tipo de Cocina</label>
                <input class="form-control" type="text" placeholder="Platos generalmente servidos" aria-label="default input example"
                id="tipoCocina" name="tipoCocina">
                <div id="contrasenaHelp" class="form-text">Debe contener mínimo 1 mayúsucla, 1 minúscula, 1 caracter especial, una longitud de 8 caracteres</div>
            </div>

            <div class="mb-3">
                <input type="hidden" name="navegador" value="13">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Ver Info</button>
            </div>
            <a href="localhost://loquesea.php?nombre='pepe'">programa!</a>
        </form>
    </div>

</body>
</html>