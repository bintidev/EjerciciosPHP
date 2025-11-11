<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../../assets/img/playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid w-75">

        <?php

            // devuelve un booleano determinando si tanto el usuario
            // como la contraseña introducidos por el usuario son correctos
            function comprobarAcceso($id, $psswd) {
                define ("USUARIO_CORRECTO", "Yor Briar");
                define ("PSSWD_CORRECTA", "EdenGarden");

                return ($id == USUARIO_CORRECTO && $psswd == PSSWD_CORRECTA);
            }

            $idusuario = $_POST['idusuario'];
            $contrasena = $_POST['contrasena'];

            // si el usuario es conocido se activa una cookie forever
            // activada al recargar o al ir a otra de este sitio
            if (comprobarAcceso($idusuario, $contrasena)) {

                // activa una cookie con el nombre 'usuario'
                // que almacena el identificador de usuario
                setcookie("usuario", $idusuario);

                // comprueba que está activada dicha cookie
                if (isset($_COOKIE['usuario'])) {
                    echo "Te llamas " . $_COOKIE['usuario'];
                }

                // activa una variable de sesión y está activa hasta que se
                // destruya y se queda almacenada en el SERVIDOR
                $_SESSION['usuario'] = $idusuario;

                echo "<br>Tú eres " . $_SESSION['usuario'] . " según tu variable de sesión";

            } else {
                // si se desconoce al usuario se le envia de vuelta
                // a la pagina de login y se activa una cookie de error
                $_SESSION['error_login'] = true;
                header ("Location: login.php");
            }

        ?>

    </div>

</body>
</html>