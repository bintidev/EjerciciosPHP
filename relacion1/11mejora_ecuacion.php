<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 11 - Mejora</title>
</head>
<body>
    
    <h1>Mejora del Ejercicio 10</h1>

    <?php

        /*
            Mejora el intento anterior para que si alguno de los coeficientes a, b o c
            fuera 0, el programa gestione el cálculo de resultados de manera más
            adecuada:
            ● Si a=0, la ecuación no es de segundo grado, solo hay una raíz:
            x =-c/b
            ● Si b=0, las raíces se calculan de manera más sencilla:
            x1=-sqrt(-c/a) y x2=sqrt(-c/a)
            ● Si c=0, las raíces son, sacando factor común: x(ax+b)=0:
            x1=0 y x2=-b/a
            Aparte de esta casuística, hay que evitar dividir por cero…. Resuelve toda estas
            posibilidades y refactoriza el código para que sea limpio y óptimo
        */
        $a = 2;
        $b = 0;
        $c = 4;
        $x1;
        $x2;
        $error = "No es posible dividir un valor por cero";

        // primera consideracion: a = 0
        if ($a == 0) {

            // subcondicion: que ni c ni b sean 0
            if ($c == 0 || $b == 0) {
                echo $error;

            } else {

                $x1 = -$c/$b;
                echo "Resultado: $x1";

            }

        // segunda consideracion: b = 0
        } elseif ($b == 0) {

            // subcondicion: que ni a ni c sean 0
            if ($a == 0 || $c == 0) {
                echo $error;

            } else {

                $x1 = -sqrt(-$c/$a);
                $x2 = sqrt(-$c/$a);

                echo "Primer resultado: $x1 - Segundo resultado: $x2";

            }

            // tercera consideracion: c = 0
        } elseif ($c == 0) {

            // subcondicion: que ni a ni b sean 0
            if ($a == 0 || $b == 0) {
                echo $error;

            } else {

                $x1 = 0;
                $x2 = -b/a;

                echo "Primer resultado: $x1 - Segundo resultado: $x2";

            }

        } else {

            // ultima consideracion: si existen a, b y c
            $radical = $b ** 2 - 4 * $a * $c; // clean code: código limpio

            // Resultados + y -
            $x1 = (- $b + sqrt($radical)) / (2 * $a); // obligatorios los paréntesis
            $x2 = (- $b - sqrt($radical)) / (2 * $a);

            // asegurando que el resultado del radical no es negativo antes de proceder con la operación
            if($radical > 0) {
                echo "Primer resultado: $x1 - Segundo resultado: $x2";
            } else {
                echo "Las raíces no son reales";
            }
        }

    ?>

</body>
</html>