<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 3 - Superglobales</title>
</head>
<body>
    
    
    <h1>Trabajando con Variables Superglobales</h1>

    <?php

        /*
            Investiga qué y cuales son las superglobals en php
            (https://www.php.net/manual/es/language.variables.superglobals.php), y haz
            un programa que muestre, en forma de lista no numerada, para $_SERVER:
            ‘DOCUMENT-ROOT’
            ‘PHP-SELF’
            ‘SERVER-NAME’
            'SERVER_SOFTWARE'
            'SERVER_PROTOCOL'
            'HTTP_HOST'
            'HTTP_USER_AGENT'
            'REMOTE_ADDR'
            'REMOTE_PORT'
            'SCRIPT_FILENAME'
            'REQUEST_URI'
            Prueba un volcado con var_dump($_SERVER) y también con
            print_r($_SERVER). ¿Cuál es la diferencia?
        */

        // muestra, en forma de lista no enumerada para $_SERVER los valores de las siguientes claves
        echo "<ul>";

        echo "DOCUMENT_ROOT ", $_SERVER['DOCUMENT_ROOT'], "<br>";
        echo "PHP_SELF ", $_SERVER['PHP_SELF'], "<br>";
        echo "SERVER_SOFTWARE ", $_SERVER['SERVER_SOFTWARE'], "<br>";
        echo "SERVER_PROTOCOL ", $_SERVER['SERVER_PROTOCOL'], "<br>";
        echo "HTTP_HOST ", $_SERVER['HTTP_HOST'], "<br>";
        echo "HTTP_USER_AGENT ", $_SERVER['HTTP_USER_AGENT'], "<br>";
        echo "REMOTE_ADDR ", $_SERVER['REMOTE_ADDR'], "<br>";
        echo "REMOTE_PORT ", $_SERVER['REMOTE_PORT'], "<br>";
        echo "SCRIPT_FILENAME ", $_SERVER['SCRIPT_FILENAME'], "<br>";
        echo "REQUEST_URI ", $_SERVER['REQUEST_URI'], "<br>";

        echo "</ul> <br> <hr> <br>";

        // volcados
        // var_dump() muestra información estructurada de expresiones, incluytendo el tipo y el valor
        echo var_dump($_SERVER['DOCUMENT_ROOT']), "<br>";
        echo var_dump($_SERVER['PHP_SELF']), "<br>";
        echo var_dump($_SERVER['SERVER_SOFTWARE']), "<br>";
        echo var_dump($_SERVER['SERVER_PROTOCOL']), "<br>";
        echo var_dump($_SERVER['HTTP_HOST']), "<br>";
        echo var_dump($_SERVER['HTTP_USER_AGENT']), "<br>";
        echo var_dump($_SERVER['REMOTE_ADDR']), "<br>";
        echo var_dump($_SERVER['REMOTE_PORT']), "<br>";
        echo var_dump($_SERVER['SCRIPT_FILENAME']), "<br>";
        echo var_dump($_SERVER['REQUEST_URI']), "<br>";
        
        // print_r()  muestra informaciñon de una variable de forma legible para humanos
        echo "<br> <hr> <br>";
        echo print_r($_SERVER['DOCUMENT_ROOT']), "<br>";
        echo print_r($_SERVER['PHP_SELF']), "<br>";
        echo print_r($_SERVER['SERVER_SOFTWARE']), "<br>";
        echo print_r($_SERVER['SERVER_PROTOCOL']), "<br>";
        echo print_r($_SERVER['HTTP_HOST']), "<br>";
        echo print_r($_SERVER['HTTP_USER_AGENT']), "<br>";
        echo print_r($_SERVER['REMOTE_ADDR']), "<br>";
        echo print_r($_SERVER['REMOTE_PORT']), "<br>";
        echo print_r($_SERVER['SCRIPT_FILENAME']), "<br>";
        echo print_r($_SERVER['REQUEST_URI']), "<br>";

    ?>

</body>
</html>