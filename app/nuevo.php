<html>
	<head>
		<title>Inserción Piezas - Natucer</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>

		<center><h1>Nuevo Item</h1></center>

		<center>
            <form name="nuevo_registro" method="POST" action="guarda_item.php">
                <fieldset>
                    <table width="50%">
                        <tr>
                            <td width="20"><b>MODELO</b></td>
                            <td width="30"><input type="text" name="modelo" size="75" /></td>
                        </tr>
                        <tr>
                            <td width="20"><b>MEDIDAS</b></td>
                            <td width="30"><input type="text" name="medidas" size="75" /></td>
                        </tr>
                        <tr>
                            <td width="20"><b>USO</b></td>
                            <td width="30"><input type="text" name="uso" size="75" /></td>
                        </tr>
                        <tr>
                            <td width="20"><b>SERIE</b></td>
                            <td width="30"><input type="text" name="serie" size="75" /></td>
                        </tr>
                        <tr>
                            <td width="20"><b>COLOR</b></td>
                            <td width="30"><input type="text" name="color" size="75" /></td>
                        </tr>
                        <tr>
                            <td width="20"><b>APLICACION</b></td>
                            <td width="30"><input type="text" name="aplicacion" size="75" /></td>
                        </tr>
                        <tr>
                            <td width="20"><b>ESTILO</b></td>
                            <td width="30"><input type="text" name="estilo" size="75" /></td>
                        </tr>
                        <tr>
                            <td width="20"><b>IMAGEN</b></td>
                            <td width="30"><input type="text" name="imagen" size="75" /></td>
                        </tr>
                        <tr>
                            <td width="20"><b>OTROS</b></td>
                            <td width="30"><input type="text" name="otros" size="75" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" name="eviar" value="Insertar">Insertar</button>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
		</center>
	</body>
</html>
