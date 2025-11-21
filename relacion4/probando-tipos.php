<?php

// guia para ejercicio 15 relacion4

declare(strict_types = 1); // declaracion de tipos estrictos

$mensaje = "hola";
$mensaje = 34.5;

function swap(int &$a, int &$b): void { // los parametros van a cambiar de valor
                                        // cabecera TIPADA
    $media = $a;
    $a = $b;
    $b = $media;

}

$uno = 3.14;
$dos = 2.18;

// deberia marcarlo como error, pues se pasa como parametro
// valores de tipo flotante (solo acepta enteros)
swap($uno, $dos);

/*
    *SOBRE EL TIPO NULL: lo usaremos más adelante al conectarnos con
    bases de datos. Se suele usar como valor por defecto en los
    parametros de una funcion.

    ++ Usando el comodin '?' en la cabecera de la funcion (parametros)
    se indica que la informacion que llega PUEDE O NO ser un 
    
    +++ Lo mas logico es que si el parametro puede tener un valor
    distinto al tipo string, se controle tambien que la salida tenga
    la posibilidad de no ser un string

    function saluda(?string nombre = null): string {
        if (nombre == null) {
            return "¡Hola desconocid@!";
        } else {
            return "¡Hola $nombre!";
        }
    }
*/