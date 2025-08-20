<?php
    $name;
    $lastName;
    $birthDate;
    $coment;

    echo "<ul>";
    if (isset($_GET["name"])) {
        $name = $_GET["name"];

        echo "<li>$name</li>";
    }
    if (isset($_GET["lastName"])) {
    $lastName = $_GET["lastName"];

    echo "<li>$lastName</li>";
    }
    if (isset($_GET["birthDate"])) {
    $birthDate = $_GET["birthDate"];

    echo "<li>$birthDate</li>";
    }
    if (isset($_GET["coment"])) {
    $coment = $_GET["coment"];

    echo "<li>$coment</li>";
    }
    echo "</ul>";


?>