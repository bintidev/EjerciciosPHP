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
        $numero = 16;
        $binario = "";
        $cociente;
        
        if ($numero < 0) {
            echo "No se ha podido convertir el número a binario";
        };

        while ($numero >= 2) {

            // casting explícito del resultado del módulo de $numero entre 2, y concatenacion con el contenido almacenado en $binario
            // se almacena en un string los restos, rellenando desde el final al principio
            $binario = (string) $numero % 2 . $binario;

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