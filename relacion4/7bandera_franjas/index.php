<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Clase BanderaFranjas</title>
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .container-fluid {
            margin-top: 10vh;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid w-75 d-flex justify-content-center align-items-center">

        <div>
            <h1 class="mb-4 text-center">Objetos de Clase BanderaFranja</h1>

            <?php

                include 'BanderaFranjas.php';

                $banderaSenegal = new BanderaFranjas('vertical', ['verde', 'amarillo', 'rojo'], 'Senegal');
                $banderaCamerun = new BanderaFranjas('vertical', ['verde', 'amarillo', 'rojo'], 'Camerun');

                // mostrar info sobre las banderas
                echo "<h2 class='text-primary'>Mostrar datos de bandera</h2>";

                echo "<h4>Bandera de Senegal:</h4>";
                echo "<p>" .
                        $banderaSenegal->mostrarBandera() .
                    "</p>";

                echo "<h4>Bandera de Camerun:</h4>";
                echo "<p>" .
                        $banderaCamerun->mostrarBandera() .
                    "</p>";

                // comparacion de banderas
                echo "<h2 class='text-primary'>Comparación general</h2>";

                $sonIdenticas = $banderaSenegal->sonIdenticas($banderaCamerun) ? "Son banderas idénticas" : "Estas banderas son distintas";
                echo "<p>" . $sonIdenticas . "</p>";

                // comparación de mismos colores de franja con distinta orientacion
                echo "<h2 class='text-primary'>Comparación de franjas</h2>";

                $franjasDifOrient = $banderaSenegal->franjasDistintaOrientacion($banderaCamerun) ? "Mismas franjas, distinta orientación" : "Pues franjas... Sin más";
                echo "<p>" . $franjasDifOrient . "</p>";

                // invirtiendo colores
                echo "<h2 class='text-primary'>Inversión de colores de franjas</h2>";

                echo "<p>Colores de la bandera de Senegal originales: <span class='fw-bold'>" . $banderaSenegal->getColores() . "</span></p>";

                $invertidos = $banderaSenegal->invertirColores();
                $banderaSenegal->setColores($invertidos);
                echo "<p>Colores de la bandera de Senegal tras la inversión: <span class='fw-bold'>" . $banderaSenegal->getColores() . "</span></p>";

                // invirtiendo la orientacion de las franjas
                echo "<h2 class='text-primary'>Inversión de orientación de franjas</h2>";

                echo "<p>Orientación de la bandera de Camerun antes de inversión: <span class='fw-bold'>" . $banderaCamerun->getOrientacion() . "</span></p>";
                
                echo "<p>Colores de la bandera de Senegal originales: <span class='fw-bold'>" . $banderaSenegal->invertirOrientacion() . "</span></p>";


            ?>
        </div>

    </div>

</body>
</html>