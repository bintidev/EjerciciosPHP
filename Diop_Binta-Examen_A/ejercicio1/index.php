<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <form class="p-3 shadow rounded bg-secondary-subtle">
            <h1 class="text-primary">Cálculo de distancia Hamming</h1>
            <div class="mb-3">
                <label for="stringA" class="form-label">Cadena 1:</label>
                <input class="form-control" type="text" id="stringA" name="stringA">
            </div>

            <div class="mb-3">
                <label for="stringB" class="form-label">Cadena 2:</label>
                <input class="form-control" type="text" id="stringB" name="stringB">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
            </div>
        </form>
    </div>

</body>
</html>