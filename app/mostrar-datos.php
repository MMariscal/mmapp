<?php

    // Llamada al fichero connection.php, que es el que contiene los datos de conexión
    require('connection.php');

    // Instanciamos el objeto $mysqli con los datos que nos vienen de connection.php
    $mysqli = new mysqli($host, $user, $pwd, $db);

    $result = $mysqli->query("SELECT * FROM PIEZA");
    $row = $result->fetch_assoc();
    echo $row['MODELO'];




?>
