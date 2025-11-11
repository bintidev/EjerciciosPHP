<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Clase Rstaurante</title>
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
        <form class="p-3 shadow rounded bg-secondary-subtle" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
        method="post">
            <h1 class="text-primary">Datos de restaurante</h1>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input class="form-control" type="text" placeholder="Nombre del restaurante" aria-label="default input example"
                id="nombre" name="nombre">
                <!--<div id="idusuarioHelp" class="input-text">Obligatorio</div>-->
            </div>

            <div class="mb-3">
                <label for="tipoCocina" class="form-label">Tipo de Cocina</label>
                <input class="form-control" type="text" placeholder="Técnicas e ingredientes que les identifica" aria-label="default input example"
                id="tipoCocina" name="tipoCocina">
                <!--<div id="contrasenaHelp" class="input-text">Debe contener mínimo 1 mayúsucla, 1 minúscula, 1 caracter especial, una longitud de 8 caracteres</div>-->
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Añadir rating</label>
                <input class="form-control" type="text" placeholder="Puntuación del establecimiento, servicio, comida, etc." aria-label="default input example"
                id="rating" name="rating">
                <!--<div id="contrasenaHelp" class="input-text">Debe contener mínimo 1 mayúsucla, 1 minúscula, 1 caracter especial, una longitud de 8 caracteres</div>-->
            </div>

            <div class="mb-3">
                <label for="moreRatings" class="form-label">Añadir múltiples ratings</label>
                <input class="form-control" type="text" placeholder="Separados por coma" aria-label="default input example"
                id="moreRatings" name="moreRatings">
                <!--<div id="contrasenaHelp" class="input-text">Debe contener mínimo 1 mayúsucla, 1 minúscula, 1 caracter especial, una longitud de 8 caracteres</div>-->
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Ver Info</button>
            </div>
        </form>
    </div>

    <div class="container-fluid w-75">
    <?php

        $nombre = $_POST['nombre'];
        $tipoCocina = $_POST['tipoCocina'];
        $rating  = $_POST['rating'];
        $moreRatings = $_POST['moreRatings'];

        // conversión a array
        $sanitizedMoreRatings = preg_split('/\s\W/', $moreRatings);

        // instanciando objeto de clase Restaurante
        $nuevoRestaurante = new Restaurante($nombre, $tipoCocina);

        // añadiendo un rating
        $nuevoRestaurante->addRating($rating);

        // añadiendo varios ratings
        $nuevoRestaurante->addVariousRatings($sanitizedMoreRatings);

        // mostrando información del objecto por pantalla
        $nuevoRestaurante->toString();

    ?>
    </div>

</body>
</html>

<?php

class Restaurante {

    // ATRIBUTOS DE OBJETO
    public $nombre;
    public $tipoCocina;
    public $ratings;

    // CONSTRUCTOR
    public function __construct($nombre, $tipoCocina) {

        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = [];

    }

    // MÉTODOS
    // destructor
    function __destruct() {
        echo "Objeto eliminado";
    }

    // toString
    function toString() {
        echo "Nombre del restaurante: " . $this->nombre .
            "<br>Tipo de cocina: " . $this->tipoCocina .
            "<br>Cantidad de valoraciones: " . sizeof($this->ratings) .
            "<br>Puntuación media de los clientes: " . Restaurante::avgRating();
            // con el operador '::' se accede a las funciones
            // estáticas y aquellas llamadas dentro de la propia clase
    }

    // obtiene el numero de ratings
    function getRatings() {
        return sizeof($this->ratings);
    }

    // añadir un rating
    function addRating($r) {
        array_push($this->ratings, $r);
    }

    // añadir VARIOS ratings
    function addVariousRatings(...$r) {
        for ($i = 0; $i < sizeof($r); $i++) {
            array_push($this->ratings, $r[$i]);
        }
    }

    // calcula el rating medio
    function avgRating() {
        $sumaR = 0;
        for ($i = 0; $i < sizeof($this->ratings); $i++) {
            $sumaR += $this->ratings;
        }

        return $sumaR / sizeof($this->ratings);
    }

}