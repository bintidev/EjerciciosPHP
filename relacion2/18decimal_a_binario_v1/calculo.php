<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <title>Calculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        p {
            height: 80vh;
        }
    </style>
</head>
<body>

    <?php

        // Haz un script PHP en el que conviertas en binario un número natural decimal
        $entrada = $_GET['numero'];
        $numero = $entrada;
        $binario = '';
        
        if ($numero < 0) {
            echo "No se ha podido convertir el número a binario";
        };

        while ($numero >= 2) {

            // casting explícito del resultado del módulo de $numero entre 2, y concatenacion con el contenido almacenado en $binario
            // se almacena en un string los restos, rellenando desde el final al principio
            $binario = (string) $numero % 2 . $binario;

            // el operador /= no distingue entre división entera y real. Como resultado, incluye la parte decimal
            // sustituido por operacion intermedia para realizar division entera
            $cociente = intval($numero / 2); // resultado entero
            $numero = $cociente; // recoge el último resto
            
        };

        echo "<p class='d-flex justify-content-center align-items-center text-primary fs-4'>";
        // $binario: almacena todos los restos menos el último
        echo "El equivalente del número $entrada en binario es  $numero$binario";
        echo "</p>"

    ?>
    
</body>
</html>