<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
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

        $numero = $_GET['numero'];
        $opcion = $_GET['opcion'];

        echo "<p class='d-flex justify-content-center align-items-center fs-3 text-primary'>";

        switch ($opcion) {

            case 'primo':
                $primo = true;
                $contador = 2;

                if ($numero <= 1) {
                    echo "El concepto primo solo está definido para número naturales";
                }

                do {

                    if ($numero % $contador == 0) {
                        $primo = false;
                    }
                    $contador++;

                } while ($primo && $contador); // 2 motivos parea terminar: exitoso o fracaso

                if ($contador >= $numero) { // si sigue siendo primo true
                    echo "El número $numero es un número primo";
                } else { // sino, ha salido por la otra rama
                    echo "El número $numero no es un número primo";
                }
                break;

            case 'divisores':
                if ($numero < 0) { // validación
                    echo "No puede tener divisores si es 0 o negativo";
                }

                echo "Divisores de $numero: <br>";
                for ($i = 1; $i <= $numero; $i++) { // recorrer los número de 1 a n
                    
                    if ($numero % $i == 0) {
                        echo "$i "; // colorea en rojo los números divisibles por n
                    }

                }
                break;

        }
        echo "</p>";

    ?>

</body>
</html>