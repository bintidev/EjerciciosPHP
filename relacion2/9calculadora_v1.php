<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 9 - Calculadora Cálculo Añadido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <!-- cuando el cáclculo está en el propio archivo
         hay que llamarlo desde action (a sí mismo) -->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" class="p-3 shadow rounded">
            <h2 class="text-danger text-center">Calculadora Básica con 2 Números y un Operador</h2>
            <div class="mb-3">
                <label for="numero1" class="form-label">Introduce número 1:</label>
                <input class="form-control" type="number" name="numero1" step="0.01" placeholder="Como mucho 2 cifras decimales" aria-label="default input example">
            </div>

            <div class="mb-3">
                <label for="operador" class="form-label">Elige un operador:</label>
                <select class="form-select" name="operador" aria-label="Default select example">
                    <option selected value="suma">+</option>
                    <option value="resta">-</option>
                    <option value="multiplicacion">*</option>
                    <option value="division">/</option>
                    <option value="resto">%</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label">Introduce número 2:</label>
                <input class="form-control" type="number" name="numero2" step="0.01" placeholder="Como mucho 2 cifras decimales" aria-label="default input example">
            </div>

            <div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>

    <p id="resultado" class="text-center fs-5">
                <?php

                /*
                    Crea un formulario de entrada para una calculadora en PHP a partir de dos
                    números enteros y un operador. Para la introducción de datos, utilizaremos dos
                    campos de texto y un select que contenga como opción diferentes operadores :
                    +,-,*,/,%. Probaremos el envío mediante los métodos GET y POST y
                    apreciaremos las diferencias
                */
                // hacemos que se ejecuten los cálcuos tras el envío si es que este ha recogido algún valor
                if (!empty($_GET)) { // botón pulsado

                    // descarga los valores (atributo "name" de cada input) en 3 variables locales
                    $numero1 = $_GET['numero1'];
                    $numero2 = $_GET['numero2'];
                    $operador = $_GET['operador'];

                }

                // usando bifurcación múltiple match
                // **NOTA: match es más limpio a nivel de sintaxis y más ligero
                $resultado = match ($operador) {

                    // si el parámetro pasado por match coincide con los casos
                    // indicados en el inicio de cada línea, se ejecutará la operación
                    // especificada
                    "suma" => $numero1 + $numero2,
                    "resta" => $numero1 - $numero2,
                    "multiplicacion" => $numero1 * $numero2,
                    "division" => $numero1 / $numero2,
                    "resto" => $numero1 % $numero2

                };

                echo "El resultado es: " . $resultado;
                    
                ?>
        </p>

</body>
</html>