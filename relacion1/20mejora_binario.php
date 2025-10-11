<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 19 - Decimal a Binario</title>
</head>
<body>

    <h1>Conversión de Decimal a Binario</h1>

    <?php

        // Haz un script PHP en el que conviertas en binario un número natural decimal
        // PENDIENTE CORRECCIÓN
        $base = 16;
        $numero = 2190;
        $resultado = "";
        
        echo "El número original es $numero y la base a la que pasarlo $base";
        echo "<br>el resultado es : ";

        while ($numero >= $base) {

            if ($digito > 9) {

                    // si el digito fuera 10, sacaria 'A', si 11, sacaria 'B', etc
                    // chr() cambia numero por caracter ASCII
                    // el 55 es para el 'salto' entre el 10 y la 'A' que es 65
                    $caracter = chr(55 + $digito);
                } else {
                    $caracter = (string) $digito;
                }

            $resultado =  (string) $caracter . $numero % $base . $resultado; // casting explícito
            $numero /= $base;

        }

        echo (string) $numero . $resultado;

    ?>
    
</body>
</html>