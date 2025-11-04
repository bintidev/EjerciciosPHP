<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 - Funciones Callback Arrays</title>

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

                // crea un array de valores entre 1 y 100
                $arrayPrueba = range(1, 100);

                // muestra el contenido del array
                echo "Contenido del array <br>";
                for ($i = 0; $i < sizeof($arrayPrueba); $i++) { 
                    echo $arrayPrueba[$i] . " ";
                }
                
                // **ATENCION: las funciones a continuación solo funcionan
                // con las versiones mas recientes de PHP
                // se puede evitar su instalacion ejecutandolo en un sandbox
                // Ejemplo: onlinephp.io

                // comprueba que cada elemento del array es positivo
                echo "<div class='alert alert-primary' role='alert'>";
                $sonPositivos = array_all($arrayPrueba, fn($a) => $a > 0);
                $resultadoPositivos = $sonPositivos ? "Todos los valores del array son positivos" : "Algunos valores del array no son positivos";
                echo "<br>" . $resultadoPositivos . "<br>";
                echo "</div>";

                //comprueba que CUALQUIER elemento sea multiplo 5
                echo "<div class='alert alert-secondary' role='alert'>";
                $multiploCinco = array_any($arrayPrueba, fn($a) => $a % 5 == 0);
                $resultadoMultiplos = $multiploCinco ? "Existen algunos valores múltiplos de 5" : "No existe ningún valor múltiplo de 5";
                echo "<br>" . $resultadoMultiplos . "<br>";
                echo "</div>";

                // devuelve un array unicamente con los numeros primos
                // extraidos de $arrayPrueba
                echo "<div class='alert alert-success' role='alert'>";
                $primos = array_filter($arrayPrueba, "esPrimo");
                echo "Números primos extraídos de arrayPrueba <br>";
                for ($i = 0; $i < sizeof($primos); $i++) {
                    // array_filter vacia las posiciones que no cumplen con la condicion de busqueda
                    // para evitar que se produzca un error por inexistencia, se comprueba que
                    // dicha posicion no esta vacia
                    if (!empty($primos[$i])) { echo $primos[$i] . " "; }
                }
                echo "</div>";

                // obtiene el cuadrado de cada valor
                echo "<div class='alert alert-info' role='alert'>";
                $cuadrado = array_map(fn($a) => pow($a, 2), $arrayPrueba);
                echo "<br>Cuadrado de cada elemento de arrayPrueba <br>";
                for ($i = 0; $i < sizeof($cuadrado); $i++) { 
                    echo $cuadrado[$i] . " ";
                }
                echo "</div>";

                // sustituye cada valor pos su doble
                // NOTA: no se guarda el resultado en variable porque el array
                // pasado por parametro se hace por refencia (se modifica el valor)
                echo "<div class='alert alert-darkinfo' role='alert'>";
                array_walk($arrayPrueba, fn($a) => $a * 2);
                echo "<br>Valores sustituidos por su doble <br>";
                for ($i = 0; $i < sizeof($arrayPrueba); $i++) { 
                    echo $arrayPrueba[$i] . " ";
                }
                echo "</div>";

            ?>

        </p>

    </div>

</body>
</html>