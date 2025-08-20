<?php
    $mail;
    $password;

    if(isset($_POST["mail"]) and isset($_POST["password"])) {
        $mail = $_POST["mail"];
        echo "<h1> Bienvenido $mail </h1>";
    }
?>