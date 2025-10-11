<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 15 - Número Primos</title>
</head>
<body>
    
    <h1>Buscando Números Primos con Bucle While</h1>

    <?php

        // 15- Haz un programa php que te diga si un número entero y positivo es primo o no

        $numero = 13;
        $contador = 2;
        $primo = true;

        if ($numero <= 1) {
            echo "El concepto primo solo está definido para número naturales";
        }

        do {

            if ($numero % $contador == 0) {
                $primo = false;
            }
            $contador++;

        } while ($primo && $contador < $numero); // 2 motivos parea terminar: exitoso o fracaso

        if ($contador >= $numero) { // si sigue siendo primo true
            echo "El número $numero es un número primo";
        } else { // sino, ha salido por la otra rama
            echo "El número $numero no es un número primo";
        }

    ?>

</body>
</html>