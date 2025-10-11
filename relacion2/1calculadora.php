<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 1 - Calculadora</title>
</head>
<body>
        <form action="" method="get">
            <h2 >Calculadora Básica con 2 Números y un Operador</h2>

            <label for="numero1">Introduce número 1:</label>
            <input type="number" name="numero1">

            <label for="operador" >Elige un operador:</label>
            <select name="operador">
                <option selected value="suma">+</option>
                <option value="resta">-</option>
                <option value="multiplicacion">*</option>
                <option value="division">/</option>
                <option value="resto">%</option>
            </select>

            <label for="numero2">Introduce número 2:</label>
            <input type="number" name="numero2" placeholder="Como mucho 2 cifras decimales">

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>