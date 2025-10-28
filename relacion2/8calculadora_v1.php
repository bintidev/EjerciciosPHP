<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 1 - Formateo de Calculadora</title>
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
                <!-- Atributo "step" para el paso de un número a otro (en este caso
                para indicar posibilidad de número decimales) -->
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

</body>
</html>