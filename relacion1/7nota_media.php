<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 7 - Bloques de Control</title>
</head>
<body>
    
    <h1>Bloques de Control</h1>

    <?php

        /*
            Calcula la nota final de una persona a partir de la media de dos notas
            numéricas iniciales, y descontando 0.25 por cada falta sin justificar. Muestra el
            resultado por pantalla, indicando si la persona aprueba o suspende.
        */

        $numero1 = 6.85;
        $numero2 = 9;
        $faltasInjustificadas = 3;
        $descuentoFaltas = 3*0.25;
        $media = ($numero1+$numero2) / 2;
        $notaFinal = $media - $descuentoFaltas;
        $aprueba;

        // determinar si se ha superado el curso
        // expresión ternaria
        // $aprueba = $notaFinal >= 5 ? "¡alégrate, que estás aprobado!" : "has suspendido. Otra vez será :(";

        // mensaje aprobado o suspenso
        if($notaFinal >= 5) {
            $aprueba = "¡alégrate, que estás aprobado!";
        } else {
            $aprueba = "has suspendido. Otra vez será :(";
        }

        // impresión por pantalla de datos y nota final
        echo "Primera nota: $numero1 - ";
        echo "Segunda nota: $numero2 <br>";
        echo "Cantidad de faltas injustificadas: $faltasInjustificadas | ";
        echo "Puntos descontados por faltas: $descuentoFaltas <br>";
        printf ("La nota final es un %.2f. Por tanto, %s", $notaFinal, $aprueba);

    ?>

</body>
</html>