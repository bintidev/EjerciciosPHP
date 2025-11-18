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
        un objeto.
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

        // convierte explicitamente el array en objeto
        $miModuloObjectAgain = (object) $miModuloArray;
        echo "<p>Esto es lo que tiene ahora miModuloObjectAgain:</p>";
        var_dump($miModuloObjectAgain);

    ?>

</body>
</html>