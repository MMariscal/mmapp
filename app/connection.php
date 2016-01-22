<?php

    require('data-connect.php');

    $mysqli = new mysqli($host, $user, $pwd, $db);

    /* Comprobamos mediante el procedimiento connect_errno si tiene algún error de conexión, y si es así,
     *  nos lo muestra por pantalla
     */
    if ($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
        exit();
    }else{
        echo "Conectado a la base de datos con éxito <br/>";
    }
    echo $mysqli->host_info."\n";

?>
