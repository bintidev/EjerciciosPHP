<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 - Funciones Arrow</title>
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }

        #radioHelp {
            visibility: hidden;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form class="p-3 shadow rounded bg-secondary-subtle">
            <h1 class="text-primary">Cálculos a Partir de Radio</h1>
            <div class="mb-3">
                <label for="radio" class="form-label"><span class="text-danger">* </span>Introduce el radio:</label>
                <input class="form-control" type="number" placeholder="Requerido"
                id="radio" name="radio" aria-label="default input example">
                <div class="text-danger" id="radioHelp">El radio debe ser un número positivo real</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
    </div>

    <script>

        document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

            // evita que el botón submit envíe el formulario como haría normalmente
            event.preventDefault();

            var radio = document.getElementById('radio').value;

            // hipotéticamente todos los valores de los campos son válidos
            var correcto = true;

            if (is_nan(radio)) {
                marcarError('radio');
                correcto = false;
            }

            // si han ido bien todas las comprobaciones se activa
            // de nuveo el evento submit y se envía todo
            if (correcto) document.getElementById("form1").submit();

        }

        );

        document.getElementById("radio").addEventListener("change", function () {

            limpiarError('radio');

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

    <div class="container-fluid w-75">

        <p class="text-center fs-4">

            <?php

                $radio = $_GET['radio'];

                // calcula la longitud de una circunferencia
                $circunferencia = fn ($r) => 2 * M_PI * $r;
                // calcula el área de un circulo
                $circulo = fn ($r) => M_PI * pow($r, 2);
                // calcula el volumen de una esfera
                $esfera = fn ($r) => (4 / 3) * M_PI * pow($r, 3);

                echo "Longitud de la circunferencia: ". round($circunferencia($radio), 2) . " cm<br>";
                echo "Área del círculo: " . round($circulo($radio), 2) . " cm2<br>";
                echo "Volumen de la esfera: " . round($esfera($radio), 2) . " cm3<br>";
                
                switch ($variable) {
                    case 'value':
                        # code...
                        break;
                    
                    default:
                        # code...
                        break;
                }

                match (expression) {
                     => ,
                     => ,
                }

            ?>

        </p>

    </div>

</body>
</html>