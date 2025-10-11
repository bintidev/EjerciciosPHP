<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 13 - Calcular Factorial</title>
</head>
<body>
    
    <h1>Factorial con Acumulador (Multiplicación)</h1>

    <?php

        /*
            13- Haz un script PHP que calcule el factorial de un número natural (entero y
            positivo). Haz que se muestren los cálculos que se van haciendo
        */

        $numero = 5;
        $factorial = 1;

        if ($numero < 0) {
            echo "El factorial de $numero no está definido. Debe ser un número natural";
        } else {
            for ($i = $numero; $i > 1; $i--) { // decremento desde el número dado hasta el 2 acumulando la multiplicación de los números
                echo "$i * ";
                $factorial *= $i;
            }
        }

        echo "<br>El factorial de $numero es $factorial"

    ?>

</body>
</html>