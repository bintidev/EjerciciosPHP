<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 1 - Calculadora</title>
</head>
<body>
    
    <h1></h1>

    <h2>Calculadora Básica con 2 Número y un Operador</h2>

    <form action="" method="get">
        <div class="form">
            <label for="numero1">Introduce número 1:</label>
            <input type="text" name="numero1" id="numero1">
        </div>

        <div>
            <label for="operador">Elige un operador:</label>
            <select name="operador" id="operador"> <!--Lista desplegable-->
                <option value="suma">+</option>
                <option value="resta">-</option>
                <option value="multiplicacion">*</option>
                <option value="division">/</option>
                <option value="modulo">%</option>
            </select>
        </div>

        <div class="form">
            <label for="numero2">Introduce número 2:</label>
            <input type="text" name="numero2" id="numero2">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

    <?php

        /*
            Crea un formulario de entrada para una calculadora en PHP a partir de dos
            números enteros y un operador. Para la introducción de datos, utilizaremos dos
            campos de texto y un select que contenga como opción diferentes operadores :
            +,-,*,/,%. Probaremos el envío mediante los métodos GET y POST y
            apreciaremos las diferencias
        */

    ?>

</body>
</html>