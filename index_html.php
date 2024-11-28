<?php
// Definición de constantes o parámetros de funcionamiento del juego
define('MAX_INTENTOS', 5);
define('LIM_INF', 1);
define('LIM_SUP', 20);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>¡Adivina el número oculto!</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <div class="page">
            <h1>¡Adivina el número oculto!</h1>
            <div class="capaform">
                <form class="form" name="form_apuestanumero" 
                      action="index.php" method="POST">
                    <div class="input-seccion">
                        <label for="apuesta"><?= 'Enter a numero (' . LIM_INF . '-' . LIM_SUP . '):' ?></label> 
                        <input id="apuesta" type="number"  required name="apuesta" min="<?= LIM_INF ?>" 
                               max="<?= LIM_SUP ?>" >
                    </div>
                    <div class="submit-seccion">
                        <!-- Añado un botón para iniciar una nueva partida y un mensaje de fin de juego -->
                        <!-- <input class="submit" type="submit" value="Nuevo Juego" name="nuevo_juego" /> -->
                        <!-- <input class="submit" type="submit" formmethod="GET" value="Nuevo Juego" name="nuevo_juego"> -->
                        <a href="<?= "{$_SERVER['PHP_SELF']}?nuevo_juego" ?>"><input class="submit" value="Nuevo Juego"></a>
                    </div>
                    <p class="info-seccion">Mensaje al jugador cuando termina la partida</p> 
                    <div class="submit-seccion">
                        <!-- Añado un botón para enviar apuesta -->
                        <input class="submit" type="submit" 
                               value="Apuesta" name="envio_apuesta" /> 
                    </div>
                    <div class="info-seccion">
                        <!-- Añado una pista para el usuario -->
                        <p>Intentos restantes:</p>
                        <p>Pista</p>
                        <p>Ya has jugado con los siguientes números:</p>
                    </div>               
                </form> 
            </div>
        </div>  
    </body>
</html>
