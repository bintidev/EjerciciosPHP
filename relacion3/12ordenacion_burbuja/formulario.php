<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Formulario de 2 Números</title>
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }

        #numero1Help, #numero2Help, #sucesionHelp {
            visibility: hidden;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form class="p-3 shadow rounded bg-secondary-subtle" id="form1"
        action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
            <h1 class="text-primary">Ordenamiento de Ascenso de Burbujas</h1>

            <div class="mb-3">
                <label for="numero2" class="form-label"><span class="text-danger">* </span>Introduce una sucesión de caracteres:</label>
                <input class="form-control" type="text" placeholder="Asegúrate de que estén separados" aria-label="default input example"
                name="sucesion" id="sucesion">
                <div class="text-danger" id="sucesionHelp">Debe introducir al menos 3 elementos</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="./validacion.js"></script>

    </div>

    <div class="container-fluid w-75">

        <p class="text-center fs-4">

            <?php

                include './funcion.php';

                

            ?>

        </p>

    </div>

</body>
</html>