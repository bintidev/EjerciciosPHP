
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="shortcut icon" href="playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <?php

        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $operador = $_GET['operador'];

        $resultado = match ($operador) {

            // si el parámetro pasado por match coincide con los casos
            // indicados en el inicio de cada línea, se ejecutará la operación
            // especificada
            "suma" => $numero1 + $numero2,
            "resta" => $numero1 - $numero2,
            "multiplicacion" => $numero1 * $numero2,
            "division" => $numero1 / $numero2,
            "resto" => $numero1 % $numero2

        };

        echo "El resultado es: " . $resultado;

    ?>

</body>
</html>