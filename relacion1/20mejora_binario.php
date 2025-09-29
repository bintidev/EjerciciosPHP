<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 19 - Decimal a Binario</title>
</head>
<body>

    <h1>Conversión de Decimal a Binario</h1>

    <?php

        // Haz un script PHP en el que conviertas en binario un número natural decimal
        // PENDIENTE CORRECCIÓN
        const DIVISOR_B = 2; const DIVISOR_O = 8; const DIVISOR_H = 16;
        $numero = 32;
        $resto;
        $binario = [];
        $octal = [];
        $hexadecimal = [];
        
        if ($numero < 0) {
            echo "No se ha podido convertir el número a binario";
        }

        do {

            $numero /= DIVISOR;
            $resto = $numero % DIVISOR;
            array_push($binario, $resto);

        } while ($numero > 0);

        echo "El equivalente del número en binario es " , implode($binario);

    ?>
    
</body>
</html>