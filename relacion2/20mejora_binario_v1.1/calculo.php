<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <title>Calculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        p {
            height: 80vh;
        }
    </style>
</head>
<body>

    <p class="d-flex justify-content-center align-items-center text-primary fs-4">
    <?php

        // Haz un script PHP en el que conviertas en binario un número natural decimal
        $conversion = $_GET['base']; // recoge, automaticamente, el valor seleecionado del campo select
        $numero = $_GET['numero'];
        $resultado = "";
        
        // base dependiendo del valor de la opcion
        // seleccionado
        $base = match ($conversion) {
            'bin' => 2,
            'oct' => 8,
            'hex' => 16,
            'default' => ''
        };

        echo "El número original es $numero y la base a la que pasarlo $base";
        echo "<br>El resultado es: ";

        while ($numero >= $base) {
            //Intercepto el resto antes de concatenarlo o mostrarlo
            // y si es mayor que 9 lo cambio por la letra correspondiente
            $digito = $numero % $base;

            if($digito > 9) {

                switch($digito) {

                    case 10 : $caracter ='A';
                    break;

                    case 11 : $caracter ='B';
                    break;

                    case 12 : $caracter ='C';
                    break;

                    case 13 : $caracter ='D';
                    break;

                    case 14 : $caracter ='E';
                    break;

                    case 15 : $caracter ='F';
                    break;

                }

            }  else {
                $caracter = (string) $digito;
            } 

                $resultado = (string) $caracter . $resultado; //Casting eplicito
                //casting explicito de un numero entero en un dato tipo string
                $cociente = intval($numero / $base);

                $numero = $cociente;
            }

        echo (string) $numero . $resultado;

    ?>
    </p>
    
</body>
</html>