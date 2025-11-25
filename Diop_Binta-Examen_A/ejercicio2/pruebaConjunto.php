<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <div>
    <?php

        // metodo para imprimir el resultado de las funciones
        // que retornan un array
        function mostrarSet(array $arr): void {
            foreach ($arr as $a) {
                echo $a . ', ';
            }
        }

        include 'Conjunto.php';
        $conjA = new Conjunto(5);

        $conjA->incluir(10);
        $conjA->incluir(4);
        $conjA->incluir(51);
        $conjA->incluir(9);
        $conjA->incluir(24);

        echo '<h2 class="text-primary">Cantidad de elementos existentes en el set</h2>';
        echo $conjA->getItems();

        echo '<h2 class="text-primary">Visualizar elementos del set</h2>';
        echo $conjA->toString();

        echo '<h2 class="text-primary">Ver si un elemento existe en el set</h2>';
        echo 'Existe el elemento 6: ' . $conjA->incluido(6) . '<br>';
        echo 'Existe el elemento 4: ' . $conjA->incluido(4) . '<br>';
        echo 'Existe el elemento -7: ' . $conjA->incluido(-7);

        $conjB = new Conjunto(7);

        $conjB->incluir(-7);
        $conjB->incluir(4);
        $conjB->incluir(24);
        $conjB->incluir(-2);
        $conjB->incluir(-49);
        $conjB->incluir(10);
        $conjB->incluir(3);

        echo '<h2 class="text-primary">Elementos en común</h2>';
        $interseccion = $conjA->interseccion($conjB);
        mostrarSet($interseccion);

        echo '<h2 class="text-primary">Sets unificados sin repetición de elementos</h2>';
        $union = $conjA->union($conjB);
        mostrarSet($union);

        echo '<h2 class="text-primary">Elementos no existentes en un set pero sí en el otro</h2>';
        $diferencia = $conjA->diferencia($conjB);
        mostrarSet($diferencia);

    ?>
    </div>

</body>
</html>