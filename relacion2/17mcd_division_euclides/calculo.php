<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Calculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .d-flex {
            height: 80vh;
        }
    </style>
</head>
<body>

    <?php

        // devuelve el cociente y el resto de la división de
        // 2 número usando el algoritmo de Euclides
        function division($num1, $num2) {

            $n1 = $num1;
            $n2 = $num2;
            $cociente = 0;

            // comprobar que es posible sustraer al dividendo
            while ($n1 >= $n2) {
                $n1 -= $n2; // restarle al dividendo la cantidad almacenada en el divisor
                $cociente++; // cuenta las veces que se hace la operación
            }

            return [$cociente, $n1];

        }

        // devuelve el MCD de los 2 números pasados por parámetro
        function mcd($num1, $num2) {

            $n1 = $num1;
            $n2 = $num2;

            while ($n1 != $n2) { // cuando sean iguales no habrá más que dividir

                if ($n1 > $n2) {
                    $n1 -= $n2; // si el 1er numero es mayor, se le resta la cantidad del 2do numero
                } else {
                    $n2 -= $n1; // de lo contrario, el caso anterior pero al revés
                }

            }

            return $n1;

        }

        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $opcion = $_GET['opcion'] ?? [];

        echo "<div class='d-flex justify-content-center align-items-center'>
                <div>";

        if ((isset($opcion[0]) && isset($opcion[1])) &&
            ($opcion[0] == 'mcd' || $opcion[1] == 'mcd') &&
            ($opcion[0] == 'division' || $opcion[1] == 'division')) {

            echo "<p class='fs-4 text-info text-center'>División y MCD de $numero1 entre $numero2 con Euclides</p>";
            
            $division = division($numero1, $numero2);
            $mcd = mcd($numero1, $numero2);

            echo "<p class='fs-4 text-primary text-center'>Resultado de la División: </p>";
            echo "<p class='text-black fs-5 text-center'>
            El cociente es $division[0] y el resto es $division[1]
            </p>";

            echo "<p class='fs-4 text-primary text-center'>Resultado de la División: </p>";
            echo "<p class='text-black fs-5 text-center'>
            El MCD es $mcd</p>";

        } elseif ((isset($opcion[0]) || isset($opcion[1])) &&
        ($opcion[0] == 'division' || $opcion[1] == 'division')) {
            
            $resultado = division($numero1, $numero2);
            echo "<p class='fs-2 text-info text-center'>División de $numero1 y $numero2 con Euclides</p>";
            
            echo "<p class='text-black fs-5 text-center'>
            El cociente es $resultado[0] y el resto es $resultado[1]
            </p>";

        } elseif ((isset($opcion[0]) || isset($opcion[1])) &&
        ($opcion[0] == 'mcd' || $opcion[1] == 'mcd')) {
                
            echo "<p class='fs-4 text-primary text-center'>Búsqueda de MCD de $numero1 y $numero2 con Euclides</p><br>";
            $resultado = mcd($numero1, $numero2);
            echo "<p class='text-black fs-5 text-center'>
            El MCD es $resultado</p>";

        }
        echo "</div>
        </div>";

    ?>

</body>
</html>