<?php

function distanciaHamming(string $stringA, string $stringB, bool $caseSensitive): int {

    $resultado = 0;

    if (strlen($stringA) == strlen($stringB)) {
        
        if ($caseSensitive) {
            
            for ($i = 0; $i < strlen($stringA); $i++) { 
                if ($stringA[$i] != $stringB[$i]) {
                    $resultado++;
                }
            }

        } else {

            for ($i = 0; $i < strlen($stringA); $i++) { 
                if (strtolower($stringA[$i]) != strtolower($stringB[$i])) {
                    $resultado++;
                }
            }

        }

    } else {

        $resultado = -1;

    }

    return $resultado;

}