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
            <h1 class="text-primary">Cambio de valores con <code>swap()</code></h1>
            <div class="mb-3">
                <label for="numero1" class="form-label"><span class="text-danger">* </span>Introduce un primer número:</label>
                <input class="form-control" type="number" placeholder="Como mucho 2 cifras decimales" aria-label="default input example"
                name="numero1" id="numero1">
                <div class="text-danger" id="numero1Help">El primer número debe ser entero</div>
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label"><span class="text-danger">* </span>Introduce un segundo número:</label>
                <input class="form-control" type="number" placeholder="Como mucho 2 cifras decimales" aria-label="default input example"
                name="numero2" id="numero2">
                <div class="text-danger" id="numero2Help">El segundo número debe ser entero</div>
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label"><span class="text-danger">* </span>Introduce una sucesión de números:</label>
                <input class="form-control" type="text" placeholder="Asegúrate de que estén separados" aria-label="default input example"
                name="sucesion" id="sucesion">
                <div class="text-danger" id="sucesionHelp">Debe introducir al menos 3 números</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="./validacion.js"></script>

    <div class="container-fluid w-75">

        <p class="fs-4 text-center">

            <?php

                include './functionsRel3.php';

                $numero1 = $_GET['numero1'];
                $numero2 = $_GET['numero2'];
                $sucesion = $_GET['sucesion'];
                // separa la cadena en un array tomando como punto de
                // separacion de cada elemento espacios, caracteres alfanumericos
                // y no alfanumericos
                $sucesionArr = preg_split("/[\s\w\W]+/", $sucesion);

                echo "Valores antes del intercambio: <br>nuemro1: $numero1 - numero2: $numero2 <br><br>";
                swap($numero1, $numero2);
                echo "Valores tras el intercambio: <br>numero1: $numero1 - numero: $numero2 <br><br>";

                echo "Valores del array antes del intercambio: ";
                for ($i = 0; $i < sizeof($sucesionArr); $i++) { 
                    
                    echo "$sucesionArr[$i] ";

                }
                invertir($sucesionArr);
                echo "<br><br>Valores del array después del intercambio: ";
                for ($i = 0; $i < sizeof($sucesionArr); $i++) { 
                    
                    echo "$sucesionArr[$i] ";

                }


            ?>

        </p>

    </div>

</body>
</html>