<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invocaciones de Librería</title>
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
            <h1 class="text-primary">Invocación de Librería relacion3.php</h1>
            <div class="mb-3">
                <label for="numero1" class="form-label">Cálculo de número primo:</label>
                <input class="form-control" name="numero1" type="number" placeholder="Número natural" aria-label="default input example">
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label">Cálculo de factorial:</label>
                <input class="form-control" name="numero2" type="number" placeholder="Número natural" aria-label="default input example">
            </div>

            <div class="mb-3">
                <label for="numero3" class="form-label">Cálculo de MCD:</label>
                <input class="form-control" name="numero3" type="number" placeholder="Primer número" aria-label="default input example"> <br>
                <input class="form-control" name="numero4" type="number" placeholder="Segundo número" aria-label="default input example">
            </div>

            <div class="mb-1">
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
            </div>
        </form>
    </div>

    <div class="text-center">

            <?php

                include "relacion3.php";

                // recogida de entrada del usuario
                $numero1 = $_GET['numero1'];
                $numero2 = $_GET['numero2'];
                $numero3 = intval($_GET['numero3']);
                $numero4 = intval($_GET['numero4']);

                // calculo del numero primo
                echo "<p class='fs-4'>
                        <span class='fs-2 text-primary-emphasis'>Cálculo del Número Primo</span>
                        <br>";

                $esNumPrimo = esPrimo($numero1) ? "El número " . $numero1 . " es primo" : "El número " . $numero1 . " no es primo";
                echo $esNumPrimo;
                echo "<br>Números primos entre 1 y ". $numero1 . ": <br>" . primosEntre($numero1) . "</p>";

                // calculo del factorial
                echo "<p class='fs-4'>
                        <span class='fs-2 text-primary-emphasis'>Cálculo del Factorial</span>
                        <br>";
                echo "Factorial del número " . $numero2 . ": " . factorial($numero2) . "<br>";
                echo "Factorial (por recursividad) del número " . $numero2 . ": " . factorialRecursivo($numero2);

                // calculo del mcd
                echo "<p class='fs-4'>
                        <span class='fs-2 text-primary-emphasis'>Cálculo del MCD</span>
                        <br>";
                echo "Mínimo Común Divisor de " . $numero3 . " y " . $numero3 . " es: " . mcdEuclides($numero3, $numero4) . "<br>";
                echo "Mínimo Común Divisor (recursivo) de " . $numero3 . " y " . $numero4 . " es: " . mcdEuclidesRecursivo($numero3, $numero4) . "<br>";
                
            ?>
        </table>

    </div>

</body>
</html>