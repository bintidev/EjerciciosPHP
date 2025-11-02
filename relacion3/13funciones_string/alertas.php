<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertas</title>
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .wrapper {
            height: 100vh;
        }
    </style>
</head>
<body class="wrapper d-flex justify-content-center align-items-center">
    
    <div class="container-fluid w-75">

        <!-- Del revés, y si es o no palindroma -->
        <div class="alert alert-info mb-3" role="alert">
            <h3>Cadena Invertida y Palíndroma</h3>
            <?php

                $cadena = $_GET['cadena'];
                $formateada = str_replace(" ", "", strtolower($cadena));
                // compara la cadena sin tener en cuenta mayúsculas/minúsculas
                // ni espacios
                $esPalindroma = ($formateada == strrev($formateada)) ? "Es una cadena palíndroma" : "No es una cadena palíndroma";

                echo "Cadena del revés: " . strrev($cadena) . "<br>";
                echo $esPalindroma;

            ?>
        </div>

        <!-- Palabras al revés -->
        <div class="alert alert-info mb-3" role="alert">
            <h3>Palabras del Revés</h3>
            <?php

                $cadena = $_GET['cadena'];
                // conversion a array para poder operar individualmente
                // sobre cada palabra
                $cadenaArr = preg_split("/[\s,.]+/", $cadena);
                
                // invierte cada palabra de la cadena
                for ($i = 0; $i < sizeof($cadenaArr); $i++) { 
                    
                    // modifica la palabra con su valor invertido
                    $cadenaArr[$i] = strrev($cadenaArr[$i]);

                }

                // reune los elementos del array de nuevo en una cadena
                // separada por espacios en blanco y la muestra
                echo "Cadena con las palabras del revés: " . join(" ", $cadenaArr);

            ?>
        </div>

        <!-- Minúsculas y mayúsculas -->
        <div class="alert alert-info mb-3" role="alert">
            <h3>Minúsculas y Mayúsculas</h3>
            <?php

                $cadena = $_GET['cadena'];

                echo "Cadena en mayúsuculas: " . strtoupper($cadena) . "<br>";
                echo "Cadena en minúsculas: " . strtolower($cadena);

            ?>
        </div>

        <!-- Conteo de caracteres y palabras -->
        <div class="alert alert-info mb-3" role="alert">
            <h3>Conteo de Caracteres y Palabras</h3>
            <?php

                $cadena = $_GET['cadena'];
                $cadenaArr = preg_split("/[\s,.]+/", $cadena);

                echo "Cantidad de caracteres: " . strlen($cadena) . "<br>";
                echo "Cantidad de palabras: " . count($cadenaArr);

            ?>
        </div>

        <!-- Resultado de aplicar tipos de encriptacion de datos -->
        <div class="alert alert-info mb-3" role="alert">
            <h3>Aplicando Distintas Encriptaciones</h3>
            <?php

                $cadena = $_GET['cadena'];

                // toma la cadena a encriptar y el 'salt', una pieza de informacion
                // al azar que se añade a la contraseña antes de hacer el hash sobre ella
                // en este caso, 2 caracteres
                // usa algortimos DES, Blowfish, o MD5
                echo "Aplicando encriptación <code>crypt()</code>: " . crypt($cadena, 'st') . "<br>";
                // calcula el hash MD5  de una cadena
                // usa algoritmos como RSA Data Security, Inc. MD5 Message-Digest
                echo "Aplicando encriptación <code>md5()</code>: " . md5($cadena) . "<br>";
                // calcula el hash SHA-1 de una cadena
                // usa el algoritmo US Secure Hash 1
                echo "Aplicando encriptación <code>sha1()</code>: " . sha1($cadena);

            ?>
        </div>

    </div>

</body>
</html>