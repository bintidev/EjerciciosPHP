<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Fecha y Hora</title>
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid w-50">

        <h1 class="fs-1">Funciones de Fecha y Hora</h1>

        <?php

            // devuelve el dia de la semana pasado por parametro en español
            function diaES($d) {

                $diaEspanyol = '';
                $dia = [

                    'Monday' => 'Lunes',
                    'Tuesday' => 'Martes',
                    'Wednesday' => 'Miércoles',
                    'Thursday' => 'Jueves',
                    'Friday' => 'Viernes',
                    'Saturday' => 'Sábado',
                    'Sunday' => 'Domingo'

                ];

                foreach ($dia as $dEN => $dES) {

                    if ($d == $dEN) {
                        $diaEspanyol = $dES;
                    }

                }

                return $diaEspanyol;

            }

            // devuelve el mes del año pasado por parametro en español
            function mesES($d) {

                $mesEspanyol = '';
                $mes = [

                    'January' => 'Enero',
                    'February' => 'Febrero',
                    'March' => 'Marzo',
                    'April' => 'Abril',
                    'May' => 'Mayo',
                    'June' => 'Junio',
                    'July' => 'Julio',
                    'August' => 'Agosto',
                    'September' => 'Septiembre',
                    'October' => 'Octubre',
                    'November' => 'Noviembre',
                    'December' => 'Diciembre'

                ];

                foreach ($mes as $mEN => $mES) {

                    if ($d == $mEN) {
                        $mesEspanyol = $mES;
                    }

                }

                return $mesEspanyol;

            }

            $dia = diaES(date('d'));
            $mes = mesES(date('m'));
            $anyo = date('Y');

            $fecha = ("1-11-2025");

            $fechaFormateada1 = date($fecha, 'dd-MM-YY');

            echo $fechaFormateada1;

        ?>

    </div>

</body>
</html>