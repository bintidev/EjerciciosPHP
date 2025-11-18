<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 - Clase Genérica</title>
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
</head>
<body>
    
    <?php

        /*la finalidad de este codigo es apreciar como
        se puede convertir cualquier ARRAY ASOCIATIVO en
        un objeto y como ambos, a su vez, se pueden convertir
        en un , y viceversa.
        puede interesar, por ejemplo, para items de un carrito
        de la compra*/

        // creación de objeto genérico
        $miModulo = new stdClass();
        var_dump($miModulo);

        // definiendo clase sobre la marcha
        $miModulo->nombre = "Desarrollo Web Entorno Servidor";
        $miModulo->acronimo = "DWES";
        $miModulo->curso = 2;

        echo "<p>Esto es lo que tiene ahora miModulo:</p>";
        var_dump($miModulo);

        // convierte explicitamente el objeto en array
        $miModuloArray = (array) $miModulo;
        echo "<p>Esto es lo que tiene ahora miModuloArray:</p>";
        var_dump($miModuloArray);

        // serializar miModuloArray (lo convierte a tipo string)
        $miModuloArraySerializado = serialize($miModuloArray);
        echo "<p>Esto es lo que tiene ahora miModuloArraySerializado:</p>";
        /*mantiene un formato de tal manera que cuando se revierte
        la cadena de vuelta a array/objeto, la funcion reconoce
        automaticamente el tipo de dato, su longitud (en caso de
        ser un string) y su valor*/
        var_dump($miModuloArraySerializado);

        // convierte explicitamente el array en objeto
        $miModuloObjectAgain = (object) $miModuloArray;
        echo "<p>Esto es lo que tiene ahora miModuloObjectAgain:</p>";
        var_dump($miModuloObjectAgain);

    ?>

</body>
</html>