<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Formulario de 2 Números</title>
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
        <form class="p-3 shadow rounded">
            <h1>Estilizando un Formulario Molde</h1>
            <div class="mb-3">
                <label for="numero1" class="form-label">Introduce número entero:</label>
                <input class="form-control" type="number" placeholder="Como mucho 2 cifras decimales" aria-label="default input example">
            </div>

            <div class="mb-3">
                <label for="numero2" class="form-label">Introduce otro número entero:</label>
                <input class="form-control" type="number" placeholder="Como mucho 2 cifras decimales" aria-label="default input example">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>