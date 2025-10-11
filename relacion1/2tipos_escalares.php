<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 2 - Tipos y Salidas</title>
</head>
<body>

    <h1>Trabajando con Tipos y Formatos de Salida</h1>

    <?php

        /*
            Haz un programa PHP que muestre un valor de ejemplo de cada tipo de
            dato escalar en php con echo utilizando la función var_dump(), y también
            con printf formateado. Prueba todas las posibilidades tal y como vienen
            descritas en: https://www.w3schools.com/php/func_string_printf.asp
            ● bool
            ● int
            ● float
            ● string
        */

        const PI = "3.14.16"; // el valor puede ser no conocido
        define("NOMBRE", "Binta"); // modo original
        $v1 = "hola";
        $v2 = 24;
        $v3 = true;
        $v4 = 5.34;

        var_dump($v1);
        var_dump($v2);
        var_dump($v3);
        var_dump($v4);

        printf("<br>String: %s - Entero: %d - Booleano: %s - Flotante: %.2f", $v1, $v2, $v3, $v4);


    ?>

</body>
</html>