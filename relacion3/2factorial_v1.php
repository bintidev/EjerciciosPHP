<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función Factorial</title>
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }
    </style>
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form class="p-3 shadow rounded bg-secondary-subtle" id="form1"
        action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        <!-- con la sentencia 'return', el formulario recibe el valor pasado por la función -->
            <h1 class="text-primary">Cálculo del Factorial</h1>
            <div class="mb-3">
                <label for="numero" class="form-label">Introduce un número:</label>
                <input class="form-control" name="numero" type="number" placeholder="Número natural" aria-label="default input example">
            </div>

            <div class="mb-1">
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
            </div>
        </form>
    </div>

    <div>
        <div class="text-center fs-4">
        <?php

            // devuelve el factorial de un número
            function factorial($n) {

                $factorial = 1;

                if ($n == 1) {

                    $factorial = 1;

                } else {

                    for ($i=1; $i <= $n ; $i++) { 
                        
                        $factorial *= $i;

                    }

                }

                return $factorial;

            }

            // factorial recursivo
            function factorialRecursivo($n) {

                return $n * factorial($n - 1);
                
            }

            $numero = $_GET['numero'];

            echo "Factorial del número " . $numero . ": " . factorial($numero) . "<br>";

            echo "Factorial (por recursividad) del número " . $numero . ": " . factorialRecursivo($numero);

        ?>
    </div>

</body>
</html>