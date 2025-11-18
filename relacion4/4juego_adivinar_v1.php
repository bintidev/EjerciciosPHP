
<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Adivinar un Número v1</title>
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form class="p-3 shadow rounded bg-secondary-subtle"
        action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <h1 class="text-primary">Adivina el Número</h1>

            <div class="mb-3">
                
                <?php

                    $_SESSION['pensado'] = random_int(1, 100);
                    $_SESSION['intento'] = $_REQUEST['intento'];
                    $_SESSION['respuesta'] = '';

                    if ($_SESSION['intento'] > $_SESSION['pensado']) {
                        $_SESSION['respuesta'] = '<div class="alert alert-danger" role="alert">
                                                    ¡Upsi! Te has pasado :/
                                                </div>';

                    } else if ($_SESSION['intento'] < $_SESSION['pensado']) {
                        $_SESSION['respuesta'] = '<div class="alert alert-warning" role="alert">
                                                    Casi, casi...Te has quedado corto :P
                                                </div>';

                    } else {
                        $_SESSION['respuesta'] = '<div class="alert alert-success" role="alert">
                                                    ¡Oleee, has acertado! :D
                                                </div>';

                        $_SESSION['pensado'] = 0;
                        $_SESSION['intento'] = 0;
                        session_unset();
                        session_destroy();
                    }

                    echo $_SESSION['respuesta'];

                ?>

            </div>

            <div class="mb-3">
                <label for="intento" class="form-label">Adivina el número que estoy pensando:</label>
                <input class="form-control" type="number" placeholder="Entre 1 y 100"
                name="intento" id="intento" aria-label="default input example">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
            </div>
        </form>
    </div>

</body>
</html>