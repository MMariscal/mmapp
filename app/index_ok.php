<?php
	require('conexion.php');
    $mensaje = '';
    $mensaje_b = '';
    $mensaje_f = '';
	/*$query="SELECT * FROM PIEZA";

	$resultado=$mysqli->query($query);*/

    $cant_reg = 11;
    $num_pag =1;
    /* UTILIZADO PARA SOLVENTAR EL NOTICE: UNDEFINED VARIABLE */
    if (isset($_GET["pagina"]))
        $num_pag = $_GET["pagina"];

    if (!$num_pag){
        $comienzo = 0;
        $num_pag = 1;
    }else{
        $comienzo = ($num_pag-1)*$cant_reg;
    }

    $link = mysqli_connect("localhost", "user", "123456", "NTCSerie2");

    $result = mysqli_query($link, "SELECT * FROM PIEZA");
    $total_registros = mysqli_num_rows($result);

    $result = mysqli_query($link, "SELECT idPIEZA, MODELO, MEDIDAS, USO, SERIE, COLOR, APLICACION, ESTILO,                                      IMAGEN, OTROS FROM PIEZA ORDER BY idPIEZA LIMIT $comienzo, $cant_reg");
    $total_paginas = ceil($total_registros/$cant_reg);

    while ($row = mysqli_fetch_array($result)){
        $idPIEZA = $row['idPIEZA'];
        $modelo =$row['MODELO'];
        $medidas =$row['MEDIDAS'];
        $uso =$row['USO'];
        $serie =$row['SERIE'];
        $color =$row['COLOR'];
        $aplicacion =$row['APLICACION'];
        $estilo =$row['ESTILO'];
        $imagen =$row['IMAGEN'];
        $otros =$row['OTROS'];

        $mensaje .='
            <ul>
                <li><a class="active" style="width:50px">'.$idPIEZA.'</a></li>
                <li><a href="#" style="width:250px">'.$modelo.'</a></li>
                <li><a href="#" style="width:75px">'.$medidas.'</a></li>
                <li><a href="#" style="width:125px">'.$uso.'</a></li>
                <li><a href="#" style="width:100px">'.$serie.'</a></li>
                <li><a href="#" style="width:150px">'.$color.'</a></li>
                <li><a href="#" style="width:234px">'.$aplicacion.'</a></li>
                <li><a href="#" style="width:100px">'.$estilo.'</a></li>
                <li><a href="#" style="width:250px">'.$imagen.'</a></li>
                <li><a href="#" style="width:48px">'.$otros.'</a></li>
                <li><a href="modificar.php?idPIEZA='.$idPIEZA.'" style="width:55px">Modificar</a></li>
                <li><a href="eliminar.php?idPIEZA='.$idPIEZA.'" style="width:55px">Eliminar</a></li>
            </ul>
        ';
    }

    if(($num_pag-1)>0)
        $mensaje_b .= "<a href='indexc.php?pagina=".($num_pag-1)."'>< Anterior</a>";

    for ($i=1; $i<=$total_paginas; $i++){
        if ($num_pag == $i){
            $mensaje_b .= "<p>Página ".$num_pag;
        }else{
            $mensaje_b .= "<a href='indexc.php?pagina=$i'> $i </a>";
        }
    }

    if (($num_pag+1)<=$total_paginas)
        $mensaje_b .= "<a href='indexc.php?pagina=".($num_pag+1)."'>Siguiente ></a>";

    $mensaje_f .='
        <br>
        <p>Número de páginas     = '.$num_pag.'</p>
        <p>Total páginas         = '.$total_paginas.'</p>
        <p>Total registros       = '.$total_registros.'
        <p>Comienzo              = '.$comienzo.'</p>
        <p>Cantidad de registros = '.$cant_reg.'</p><br>
        ';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Formulario NATUCER</title>
		<link rel="stylesheet" href="style.css" >
	</head>
	<body>

		<center><h1>LISTADO PIEZAS NATUCER</h1></center>

		<form method="post" action="nuevo.php">
            <button type="submit">Nuevo Registro</button>
        </form>
		<p></p>

        <ul>
            <li><a class="active" style="width:50px">idPIEZA</a></li>
            <li><a href="#" style="width:250px">MODELO</a></li>
            <li><a href="#" style="width:75px">MEDIDAS</a></li>
            <li><a href="#"style="width:125px">USO</a></li>
            <li><a href="#"style="width:100px">SERIE</a></li>
            <li><a href="#"style="width:150px">COLOR</a></li>
            <li><a href="#"style="width:234px">APLICACION</a></li>
            <li><a href="#"style="width:100px">ESTILO</a></li>
            <li><a href="#"style="width:250px">IMAGEN</a></li>
            <li><a href="#"style="width:48px">OTROS</a></li>
            <li><a href="#"style="width:55px">MOD.</a></li>
            <li><a href="#"style="width:55px">DEL.</a></li>
        </ul>
        <div id="paginacion">
            <?php
                echo $mensaje;
                echo $mensaje_b;
            ?>
        </div>
        <div id="mensajes">
            <?php
                echo $mensaje_f;
            ?>
        </div>

    </body>
</html>
