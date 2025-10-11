<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 1 - Hola mundo</title>
</head>
<body>
    
    <h1>Hola Mundo en PHP</h1>
    <h3 style='color: red'> Prueba en rojo</h3>
        <i>
            <?php

                /*
                   Haz un programa en PHP que muestre el mensaje “Hello world” de
                    diferentes formas:
                    ● como texto plano html
                    ● como un encabezado de nivel 2 html
                    ● como un párrafo con estilo: color, tipografía, alineación, etc.
                    ● con un salto de línea entre hello y world
                    ● añádele la información sobre la instalación php (phpversion() y phpinfo()
                    ● investiga en la siguiente dirección como mostrar la fecha y la hora del
                    sistema en el momento de la ejecución:
                    https://www.php.net/manual/es/function.date.php
                */

                $nombre = "Binta";  // las variables empieza por $ si no son fuertemente tipadas
                echo "Hola $nombre"; // una variable entre comillas dobles es sustituida por su valor
                echo '<br> Hola Mundo'; // puedo usar comillas simples
                echo '<br> Hola ', $nombre; // la variable con $ no se interpreta entre ' y '
                echo "<br> Hola ", strtoupper($nombre);
                echo "<br>Hoy es: ", date("d.m.y H:m:s");
                //echo "<br>".phpversion()."<br>".phpinfo();
                /*
                    fjsksfsdg
                    sdadfghh
                    htyjjkkhjg
                */

            ?>
        </i>
</body>
</html>