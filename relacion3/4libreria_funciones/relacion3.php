<?php

    // devuelve si un número es primo o no
    function esPrimo($n) {

        $contador = 2;
        $esPrimo = true;

        if ($n == $contador) {

            $esPrimo = true;

        } else {

            do {

                if ($n % $contador == 0) {
                    $esPrimo = false;
                } else {
                    $esPrimo = true;
                    $contador++;
                }
                

            } while ($contador < $n && $esPrimo);

        }

        return $esPrimo;

    };

    
    // muestra los número primos entre 1 y el introducido por el usuario
    function primosEntre($n) {

        for ($i=1; $i < $n; $i++) { 
            
            if (esPrimo($i)) {

                echo $i . "   ";

            }

        }

    }


    // devuelve el factorial de un número
    function factorial($n) {

        $factorial = 1;

        if ($n == 1) {

            $factorial = 1;

        } else {

            for ($i=1; $i <= $n ; $i++) { 
                
                $factorial *= $i;

            }

        }

        return $factorial;

    }


    // factorial recursivo
    function factorialRecursivo($n) {

        return $n * factorial($n - 1);
        
    }

    
    // devuelve el mínimo común divisor de dos números
    function mcdEuclides ($n1, $n2) {

        $mcd = 1;

        if ($n1 == $n2) {

            $mcd = $n1; // no se diferencian, así que no importa el valor devuelto

        } else {

            while ($n1 != $n2) {

                if ($n1 > $n2) {

                    $n1 -= $n2;

                } else {

                    $n2 -= $n1;

                }

            }

            // devuelve el valor coincidente de ambas variables
            // sea que se encuentra un MCD o no (que sería 1, en ese caso)
            $mcd = $n1; // devuelve cualquiera de los dos valores

        }

        return $mcd;

    }


    // devuelve el mínimo común divisor de dos números (recursivo)
    function mcdEuclidesRecursivo ($n1, $n2) {

        $mcd = 1;

        if ($n1 == $n2) {

            $mcd = $n1;

        }
        
        if ($n1 > $n2) {

            $mcd = mcdEuclides($n1 - $n2, $n2); // decrementamos 

        } else {

            $mcd = mcdEuclides($n1, $n2 - $n1);

        }

        return $mcd;

    }


?>