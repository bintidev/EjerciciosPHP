<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 9 - Evaluación de Triángulo</title>
</head>
<body>
    
    <h1>Tipo de Triángulo</h1>

    <p>
        <?php

            /*
                En un programa PHP, valora a partir de los 3 lados de un triángulo si es
                equilátero, isósceles y escaleno, y muestra esa valoración por pantalla
            */
            
            // si quisiéramos que fueran reales, ponemos .0
            $lado1 = 67.0;
            $lado2 = 32.0;
            $lado3 = 32.0;

            echo "Lado 1: $lado1 - Lado 2: $lado2 - Lado 3: $lado3 <br>";

            // si lado2 es igual a ambos lados, lógicamente lado1 y lado3 son iguales
            if($lado1 || $lado2 && $lado2 || $lado3) {
                echo "Es un triángulo equilátero";
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 || $lado3) { // se comparan todos los lados
                echo "Es un triángulo isósceles";
            } else {
                echo "Es un triángulo escaleno";
            }

        ?>
    </p>

</body>
</html>