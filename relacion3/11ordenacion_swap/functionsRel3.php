
<?php

// modifica los valores de las variables, mediante su intercambio
function swap(&$n1, &$n2) {
    
    $cambio = $n1; // variable intermedia para no perder el valor de $n1
    $n1 = $n2;
    $n2 = $cambio;

}

// modifica un array pasado por parametro
function invertir(&$arr) {

    for ($i = 0; $i < sizeof($arr); $i++) { 
        
        // despues de la ultima posicion no hay mas elementos
        // evita que se produzca error por salirse del rango
        // dejando el ultimo elemento como esta
        if ($i == sizeof($arr) - 1) {
            $arr[$i];
        } else {
            swap($arr[$i], $arr[$i + 1]);
        }

    }

}