<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 4 - Formateando Listas Numeradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: 80vh;
        }
    </style>
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <div class="container">
            <h1>Formateo de Listas Numeradas</h1>

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
            echo "<br><p class='fs-5 mt-5'>Todos los dias de la semana son:</p>";

            //Bucle for para recorrer el array. 
            //Declaramos la i en cero para que vaya avanzando y imprimiendo el array
            //Ponemos br delante para salto de linea
            echo "<ol class='list-group list-group-numbered list-group-flush my-3'>";
            for ($i=0; $i < sizeof(SEMANA); $i++) { 
                echo "<li class='list-group-item list-group-item-primary'>", SEMANA[$i], "</li>";  
            }
            echo "</ol>"
            
            ?>
        </div>
    </div>

</body>
</html>