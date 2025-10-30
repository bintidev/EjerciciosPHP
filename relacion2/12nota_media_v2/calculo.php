<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <?php

        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $faltas = $_GET['faltas'];

        $descuentoFaltas = $faltas * 0.25;
        $media = ($nota1 + $nota2) / 2;
        $notaFinal = $media - $descuentoFaltas;

        $aprueba = $notaFinal >= 5 ? "¡Alégrate, que estás aprobado!" : "Has suspendido. Otra vez será :(";

        echo "Nombre: " . $nombre . " - Email: " . $email . "<br>" . $aprueba;

    ?>

</body>
</html>