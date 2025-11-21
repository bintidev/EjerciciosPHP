
<?php

class BanderaFranjas {

    // PROMOCION DE ATRIBUTOS
    // CONSTRUCTOR Y ATRIBUTOS
    function __construct
    (
        private string $orientacion,
        private array $colores,
        private string $organizacion = 'sin adscripción'
    ) {

        $this->orientacion = $orientacion;
        $this->colores = $colores;
        $this->organizacion = $organizacion;

    }

    // GETTERS
    // devuelve la orientacion de las franjas de la bandera
    function getOrientacion() : string {
        return $this->orientacion;
    }

    // devuelve los colores de las franjas de la bandera
    function getColores(): string {
        
        $resultado = '';

        foreach ($this->colores as $fr) {
            $resultado .= $fr . " ";
        }

        return $resultado;
    }

    // devuelve el pais/organizacion
    function getOrganizacion(): string {
        return $this->organizacion;
    }

    // SETTERS
    // establece un valor de orienctacion de las franjas
    function setOrientacion(string $orientacion): void {
        $this->orientacion = $orientacion;
    }

    // establece los colores para las franjas
    function setColores(array $colores): void {
        
        for ($i = 0; $i < count($colores); $i++) { 
            $this->colores[$i] = $colores[$i];
        }
    }
    
    // MÉTODOS
    /// muestra la bandera por pantalla con los colores en franja
    function mostrarBandera(): void {
        
        echo "Orientación de la bandera: " . $this->orientacion . "<br>";
        echo "Colores en franjas: ";

        foreach ($this->colores as $b) {
            echo $b . " ";
        }

        echo "<br>Organización: " . $this->organizacion;

    }

    // compara si dos banderas son identicas
    function sonIdenticas(BanderaFranjas $b): bool {

        $coincidencias = 0;

        for ($i = 0; $i < count($b->colores); $i++) { 
            
            if (in_array($this->colores[$i], $b->colores[$i])) {
                $coincidencias++;
            }

        }

        return ($this->orientacion == $b->orientacion) && ($this->colores == $b->colores) && $coincidencias != 0;

    }

    // compara dos banderas e indica si tienen las mismas
    // franjas en diferente orientacion
    function franjasDistintaOrientacion(BanderaFranjas $b): bool {

        $coincidencias = 0;

        for ($i = 0; $i < count($b->colores); $i++) { 
            
            if ($this->colores[$i] == $b->colores[$i]) {
                $coincidencias++;
            }

        }

        return $coincidencias != 0 && ($this->orientacion != $b->orientacion);

    }

    // invierte el orden de los colores
    function invertirColores(): array {

        return array_reverse($this->colores);

    }

    // invierte la orientacion de las franjas
    function invertirOrientacion(): string {

        if ($this->orientacion === 'vertical') {
            $this->orientacion = 'horizontal';
        } else {
            $this->orientacion = 'vertical';
        }

        return $this->orientacion;

    }

}