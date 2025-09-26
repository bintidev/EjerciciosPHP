<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 8 - Arrays Asociativos Paralelos</title>
</head>
<body>
    
    <h1>Recorriendo Arrays Asociativos en Paralelo</h1>

    <?php

        /*
            Crea en un script PHP dos arrays asociativos paralelos, uno con la rúbrica de
            4 calificaciones (inicial, primera, segunda y tercera) y otro con las notas
            particulares de una persona. A continuación, computará la nota final de esa
            persona, y muéstrala por pantalla.
        */

        // ponderación por evaluación
        $rubrica = [

                        "inicial" => 0.20,
                        "primera" => 0.30,
                        "segunda" => 0.20,
                        "tercera" => 0.30

        ];

        // nota por cada evaluacioón
        $calificaciones = [

                        "inicial" => 8,
                        "primera" => 5,
                        "segunda" => 9,
                        "tercera" => 6

        ];

        $notaFinal = 0; // inicializamos el acumulador

        /*
            ya que ambos arrays tienen las mismas claves para cada valor,
            la variable usada en el bucle foreach para recorrer el array rubrica
            se puede usar como índice para recorrer, simultáneamente y en paralelo,
            el array calificaciones
        */
        foreach ($rubrica as $prueba => $peso) {
            $notaFinal += $peso * $calificaciones[$prueba]; // acumulación
        }

        // impresión por pantalla
        if($notaFinal >= 5) {
            echo "Nota: $notaFinal ¡Alégrate, que estás aprobado!";
        } else {
            echo "nota: $notaFinal. Has suspendido. Otra vez será :(";
        }

    ?>

</body>
</html>