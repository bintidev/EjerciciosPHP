<?php

class Restaurante {

    // ESTO HASTA VERSION 8

    // ATRIBUTOS DE OBJETO
    //private string $nombre;
    // se puede declarar como tipo enum (se vera mas adelante)
    //private string $tipoCocina;
    /*alternativa: array asociativo -> cuanto se ha dado por
    cada puntuacion (ejemplo: 1->2, 2->4)*/
    /*puede interesar no declarar el tipo de dato*/
    //private array $ratings;

    // ATRIBUTO DE CLASE
    private static $numeroRest = 0; // contador de la clase

    // CONSTRUCTOR
    // METODO MAS FLEXIBLE
    /*se podria pasar el parametro rating e inicializarlo vacio por defecto
    a no ser que se pase un array de ratings explicitamente. entonces, no se
    inicializaria el atributo ratings*/
    /*function __construct(string $nombre, string $tipoCocina) {

        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = []; // esta linea no seria necesaria aplicando
                            // el metodo flexible
        Restaurante::$numeroRest++;

    }*/

    // PROMOCION DE PROPIEDADES
    /*se declaran e inicializan los atributos
    en los propios parametros del constructor*/
    function __construct
    (
        public string $nombre,
        public string $tipoCocina,
        public array $ratings = []
    ) {
        //Restaurante::$numeroRest++; // solo se usa el cuerpo de la
                                    // funcion para aumentar  el cont
        Self::$numeroRest++; // se puede usar tambien la palabra reservada Self
    }

    // GETTERS
    // devuelve el nombre del restaurante
    function getNombre() {
        return $this->nombre;
    }

    // devuelve el tipo de cocina
    function getTipoCocina() {
        return $this->tipoCocina;
    }

    // devuelve los ratings
    function getRatings() {
        $resultado = '';

        foreach ($this->ratings as $ratings) {
            $resultado .= $ratings . " ";
        }
        /*for ($i = 0; $i < sizeof($this->ratings); $i++) {
            if ($i == sizeof($this->ratings) - 1) {
                $resultado .= $this->ratings[$i];
            } else {
                $resultado .= $this->ratings[$i] . ", ";
            }
        }*/

        return $resultado;
    }

    // SETTERS
    // establece el nuevo valor de nombre de restaurante
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // establece el nuevo valor de tipo de cocina
    function setTipoCocina($tipoCocina) {
        $this->tipoCocina = $tipoCocina;
    }

    // MÉTODOS
    // toString
    function toString() {
        return "Nombre del restaurante: " . $this->nombre .
            "<br>Tipo de cocina: " . $this->tipoCocina .
            "<br>Cantidad de valoraciones: " . Restaurante::getTotalRatings() .
            "<br>Puntuación media de los clientes: " . Restaurante::avgRating() .
            "<br>Restaurantes existentes hasta el momento: " . Restaurante::totalRest();
            // con el operador '::' se accede a las funciones
            // estáticas y aquellas llamadas dentro de la propia clase
    }

    // obtiene la cantidad de objetos Restaurante creados
    function totalRest() {
        return Restaurante::$numeroRest;
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
    function __destruct() {
        echo "Se ha destruido el objeto";
    }

}