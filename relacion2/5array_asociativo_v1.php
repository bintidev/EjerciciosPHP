<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/playamar.png" type="image/x-icon">
    <title>Ejercicio 5 - Array Asociativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        #wrapper {
            height: auto;
        }
    </style>
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center" id="wrapper">
        <div class="container my-3">
            <h1 class="bg-success text-white p-3">Trabajando con Array Asociativo</h1>

            <?php

            /*
                Crea un array asociativo constante, en el que utilices como clave el día de la
                semana, y como valor, la temperatura máxima de ese día en formato real. A
                continuación, muestra:
                ● la temperatura del primer dia de la semana
                ● la temperatura de todos los días, secuencialmente
                ● lo mismo que el anterior, pero en formato de lista numerada
            */

                $dia_temperatura = [
                                "lunes" => 27,
                                "martes" => 30,
                                "miércoles" => 15, 
                                "jueves" => 23,
                                "viernes" => 18,
                                "sábado" => 24,
                                "domingo" => 8
                ];

                // la temperatura del primer dia de la semana
                echo "Temperatura del primer día de la semana: ", $dia_temperatura["lunes"], "ºC <br><br>";

                // la temperatura de todos los días, secuencialmente
                foreach ($dia_temperatura as $dia => $temperatura) {
                    echo "$dia: $temperatura ºC || ";
                }


                // lo mismo que el anterior, pero en formato de lista numerada
                echo "<ol class='list-group list-group-flush my-3'>";
                
                foreach ($dia_temperatura as $dia => $temperatura) {
                    echo "<li class='list-group-item list-group-item-secondary'>$dia: $temperatura ºC</li>";
                };

                echo "</ol>";


                // formato tabla
                echo "<table class='table table-striped table-hover'>
                        <thead class='table-success border-bottom-10'>
                            <th>Día</th>
                            <th>Temperatura</th>
                        </thead>";

                foreach ($dia_temperatura as $dia => $temperatura) {
                    echo "<tr>";
                        echo "<td>$dia</td> <td>$temperatura ºC</td>";
                    echo "</tr>";
                };

                echo "</table>";

            ?>

            <!-- components de prueba -->
            <!-- toggle -->
            <p>
                <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    Toggle horizontal
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                    <div class="card card-body" style="width: 300px;">
                        Contenido oculto por defecto y visible al interactuar con el botón
                    </div>
                </div>
            </div>
            
            <!-- progress bar -->
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 75%"></div>
            </div>

            <!-- spinner -->
            <div class="text-center">
                <div class="spinner-border text-success my-3" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>
</html>