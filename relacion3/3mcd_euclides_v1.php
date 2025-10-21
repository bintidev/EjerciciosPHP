<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función MCD de Euclides</title>
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
            <h1 class="text-primary">Cálculo de MCD (Algoritmo de Euclides)</h1>
            <div class="mb-3">
                <label for="numero1" class="form-label">Introduce primer número:</label>
                <input class="form-control" name="numero1" type="number" placeholder="Número natural" aria-label="default input example">
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label">Introduce seugundo número:</label>
                <input class="form-control" name="numero2" type="number" placeholder="Número natural" aria-label="default input example">
            </div>

            <div class="mb-1">
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
            </div>
        </form>
    </div>

    <div class="text-center fs-4">
        <?php

            // devuelve el mínimo común divisor de dos números
            function mcdEuclides ($n1, $n2) {

                $mcd = 1;

                if ($n1 == $n2) {

                    $mcd = $n1; // no se diferencian, así que no importa el valor devuelto

                } else {

                    while ($n1 != $n2) {

                        if ($n1 > $n2) {

                            $n1 -= $n2;

                        } else {

                            $n2 -= $n1;

                        }

                    }

                    // devuelve el valor coincidente de ambas variables
                    // sea que se encuentra un MCD o no (que sería 1, en ese caso)
                    $mcd = $n1; // devuelve cualquiera de los dos valores

                }

                return $mcd;

            }

            // devuelve el mínimo común divisor de dos números (recursivo)
            function mcdEuclidesRecursivo ($n1, $n2) {

                $mcd = 1;

                if ($n1 == $n2) {

                    $mcd = $n1;

                }
                
                if ($n1 > $n2) {

                    $mcd = mcdEuclides($n1 - $n2, $n2); // decrementamos 

                } else {

                    $mcd = mcdEuclides($n1, $n2 - $n1);

                }

                return $mcd;

            }

            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
            
            echo "Mínimo Común Divisor de " . $numero1 . " y " . $numero2 . " es: " . mcdEuclides($numero1, $numero2) . "<br>";
            echo "Mínimo Común Divisor (recursivo) de " . $numero1 . " y " . $numero2 . " es: " . mcdEuclidesRecursivo($numero1, $numero2);

        ?>
    </div>

</body>
</html>