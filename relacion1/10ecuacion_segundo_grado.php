<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 10 - Ecuación de Segundo Grado</title>
</head>
<body>
    
    <h1>Cálculo de Ecuación</h1>

    <?php

        /*
            Haz un programa PHP que resuelva una ecuación de segundo grado
            siempre que los resultados sean reales
        */

        // NOTA: solo con unos números específicos se muestra el resultado de la primera rama if
        $a = 1;
        $b = 16;
        $c = 1;

        $radical = $b ** 2 - 4 * $a * $c; // clean code: código limpio

        // Resultados + y -
        $x1 = (- $b + sqrt($radical)) / (2 * $a); // obligatorios los paréntesis
        $x2 = (- $b - sqrt($radical)) / (2 * $a);

        // asegurando que el resultado del radical no es negativo antes de proceder con la operación
        if($radical > 0) {
            echo "Primer resultado: $x1 - Resultado 2: $x2";
        } else {
            echo "Las raíces no son reales";
        }

    ?>

</body>
</html>