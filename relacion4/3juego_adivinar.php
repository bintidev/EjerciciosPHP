<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Adivinar un Número</title>
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }

        /*#respuesta {
            visibility: hidden;
        }*/
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form class="p-3 shadow rounded bg-secondary-subtle"
        action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h1 class="text-primary">Adivina el Número</h1>

            <input type="hidden" name="pensado" id="pensado" value="<?php $num = rand(1, 100); ?>">

            <div class="mb-3">
                <label for="intento" class="form-label">Adivina el número que estoy pensando:</label>
                <input class="form-control" type="number" placeholder="Entre 1 y 100"
                name="intento" id="intento" aria-label="default input example">
            </div>

            <div class="mb-3" id="respuesta">
                
                <?php

                    echo "<p>" . $_POST['pensado'] . "</p>";
                    //$pensado = $_POST['pensado'];
                    /*$intento = $_REQUEST['intento'];
                    $respuesta = '';*/

                    /*if ($intento > $pensado) {
                        $respuesta = '<div class="alert alert-danger" role="alert" style="visibility: visible;">
                                        ¡Upsi! Te has pasado :/
                                    </div>';
                    } else if ($intento < $pensado) {
                        $respuesta = '<div class="alert alert-warning" role="alert" style="visibility: visible;">
                                        Casi, casi...Te has quedado corto :P
                                    </div>';
                    } else {
                        $respuesta = '<div class="alert alert-success" role="alert" style="visibility: visible;">
                                        ¡Oleee, has acertado! :D
                                    </div>';
                    }

                    echo $respuesta;*/

                ?>

            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
            </div>
        </form>
    </div>

</body>
</html>