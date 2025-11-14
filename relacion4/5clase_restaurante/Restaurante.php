<?php

class Restaurante {

    // ATRIBUTOS DE OBJETO
    public $nombre;
    public $tipoCocina;
    public $ratings;

    // CONSTRUCTOR
    function __construct($nombre, $tipoCocina) {

        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = [];

    }

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