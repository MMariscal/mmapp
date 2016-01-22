<?php
    // datos para la coneccion a mysql
    define('DB_SERVER','localhost');
    define('DB_NAME','NTCSerie22');
    define('DB_USER','user');
    define('DB_PASS','123456');

    $GLOBALS["mysqli"] = new mysqli (DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if ($mysqli->connect_errno){
            echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno.")".$mysqli->connect_error;
            exit();
        }else{
            echo "Conectado a la base de datos con éxito <br/>";
        }
        echo $mysqli->host_info."\n";

?>
