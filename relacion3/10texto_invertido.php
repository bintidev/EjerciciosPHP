<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 - Texto invertido</title>
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }

        #textoHelp  {
            visibility: hidden;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form class="p-3 shadow rounded bg-secondary-subtle" id="form1"
        action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
            <h1 class="text-primary">Inversor de Texto</h1>
            <div class="mb-3">
                <label for="texto" class="form-label"><span class="text-danger">* </span>Introduce una cadena de texto:</label>
                <input class="form-control" type="text" placeholder="Requerido" aria-label="default input example"
                name="texto" id="texto">
                <div id="textoHelp" class="text-danger">El campo de texto es obligatorio</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>

    <!-- VALIDACION -->
    <script>

        document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

            // evita que el formulario sea enviado al pulsar submit
            event.preventDefault();

            var texto = document.getElementById('texto').value;

            var correcto = true;

            if (texto.trim() == "") {
                marcarError('texto');
                correcto = false;
            }

            if (correcto) { document.getElementById("form1").submit(); };

        });

        document.getElementById('texto').addEventListener("change", function () {

            limpiarError('texto');

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

    <div class="container-fluid w-70">
        <p class="text-center fs-3">
        <!-- ACCION -->
        <?php

            $texto = $_GET['texto'];

            echo "Texto invertido: " . strrev($texto);

        ?>
        </p>
    </div>

</body>
</html>