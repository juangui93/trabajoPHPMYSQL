<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>La tienda de Anacleto</title>
</head>
<body>

	<h1>Registrar detalles de Venta</h1>

	<form method="post" action="ingresaDetalle.php">

		<label>Código del detalle:  </label>
		<input type="text" name="txtId"><br><br>

		<label>Código de la venta:  </label>
		<input type="text" name="txtIdVenta"><br><br>

		<label>Fecha de venta: </label>
  		<input type="text" name="txtFecha"><br><br>

  		<label>Documento de Cliente: </label>
  		<input type="text" name="txtDocumento"><br><br>

  		<label>Nombre del Cliente: </label>
  		<input type="text" name="txtnombreCliente"><br><br>

  		<label>Código del Producto: </label>
		  <input type="text" name="txtIdProducto"><br><br>

		  <label>Nombre del producto: </label>
  		<input type="text" name="txtnombreProducto"><br><br>

  		<label>Precio Unitario: </label>
  		<input type="text" name="txtPrecioUnitario"><br><br>

  		<label>Cantidad: </label>
  		<input type="text" name="txtCantidad"><br><br>

  		<label>Precio total: </label>
  		<input type="text" name="txtPrecioTotal"><br><br>

  		<input type="submit" name="btnRegistrar" value="Registrar Detalle">
		
	</form>


  <br><br>

  <a href="index.php">Volver a la página principal</a>

</body>
</html>