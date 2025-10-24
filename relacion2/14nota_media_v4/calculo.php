<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
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

        $colorProgreso = "";

        switch (round($notaFinal)) {

            case 1:
            case 2:
            case 3:
            case 4:
                $colorProgreso = "Danger";
                break;
            case 5:
            case 6:
                $colorProgreso = "Warning";
                break;
            case 7:
            case 8:
                $colorProgreso = "Default";
                break;
            case 9:
            case 10:
                $colorProgreso = "Success";
                break;

        }

        echo "Nombre: " . $nombre . " - Email: " . $email . "<br>" . "Nota final: " . $notaFinal . "<br>" . $aprueba;
        echo "<div class='progress' role='progressbar' aria-label='" . $colorProgreso . " striped example' aria-valuenow='" . $notaFinal * 10 . "' aria-valuemin='0' aria-valuemax='100'>
                <div class='progress-bar progress-bar-striped' style='width: " . ($notaFinal * 100) / 10 . "%'></div>
            </div>"

    ?>

</body>
</html>