<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 4 - Array</title>
</head>
<body>
    
    <h1>Manejo Básico de Arrays</h1>

    <?php

    /*
        En un programa PHP, declara un array constante en el que se almacenarán
        los días de la semana. Muestra por pantalla:
        ● el primer dia de la semana
        ● todos los días secuencialmente
        ● lo mismo que el anterior, pero en formato de lista numerada
    */

    // para desactivar lo warnings se puede indicar:
    //PHP es case-sensitive, es decir, cuidado con las declaracion de nombres
    //las const son en mayusculas y sin $
    //Es para evitar los warning, pero por ahora lo quitamos, error_reporting(E_ALL & ~E_WARNING);
    const SEMANA = ["lunes", "martes", "miéroles", "jueves", "viernes", "sábado", "domingo"];

    echo "El primer día de la semana es ", SEMANA [0];
    echo "<br>Una semana tiene ". count(SEMANA), " dias"; // o sizeof(), ambos calculan la longitud de un array
    echo "<br>todos los dias de la semana son: ";

    //Bucle for para recorrer el array. 
    //Declaramos la i en cero para que vaya avanzando y imprimiendo el array
    //Ponemos br delante para salto de linea
    echo "<ol>";
    for ($i=0; $i < sizeof(SEMANA); $i++) { 
        echo "<li>", SEMANA[$i], "</li>";  
    }
    echo "</ol>"
    
    ?>

</body>
</html>