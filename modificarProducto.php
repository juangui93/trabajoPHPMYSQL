<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>La tienda de Anacleto</title>
</head>
<body>

	<h1>Modificar un Producto</h1>

	<form method="post" action="modificaProducto.php">

		<label>Código del Producto: </label>
		<input type="text" name="txtId"><br><br>

		<label>Nombre del Producto: </label>
  		<input type="text" name="txtNombreP"><br><br>

  		<label>Valor Unitario</label>
  		<input type="text" name="txtValor"><br><br>

  		<input type="submit" name="btnModificar" value="Modificar Producto">
		
	</form>

	<br><br>

    <a href="index.php">Volver a la página principal</a>

</body>
</html>