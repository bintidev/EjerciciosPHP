<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 6 - Declarando Clases</title>
</head>
<body>
    
    <h1>Declaración de la Clase Fruta en PHP</h1>

    <?php

        /*
            Declara en un programa PHP una clase fruta, con dos atributos: nombre y
            color, y dos funciones, set_name() y get_name(). Declara e inicializa dos
            instancias: apple y banana, inicializa los nombres y muéstralos por pantalla
        */
        class Fruta { // NOMBRE DE LA CLASE

            // POR DEFECTO
            public const NOMBRE_DEFAULT = "";
            public const COLOR_DEFAULT = "";

            // ATRIBUTOS
            private $nombre;
            private $color;

            // MÉTODOS
            // palabra reservada __construct para crear el constructor
            function __construct($nombre, $color) // constructor de clase
            {
                // acceso a los atributos de clase con [$this ->] y no con [this.] como en Java
                $this -> $nombre = $nombre;
                $this -> $color = $color;
            }

            // SETTERS Y GETTERS
            function set_nombre ($nombre) {
                $this -> $nombre = $nombre;
            }

            function set_color ($color) {
                $this -> $color = $color;
            }

            function get_nombre () {
                return $nombre;
            }

            function get_color () {
                return $color;
            }

        }

        $manzana = new Fruta('Papaya', 'naranja');
        $fresa = new Fruta('Fresa', 'rojo');

        // a los métodos se accede con el operador '->'
        $manzana -> set_nombre('Manzana');
        $manzana -> set_color('verde');

        echo $manzana -> get_nombre() . "" . $manzana -> get_color();
        echo $fresa -> get_nombre() . "" . $fresa -> get_color();

    ?>

</body>
</html>