<?php
    session_start();
    session_destroy();

    header('location: index.php'); //revisar qué fichero voy a poner, porque no creo que sea este
?>
