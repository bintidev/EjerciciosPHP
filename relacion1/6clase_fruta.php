<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 6 - Clase Fruta</title>
</head>
<body>
    
    <h1>Declaración de Clases</h1>

    <?php

        /*
            Declara en un programa PHP una clase fruta, con dos atributos: nombre y
            color, y dos funciones, set_name() y get_name(). Declara e inicializa dos
            instancias: apple y banana, inicializa los nombres y muéstralos por pantalla
        */
        class Fruta {

            // ATRIBUTOS DE CLASE
            private $nombre;
            private $color;

            // MÉTODOS
            // Constructor de clase
            function __construct ($nombre, $color) { // palabra reservada "__construct__" para construir objeto de clase
            // "$this->" y no "this." como en Java
                $this->nombre = $nombre;
                $this->color = $color;
            }

            // Setters
            // almacena nombre del objeto
            function set_nombre ($nombre) {
                $this->nombre = $nombre;
            }

            // almacena color del objeto
            function set_color ($color) {
                $this->color = $color;
            }

            // Getters
            // devuelve el nombre
            function get_nombre () {
                return $this->nombre;
            }

            // devuelve el color del objeto
            function get_color () {
                return $this->color;
            }

        }

        // declaracion e instanciación de objetos
        $fresa = new Fruta("Coco", "roja");
        $papaya = new Fruta("Papaya", "marrón");

        // modificación de valores
        $fresa->set_nombre("Fresa");
        $papaya->set_color("naranja");

        // impresión de la información de cada objeto
        echo $fresa->get_nombre() . " - " . $fresa->get_color() . "<br>";
        echo $papaya->get_nombre() . " - " . $papaya->get_color();

    ?>

</body>
</html>