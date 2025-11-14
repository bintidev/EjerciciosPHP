<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Variables de Sesión</title>
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        #wrapper {
            height: 80vh;
        }
    </style>
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center" id="wrapper">

        <?php

            /* NOTA: se pone antes de la operación y después de la misma
            para evitar errores tras la destrucción de la sesión */
            // crea y activa las variables de sesión si no existen
            if (!isset($_SESSION['a'])) {

                $_SESSION['a'] = 0;

            }

            if (!isset($_SESSION['b'])) {

                $_SESSION['b'] = 0;

            }

        ?>

        <form class="p-3 shadow rounded bg-secondary-subtle w-25" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
        method="post">
            <h1 class="text-primary">Moficando Valores con Variables de Sesión</h1>

            <!-- **IMPORTANTE** poner la operación antes de mostrar
            las variables, sino no recoge correctamente la modificaión -->
            <?php

            // si se envía algo
            if (isset($_REQUEST['enviar'])) {

                /* incrementa o decrementa los valores de las
                distintas variables de sesión en funcion del
                valor obtenido de la seleccion del usuario*/
                switch ($_REQUEST['operacion']) {
                    case '+a':
                        $_SESSION['a']++;
                        break;

                    case '-a':
                        $_SESSION['a']--;
                        break;

                    case '+b':
                        $_SESSION['b']++;
                        break;

                    case '-b':
                        $_SESSION['b']--;
                        break;

                    // establece el valor de 'a' de nuevo a 0
                    case 'ra':
                        $_SESSION['a'] = 0;
                        break;

                    // lo mismo para 'b'
                    case 'rb':
                        $_SESSION['b'] = 0;
                        break;

                    /*desactiva ambas variables de sesión
                    y destruye la sesión*/
                    case 'ds':
                        $_SESSION['a'] = 0;
                        $_SESSION['b'] = 0;
                        session_destroy();
                        // muestra un spinner mientras se recarga la página
                        echo "<div class=' d-flex justify-content-center'>
                            <div class='spinner-border text-primary m-3'
                            role='status'>
                                <span class='visually-hidden'>Loading...</span>
                            </div>
                        </div>";
                        /*tiempo de recarga deliberado tras la
                        destrucción de la sesión*/
                        header("refresh: 10;");
                        break;
                }

            }

            // crea y activa las variables de sesión si no existen
            if (!isset($_SESSION['a'])) {

                $_SESSION['a'] = 0;

            }

            if (!isset($_SESSION['b'])) {

                $_SESSION['b'] = 0;

            }

            ?>

            <!-- Muestra el nuevo valor asignado a las variables -->
            <h4>a = <?php echo $_SESSION['a']?></h4>
            <h4>b = <?php echo $_SESSION['b']?></h4>

            <div class="mb-3">
                <select name="operacion" id="operacion" class="form-select">
                    <option value="+a">Incrementar A</option>
                    <option value="-a">Decrementar A</option>
                    <option value="+b">Incrementar B</option>
                    <option value="-b">Decrementar B</option>
                    <option value="ra">Resetear A</option>
                    <option value="rb">Resetear B</option>
                    <option value="ds">Terminar sesión</option>
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary" name="enviar">OK</button>
            </div>
        </form>
    </div>

</body>
</html>