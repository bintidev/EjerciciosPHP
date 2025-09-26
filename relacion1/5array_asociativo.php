<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 5 - Array Asociativo</title>
</head>
<body>
    
        <h1>Trabajando con Array Asociativo</h1>

        <?php

        /*
            Crea un array asociativo constante, en el que utilices como clave el día de la
            semana, y como valor, la temperatura máxima de ese día en formato real. A
            continuación, muestra:
            ● la temperatura del primer dia de la semana
            ● la temperatura de todos los días, secuencialmente
            ● lo mismo que el anterior, pero en formato de lista numerada
        */

            $dia_temperatura = [
                            "lunes" => 27,
                            "martes" => 30,
                            "miércoles" => 15, 
                            "jueves" => 23,
                            "viernes" => 18,
                            "sábado" => 24,
                            "domingo" => 8
            ];

            // la temperatura del primer dia de la semana
            echo "Temperatura del primer día de la semana: ", $dia_temperatura["lunes"], "ºC <br><br>";

            // la temperatura de todos los días, secuencialmente
            foreach ($dia_temperatura as $dia => $temperatura) {
                echo "$dia: $temperatura ºC | ";
            }


            // lo mismo que el anterior, pero en formato de lista numerada
            echo "<ol>";
            
            foreach ($dia_temperatura as $dia => $temperatura) {
                echo "<li>$dia: $temperatura ºC</li>";
            };

            echo "</ol>";


            // formato tabla
            echo "<table style='border: green 2.5px solid;'>";

            foreach ($dia_temperatura as $dia => $temperatura) {
                echo "<tr>";
                    echo "<td>$dia</td> <td>$temperatura ºC</td>";
                echo "</tr>";
            };

            echo "</table>";

        ?>

</body>
</html>