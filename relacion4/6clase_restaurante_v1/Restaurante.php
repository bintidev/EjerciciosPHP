<?php

class Restaurante {

    // ATRIBUTOS DE OBJETO
    private $nombre;
    private $tipoCocina;
    private $ratings;

    // ATRIBUTO DE CLASE
    public static $numeroRest;

    // CONSTRUCTOR
    function __construct($nombre, $tipoCocina) {

        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = [];
        Restaurante::$numeroRest++;

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

        for ($i = 0; $i < sizeof($this->ratings); $i++) {
            if ($i == sizeof($this->ratings) - 1) {
                $resultado .= $this->ratings[$i];
            } else {
                $resultado .= $this->ratings[$i] . ", ";
            }
        }

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
        $sumar = 0;
        for ($i = 0; $i < sizeof($this->ratings); $i++) {
            $sumar += $this->ratings[$i];
        }

        return round($sumar / sizeof($this->ratings), 2);
    }

    // destructor
    function __destruct() {
        echo "Se ha destruido el objeto";
    }

}