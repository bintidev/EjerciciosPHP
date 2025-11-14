<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Clase Rstaurante</title>
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
        <form class="p-3 shadow rounded bg-secondary-subtle" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
        method="post">
            <h1 class="text-primary">Datos de restaurante</h1>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input class="form-control" type="text" placeholder="Nombre del restaurante" aria-label="default input example"
                id="nombre" name="nombre">
                <div id="idusuarioHelp" class="form-text">Obligatorio</div>
            </div>

            <div class="mb-3">
                <label for="tipoCocina" class="form-label">Tipo de Cocina</label>
                <input class="form-control" type="text" placeholder="Platos generalmente servidos" aria-label="default input example"
                id="tipoCocina" name="tipoCocina">
                <div id="contrasenaHelp" class="form-text">Debe contener mínimo 1 mayúsucla, 1 minúscula, 1 caracter especial, una longitud de 8 caracteres</div>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Añadir rating</label>
                <input class="form-control" type="number" placeholder="Puntuación del establecimiento, servicio, comida, etc." aria-label="default input example"
                id="rating" name="rating">
                <div id="contrasenaHelp" class="form-text">Debe contener mínimo 1 mayúsucla, 1 minúscula, 1 caracter especial, una longitud de 8 caracteres</div>
            </div>

            <div class="mb-3">
                <label for="moreRatings" class="form-label">Añadir múltiples ratings</label>
                <input class="form-control" type="text" placeholder="Separados por coma" aria-label="default input example"
                id="moreRatings" name="moreRatings">
                <div id="contrasenaHelp" class="form-text">Debe contener mínimo 1 mayúsucla, 1 minúscula, 1 caracter especial, una longitud de 8 caracteres</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Ver Info</button>
            </div>
        </form>
    </div>

    <div class="d-flex justify-content-center
    alignt-items-center container-fluid w-25 fs-5
    shadow p-5 mb-5 bg-body-tertiary rounded">
        <div>
            <h3 class="fs-3 text-primary">Sobre el Restaurante:</h3>
            <?php

                include 'Restaurante.php';

                $nombre = $_REQUEST['nombre'];
                $tipoCocina = $_REQUEST['tipoCocina'];
                $rating  = $_REQUEST['rating'];
                $moreRatings = $_REQUEST['moreRatings'];

                // instanciando objeto de clase Restaurante
                $nuevoRestaurante = new Restaurante($nombre, $tipoCocina);

                // añadiendo un rating
                $nuevoRestaurante->addRating($rating);

                // añadiendo varios ratings
                $nuevoRestaurante->addVariousRatings($moreRatings);

                // mostrando información del objecto por pantalla
                echo $nuevoRestaurante->toString();

            ?>
        </div>
    </div>

</body>
</html>