<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 16 - Divisores con Estilo</title>

    <style>
        .divisor {
            color: red;
        }
    </style>
</head>
<body>
    
    <h1>Estilizando los números Divisibles por n</h1>

    <?php

        /*
            Haz un programa que muestre todos los divisores de un número entero y
            positivo. Irá mostrando cada número que se prueba y si resulta ser divisor,
            aparecerá marcado visiblemente, por ejemplo con otro color.
        */

        $numero = 10;

        if ($numero < 0) { // validación
            echo "No puede tener divisores si es 0 o negativo";
        }

        for ($i = 1; $i <= $numero; $i++) { // recorrer los número de 1 a n
            
            if ($numero % $i == 0) {
                echo "<span class='divisor'>$i </span>"; // colorea en rojo los números divisibles por n
            } else {
                echo "$i "; // si no son divisibles por n, no hay diferencia en la salida 
            }

        }

    ?>

</body>
</html>