<?php

class Conjunto {

    private array $set;
    private int $maxItems;
    private int $items;

    public function __construct(int $maxItems) {
        $this->set = [];
        $this->items = 0;
        $this->maxItems = $maxItems;
    }

    public function getItems(): int {
        return $this->items;
    }

    public function toString(): string {
        
        $mostrar = '{';

        foreach ($this->set as $i) {
            $mostrar .= $i . ', ';
        }
        
        $mostrar .= '}';

        return $mostrar;

    }

    public function incluir($elemento): void {

        $coincidencias = 0;

        for ($i = 0; $i < count($this->set); $i++) { 

            if ($this->set[$i] == $elemento) {
                $coincidencias++;
            }

        }

        if ($coincidencias == 0 && (count($this->set) < $this->maxItems)) {

            array_push($this->set, $elemento);
            $this->items++;

        }

    }

    public function incluido($elemento): bool {

        $coincidencias = 0;

        for ($i = 0; $i < count($this->set); $i++) { 

            if ($this->set[$i] == $elemento) {
                $coincidencias++;
            }
            
        }

        return $coincidencias == 0 ? false : true;

    }

    public function interseccion(Conjunto $otroConjunto): array {

        return array_intersect($this->set, $otroConjunto->set);

    }

    public function union(Conjunto $otroConjunto): array {

        $union = array_merge($this->set, $otroConjunto->set);
        return array_unique($union);

    }

    public function diferencia(Conjunto $otroConjunto): array {

        return array_diff($this->set, $otroConjunto->set);

    }

    public function __destruct() {}

}