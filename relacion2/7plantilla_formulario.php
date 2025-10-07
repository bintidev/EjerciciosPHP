<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Formulario de 2 Números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="wrapper">
    
    <h1>Estilizando un Formulario Molde</h1>

    <div class="container">
        <form class="row row-cols-lg-auto g-3 align-items-center">
            <div class="col-12">
                <label for="numero1" class="form-label">Número 1</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input type="text" class="form-control" id="numero1" placeholder="Escriba un número">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="numero2" class="form-label">Número 2</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input type="text" class="form-control" id="numero2" placeholder="Escriba otro número">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>