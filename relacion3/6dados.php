<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Tirada de Dados</title>
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
        action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
            <h1 class="text-primary">Tirando Dados</h1>

            <div class="mb-3">
                <label for="lanzamiento" class="form-label">Introduce un número elevado de lanzamientos:</label>
                <input class="form-control" type="number" placeholder="Requerido" aria-label="default input example"
                name="lanzamiento" id="lanzamiento">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="container-fluid w-75">
        <?php

            $lanzamientos = $_GET['lanzamiento'];
            $resultado = '';
            
            // DADO NORMAL
            // crea un array con valores elementos del 1 al 6,
            // cada uno con un valor de 0
            $frecuencia = array_fill(1, 6, 0);

            echo "<div class='text-center my-3 fs-2'>Resultado por tirada con el dado normal:</div> <br>";
            // cara obtenida por tirada del dado normal
            for ($i = 0; $i <= $lanzamientos; $i++) { 
                
                // dado comun de 6 caras
                $dadoEquiprobable = rand(1, 6);
                $frecuencia[$dadoEquiprobable]++;
                $resultado += $dadoEquiprobable . "  ";
                echo "$resultado";

            }

            echo "<div class='text-center my-3 fs-4'>Frecuencia con el dado normal:</div> <br>";
            // frecuencia de cada cara obtenida del dado normal
            foreach ($frecuencia as $numero => $f) {
                echo "El $numero ha salido $f veces <br>";
            }

            $resultado = '';

            // DADO TRUCADO
            $frecuencia = array_fill(1, 6, 0);

            echo "<div class='text-center my-3 fs-2'>Resultado por tirada con el dado TRUCADO:</div>";
            // frecuencia de cada cara obtenida del dado trucado
            for ($i = 0; $i <= $lanzamientos; $i++) { 
                
                // dado de 6 caras con 3 veces mas probabilidad de que salga un 6
                $dadoTrucado = rand(1, 8);

                // se amplia el ragngo de caras y se le asigna a estas el valor 6
                // para asi tener 3 veces mas probabilidad de obtener ese resultado
                switch ($dadoTrucado) {
                    case 7:
                    case 8:
                        $dadoTrucado = 6;
                        break;
                    
                    default:
                        break;
                }

                $frecuencia[$dadoTrucado]++;
                $resultado += $dadoTrucado . "  ";
                echo "$resultado";

            }

            echo "<div class='text-center my-3 fs-4'>Frecuencia con el dado TRUCADO:</div>";
            // frecuencia de cada cara obtenida del dado normal
            foreach ($frecuencia as $valor => $f) {
                echo "El $valor ha salido $f veces <br>";
            }

        ?>
    </div>

</body>
</html>