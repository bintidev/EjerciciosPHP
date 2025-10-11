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
        $numero = 128;
        $resultado = "";
        $cociente;
        $digito;
        $caracter;
        
        if ($numero < 0) {
            echo "No se ha podido realizar la conversión";
        };

        while ($numero >= $base) {

            // casting explícito del resultado del módulo de $numero entre 2, y concatenacion con el contenido almacenado en $binario
            // se almacena en un string los restos, rellenando desde el final al principio
            $digito = $numero % $base;
        

            if ($cociente > 9) {

                // si el digito fuera 10, sacaria 'A', si 11, sacaria 'B', etc
                // chr() cambia numero por caracter ASCII
                // el 55 es para el 'salto' entre el 10 y la 'A' que es 65
                $caracter = chr(55 + $digito);
            } else {
                $caracter = (string) $digito;
            }

            // el operador /= no distingue entre división entera y real. Como resultado, incluye la parte decimal
            // sustituido por operacion intermedia para realizar division entera
            $cociente = intval($numero / 2); // resultado entero
            $numero = $cociente; // recoge el último resto
            
        };

        // $binario: almacena todos los restos menos el último
        echo "El equivalente del número en binario es ", $numero . $binario;

    ?>
    
</body>
</html>