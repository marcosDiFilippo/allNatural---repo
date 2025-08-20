<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/fuentes.css">
</head>
<body>
    <main>
        <section>
            <form id = "login" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <fieldset id = "inputsLogin">
                    <legend>
                        Inicio Sesion
                    </legend>
                    <div class="boxInput">
                        <label class="labels" for="mail">Email:</label>
                        <input class="inputs" type="email" name="mail" id="mail" placeholder = "Escribe tu mail">
                    </div>

                    <?php
                        validarMail();
                    ?>

                    <div class="boxInput">
                        <label class="labels" for="password">Contrasenia:</label>
                        <input class="inputs" type="password" name="password" id="password" placeholder = "Escribe tu contrasenia">
                    </div>
                    
                    <?php
                        validarPassword();
                    ?>

                    <div>
                        <a id="olvidoContrasenia" href="">Olvidaste tu contrasenia?</a>
                    </div>
                    <div id = "cajaEnvio">
                        <a id = "crearCuenta" href="">Crear Cuenta</a>
                        <input id = "enviar" type="submit" value="Enviar">
                    </div>
                </fieldset>
            </form>


        </section>
    </main>

    <script src="./script/script.js"></script>
</body>
</html>

<?php
    function validarMail () {
        $mail;

        //si el metodo pedido por el servidor es igual a post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mail = htmlspecialchars($_POST["mail"]);
        }
        if (empty($mail)) {
            print "<p class='campoObligatorio'>El campo es obligatorio</p>";
        }
    }

    function validarPassword() {
        $password;

        //si el metodo pedido por el servidor es igual a post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $password = htmlspecialchars($_POST["password"]);
        }
        if (empty($password)) {
            print "<p class='campoObligatorio'>El campo es obligatorio</p>";
        }
    }
?>