<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>metodo seguro</h1>
        <section>
                <form id = "inputsLogin" action="<?php print $_SERVER['PHP_SELF']?>" method="post"> 

                    <label for="mail">Email:</label>
                    <input type="email" name="mail" id="mail" placeholder = "Escribe tu mail">

                    <label for="password">Contrasenia:</label>
                    <input type="password" name="password" id="password" placeholder = "Escribe tu contrasenia">

                    <div id = "cajaEnvio">
                        <a id = "crearCuenta" href="">Crear Cuenta</a>
                        <input id = "enviar" type="submit" value="Enviar">
                    </div>
                </form>

                <?php
                
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $mail = htmlspecialchars($_REQUEST["mail"]); // funcion que limita el uso de caracteres que utilizan las injections SQL
                    }
                    if (empty($mail)) {
                        echo "<p>El campo es obligatorio</p>";
                    }
                    else {
                        echo "<h2>Hola $mail</h2>";
                    }
                ?>

        </section>
    </main>
</body>
</html>