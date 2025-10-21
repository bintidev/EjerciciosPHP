<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función Número Primo</title>
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
            <h1 class="text-primary">Funciones Numéricas</h1>
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

            // devuelve si un número es primo o no
            function esPrimo($n) {

                $contador = 2;
                $esPrimo = true;

                if ($n == $contador) {

                    $esPrimo = true;

                } else {

                    do {

                        if ($n % $contador == 0) {
                            $esPrimo = false;
                        } else {
                            $esPrimo = true;
                            $contador++;
                        }
                        

                    } while ($contador < $n && $esPrimo);

                }

                return $esPrimo;

            };

            // muestra los número primos entre 1 y el introducido por el usuario
            function primosEntre($n) {

                for ($i=1; $i < $n; $i++) { 
                    
                    if (esPrimo($i)) {

                        echo $i . "   ";

                    }

                }

            }

            $numero = $_GET['numero'];

            if (esPrimo($numero)) {

                echo "El número " . $numero . " es primo <br>";

            } else {

                echo "El número " . $numero . " no es primo <br>";

            }

            echo "Lista de los número primos comprendidos entre 1 y " . $numero . "<br>";
            primosEntre($numero);


        ?>
    </div>

</body>
</html>