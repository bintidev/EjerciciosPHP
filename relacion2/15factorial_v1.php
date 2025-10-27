<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 - Mejora Factorial v3</title>
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }

        #numeroHelp {
            visibility: hidden;
        }
    </style>
</head>
<body>

    <!--formulario-->
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form class="p-3 shadow rounded bg-secondary-subtle" action="<?php $_SERVER['PHP_SELF'] ?>"
        method="GET" id="form1">
            <h1 class="text-primary">Cálculo del Factorial</h1>
            <div class="mb-3">
                <label for="numero" class="form-label"><span style="color: red;">* </span>Introduce número entero:</label>
                <input class="form-control" name="numero" type="number" id="numero"
                placeholder="Requerido" aria-label="default input example">
                <div id="numeroHelp" class="text-danger">El número debe ser natural sin decimales</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>

    <!--validacion-->
    <script>

        document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

            event.preventDefault();

            var numero = parseInt(document.getElementById('numero').value);
            var correcto = true;

            if (Number.isNaN(numero) || typeof numero != 'number' || numero.trim() == "") {
                marcarError('numero');
                correcto = false;
            }

            if (correcto) { document.getElementById("form1").submit() };

        });

        document.getElementById('numero').addEventListener("change", function () {

            limpiarError('numero');

        });

        function marcarError(identificador) {

            document.getElementById(identificador + 'Help').style.visibility = "visible";
            document.getElementById(identificador).style.borderColor = "red";

        }

        function limpiarError(identificador) {

            document.getElementById(identificador + 'Help').style.visibility = "hidden";
            document.getElementById(identificador).style.borderColor = "#dee2e6";

        }

    </script>

    <!--calculo-->
    <div class="text-center fs-5">
        <?php

            /*
                13- Haz un script PHP que calcule el factorial de un número natural (entero y
                positivo). Haz que se muestren los cálculos que se van haciendo
            */

            $numero = intval($_GET['numero']);
            $factorial = 1;

            if ($numero < 0) {
                echo "El factorial de $numero no está definido. Debe ser un número natural";
            } else {
                for ($i = $numero; $i > 1; $i--) { // decremento desde el número dado hasta el 2 acumulando la multiplicación de los números

                    if ($i == 2) {
                        echo "$i";
                    } else {
                        echo "$i * ";
                    }

                    $factorial *= $i;
                }
            }

            echo "<br>El factorial de $numero es $factorial"

        ?>
    </div>

</body>
</html>