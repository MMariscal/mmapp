<?php
	require('conexion.php');

	$query="SELECT * FROM PIEZA";

	$resultado=$mysqli->query($query);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Formulario NATUCER</title>
		<link rel="stylesheet" href="style.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script src="node_modules/jquery/dist/jquery.js"></script>
	</head>
	<body>

		<center><h1>LISTADO PIEZAS NATUCER</h1></center>

		<a href="nuevo.php">Nuevo registro</a>
		<p></p>

        <ul>
            <li><a class="active" style="width:50px">idPIEZA</a></li>
            <li><a href="#" style="width:250px">MODELO</a></li>
            <li><a href="#"style="width:150px">USO</a></li>
            <li><a href="#"style="width:150px">SERIE</a></li>
            <li><a href="#"style="width:150px">COLOR</a></li>
            <li><a href="#"style="width:250px">APLICACION</a></li>
            <li><a href="#"style="width:100px">ESTILO</a></li>
            <li><a href="#"style="width:250px">IMAGEN</a></li>
            <li><a href="#"style="width:55px">OTROS</a></li>
            <li><a href="#"style="width:60px">MOD.</a></li>
            <li><a href="#"style="width:60px">DEL.</a></li>
        </ul>

        <?php while($row=$resultado->fetch_assoc()){ ?>
            <ul>
                <li><a class="active" style="width:50px"><?php echo $row['idPIEZA'];?></a></li>
                <li><a href="#" style="width:250px"><?php echo $row['MODELO'];?></a></li>
                <li><a href="#" style="width:150px"><?php echo $row['USO'];?></a></li>
                <li><a href="#" style="width:150px"><?php echo $row['SERIE'];?></a></li>
                <li><a href="#" style="width:150px"><?php echo $row['COLOR'];?></a></li>
                <li><a href="#" style="width:250px"><?php echo $row['APLICACION'];?></a></li>
                <li><a href="#" style="width:100px"><?php echo $row['ESTILO'];?></a></li>
                <li><a href="#" style="width:250px"><?php echo $row['IMAGEN'];?></a></li>
                <li><a href="#" style="width:55px"><?php echo $row['OTROS'];?></a></li>
                <li><a href="modificar.php?idPIEZA=<?php echo $row['idPIEZA'];?>" style="width:60px">Modificar</a></li>
                <li><a href="eliminar.php?idPIEZA=<?php echo $row['idPIEZA'];?>" style="width:60px">Eliminar</a></li>
            </ul>
        <?php } ?>
    </body>
</html>
