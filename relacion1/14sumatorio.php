<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 14 - Sumatorio Números Naturales</title>
</head>
<body>
    
    <h1>Acumulando Números Naturales</h1>

    <?php

        /*
            14- Haz un programa PHP que calcule la suma de los n primeros números
            naturales (siendo n entero y positivo)
        */

        $numero = 10;
        $suma = 0;

        for ($i = 0; $i <= $numero; $i++) {
            echo "Suma de los números: [$i,]"; 
            $suma += $i;
        }

        echo "<br>Resultado de la suma: $suma"

    ?>

</body>
</html>