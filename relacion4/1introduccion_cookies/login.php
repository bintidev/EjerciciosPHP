<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <form class="p-3 shadow rounded bg-secondary-subtle" action="<?php echo htmlspecialchars('proceso.php') ?>"
        method="post">
            <h1 class="text-primary">Formulario de Acceso</h1>
                <?php

                    // mensaje de error tras la redirección
                    if (isset($_SESSION['error_login'])) {

                        echo "<div class='alert alert-danger' role='alert'>
                                Usuario o contraseña desconocidos
                            </div>";

                    }

                    // desactiva la variable de error y, por tanto,
                    // limpia la alerta que se mostraba
                    unset($_SESSION['error_login']);

                ?>
            <div class="mb-3">
                <label for="idusuario" class="form-label">Identificador</label>
                <input class="form-control" type="text" placeholder="Requerido" aria-label="default input example"
                id="idusuario" name="idusuario">
                <div id="idusuarioHelp" class="form-text">Obligatorio</div>
            </div>

            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input class="form-control" type="password" placeholder="Longitud min. 8" aria-label="default input example"
                id="contrasena" name="contrasena">
                <div id="contrasenaHelp" class="form-text">Debe contener mínimo 1 mayúsucla, 1 minúscula, 1 caracter especial, una longitud de 8 caracteres</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>