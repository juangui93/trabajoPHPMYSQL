<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>La tienda de Anacleto</title>
</head>
<body>

	<h1>Registro de Ventas</h1>

	<form method="post" action="ingresaVentas.php">

		<label>Código de la venta: </label>
		<input type="text" name="txtId"><br><br>

		<label>Fecha de venta: </label>
  		<input type="text" name="txtFecha"><br><br>

  		<label>Documento de Cliente: </label>
  		<input type="text" name="txtDocumento"><br><br>

  		<label>Código del Producto: </label>
		<input type="text" name="txtIdProducto"><br><br>

  		<input type="submit" name="btnRegistrar" value="Registrar Venta">
		
	</form>

	<br><br>

    <a href="index.php">Volver a la página principal</a>

</body>
</html>