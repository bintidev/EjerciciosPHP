<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16 - Funciones Callback</title>

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

                // crea un array de valores entre 1 y 100
                $arrayPrueba = array(range(1, 100));

                // muestra el contenido del array
                echo "Contenido del array <br>";
                for ($i = 0; $i < sizeof($arrayPrueba); $i++) { 
                    echo "$i ";
                }

                // 
                $sonPositivos = array_all($arrayPrueba, fn($a) => $a > 0);

            ?>

        </p>

    </div>

</body>
</html>