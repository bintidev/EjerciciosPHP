<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <p>
    <?php

    include 'libreria_examen.php';

    $stringA = $_POST['stringA'];
    $stringB = $_POST['stringB'];

    $noSensible = distanciaHamming($stringA, $stringB, false);
    $sensible = distanciaHamming($stringA, $stringB, true);

    $infoNoSensible = ($sensible == -1) ? "Error. El tamaño de las cadenas debe ser igual" : "Distancia Hamming de las cadenas (case insensitive): " . $noSensible;
    $infoSensible = ($noSensible == -1) ? "Error. El tamaño de las cadenas debe ser igual" : "Distancia Hamming de las cadenas (case sensitive): " . $sensible;

    echo $infoNoSensible . '<br>' . $infoSensible;

    ?>
    </p>

</body>
</html>