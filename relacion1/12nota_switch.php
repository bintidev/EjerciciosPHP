<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 12 - Notas</title>
</head>
<body>
    
    <h1>Sentencia Switch para Determinar Notas</h1>

    <?php

        /*
            12 - Realiza un programa php que, a partir de una nota numérica entera entre
            1 y 10 devuelva:
            ● Sobresaliente si es 9 ó 10
            ● Notable si es 7 u 8
            ● Bien si es un 6
            ● Suficiente si es un 5
            ● Suspenso, si es 1,2,3 ó 4
            Utiliza la bifurcación múltiple o switch y comprueba que la nota esté en el
            rango adecuado de valores permitidos (sea entera y entre 1 y 10)
        */

        $notaFinal = 7;

        switch ($notaFinal) {
            case 9: // no es como en java que se puede poner varios casos en un mismo case
            case 10:
                echo "Tu nota es: $notaFinal - Nota final: Sobresaliente";
                break;
            case 7:
            case 8:
                echo "Tu nota es: $notaFinal - Nota final: Notable";
                break;
            case 6:
                echo "Tu nota es: $notaFinal - Nota final: Bien";
                break;
            case 5:
                echo "Tu nota es: $notaFinal - Nota final: Suficiente";
                break;
            case 1:
            case 2:
            case 3:
            case 4:
                echo "Tu nota es: $notaFinal - Nota final: Insuficiente";
                break;
            default:
                echo "La nota introducida está fuera de rango o es inválida";
                break;
        }

    ?>

</body>
</html>