  <!DOCTYPE html>
  <html>
  <meta charset="utf-8">
  <head>
  	<title>La tienda de Anacleto</title>
  </head>
  <body>

  	<h1>Registro de Clientes</h1>

  	<form method="post" action="ingresaClientes.php" >
  		<label>Documento: </label>
  		<input type="text" name="txtDocumento"><br><br>

  		<label>Nombres: </label>
  		<input type="text" name="txtNombre"><br><br>

  		<label>Apellidos: </label>
  		<input type="text" name="txtApellidos"><br><br>


  		<label>Dirección: </label>
  		<input type="text" name="txtDireccion"><br><br>

  		<label>Teléfono: </label>
  		<input type="text" name="txtTelefono"><br><br>

  		<label>Deuda: </label>
  		<input type="text" name="txtDeuda"><br><br>

  		<input type="submit" name="btnRegistrar" value="Registrar Cliente">

  	</form>

    <br><br>

    <a href="index.php">Volver a la página principal</a>
  
  </body>
  </html>