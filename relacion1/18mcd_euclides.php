<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1></h1>

    <?php

        /*
            Haz un programa en PHP que calcule el máximo común divisor de dos
            números naturales utilizando el algoritmo de Euclides
        */

        $numero1 = 20;
        $numero2 = 6;

        while ($numero1 != $numero2) { // cuando sean iguales no habrá más que dividir

            if ($numero1 > $numero2) {
                $numero1 -= $numero2; // si el 1er numero es mayor, se le resta la cantidad del 2do numero
            } else {
                $numero2 -= $numero1; // de lo contrario, el caso anterior pero al revés
            }

        }

        echo "El MCD es $numero1";

    ?>

</body>
</html>