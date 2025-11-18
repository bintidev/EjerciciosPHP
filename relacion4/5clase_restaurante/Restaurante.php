<?php

class Restaurante {
/* ESTO HASTA VERSION 8

    // ATRIBUTOS DE OBJETO
    public string $nombre;
    // se puede declarar como tipo enum (se vera mas adelante)
    public string $tipoCocina;
    /*alternativa: array asociativo -> cuanto se ha dado por
    cada puntuacion (ejemplo: 1->2, 2->4)*/
    /*puede interesar no declarar el tipo de dato*/
    //public array $ratings;

    // CONSTRUCTOR
    // METODO MAS FLEXIBLE
    /*se podria pasar el parametro rating e inicializarlo vacio por defecto
    a no ser que se pase un array de ratings explicitamente. entonces, no se
    inicializaria el atributo ratings*/
    /*function __construct(string $nombre, string $tipoCocina, array $ratings = []) {

        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = $ratings; // esta linea no seria necesaria aplicando
                            // el metodo flexible

    }*/

    // PROMOCION DE PROPIEDADES
    function __construct
    (
        public string $nombre,
        public string $tipoCocina,
        public array $ratings = []
    ) {}

    // MÉTODOS
    // toString
    function toString() {
        return "Nombre del restaurante: " . $this->nombre .
            "<br>Tipo de cocina: " . $this->tipoCocina .
            "<br>Cantidad de valoraciones: " . Restaurante::getTotalRatings() .
            "<br>Puntuación media de los clientes: " . Restaurante::avgRating();
            // con el operador '::' se accede a las funciones
            // estáticas y aquellas llamadas dentro de la propia clase
    }

    // obtiene el numero de ratings
    function getTotalRatings() {
        return sizeof($this->ratings);
    }

    // añadir un rating
    function addRating($r) {
        array_push($this->ratings, $r);
    }

    // añadir VARIOS ratings
    // se puede hacer con merge
    function addVariousRatings(...$r) {
        $reunitedR = join('', $r);
        $sanitizedR = explode(',', $reunitedR);

        for ($i = 0; $i < sizeof($sanitizedR); $i++) {
            array_push($this->ratings, $sanitizedR[$i]);
        }
        return $sanitizedR;
    }

    // calcula el rating medio
    function avgRating() {
        /*$sumar = 0;
        for ($i = 0; $i < sizeof($this->ratings); $i++) {
            $sumar += $this->ratings[$i];
        }*/

        return round(array_sum($this->ratings) / count($this->ratings), 0);
    }

    // destructor
    /*NO ES NECESARIO ya que cuando se deja de usar
    el programa lo destruye de forma automatica*/
    function __destruct() {
        echo "Se ha destruido el objeto"; // normalmente no se pone NADA
                                        // en el cuerpo de funcion
    }

}