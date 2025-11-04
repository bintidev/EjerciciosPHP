<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 - Otras Funciones Arrays</title>

    <style>
        .container-fluid {
            min-height: 100vh;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid w-75">
        
        <p class="text-center fs-4">

            <?php

                // importa la funcion de busqueda de numeros primos
                // del cuarto ejercicio de libreria de funciones
                include './4libreria_funciones/relacion3.php';

                // crea un array de valores impares (salto de 2) del 1 al 20
                $impares = range(1, 20, 2);
                // rango de valores para el array $multiplosDeTres
                $rango = range(1, 40);
                // almacena los valores multiplos de 3 de dicho rango en el array
                $multiplosDeTres = array_filter($rango, fn($v) => $v % 3 == 0);

                // muestra el contenido del array
                echo "Contenido del array <br>";
                for ($i = 0; $i < sizeof($multiplosDeTres); $i++) { 
                    if (!empty($multiplosDeTres[$i])) { echo $multiplosDeTres[$i] . " "; }
                }
                
                // **ATENCION: las funciones a continuación solo funcionan
                // con las versiones mas recientes de PHP
                // se puede evitar su instalacion ejecutandolo en un sandbox
                // Ejemplo: onlinephp.io

                // devuelve un array con la combinacion de los valores de ambos arrays
                echo "<div class='alert alert-primary' role='alert'>";
                $combinacion = array_combine($impares, $rango);
                echo "<br>Combinación de los valores de ambos arrays<br>";
                for ($i = 0; $i < sizeof($combinacion); $i++) { 
                    echo $combinacion[$i] . " ";
                }
                echo "</div>";

                //devuelve un array de los valores que difieren de ambos arrays
                /*echo "<div class='alert alert-primary' role='alert'>";
                $diferencia = array_diff($impares, $multiplosDeTres);
                echo "<br>Diferencia entre ambos arrays<br>";
                for ($i = 0; $i < sizeof($diferencia); $i++) { 
                    if (!empty($diferencia[$i])) { echo $diferencia[$i] . " "; }
                }
                echo "</div>";*/

                // USAR array_unique CUANDO LOGRE COMBINARLOS

                // devuelve un array unicamente con los numeros primos
                // extraidos de $arrayPrueba
                echo "<div class='alert alert-success' role='alert'>";
                $primos = array_filter($arrayPrueba, "esPrimo");
                echo "Números primos extraídos de arrayPrueba <br>";
                for ($i = 0; $i < sizeof($arrayPrueba); $i++) { 
                    echo "$i ";
                }
                echo "</div>";

                // obtiene el cuadrado de cada valor
                echo "<div class='alert alert-info' role='alert'>";
                $cuadrado = array_map(fn($a) => pow($a, 2), $arrayPrueba);
                echo "<br>Cuadrado de cada elemento de arrayPrueba <br>";
                for ($i = 0; $i < sizeof($cuadrado); $i++) { 
                    echo "$i ";
                }
                echo "</div>";

                // sustituye cada valor pos su doble
                // NOTA: no se guarda el resultado en variable porque el array
                // pasado por parametro se hace por refencia (se modifica el valor)
                echo "<div class='alert alert-darkinfo' role='alert'>";
                array_walk($arrayPrueba, fn($a) => $a * 2);
                echo "<br>Valores sustituidos por su doble <br>";
                for ($i = 0; $i < sizeof($arrayPrueba); $i++) { 
                    echo "$i ";
                }
                echo "</div>";

            ?>

        </p>

    </div>

</body>
</html>