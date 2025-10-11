<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 17 - División con el Algoritmo de Euclides</title>
</head>
<body>
    
    <h1>División de Números Naturales: Algoritmo de Euclides</h1>

    <?php

        /*
            Haz un script en PHP que calcule la división de dos números naturales
            utilizando el algoritmo de Euclides para la división
        */

        $dividendo = 20;
        $divisor = 6;
        $cociente = 0;

        echo "División de $dividendo entre $divisor con Euclides<br>";

        // comprobar que es posible sustraer al dividendo
        while ($dividendo >= $divisor) {
            $dividendo -= $divisor; // restarle al dividendo la cantidad almacenada en el divisor
            $cociente++; // cuenta las veces que se hace la operación
        }

        echo "El cociente es $cociente y el resto es $dividendo";

    ?>

</body>
</html>