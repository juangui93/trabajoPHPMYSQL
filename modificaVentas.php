<meta charset="utf-8">
<?php

	include ("conectar.php");

	if (isset($_POST['btnModificar'])) {


		$con = conecta(); 

		$codigoVenta = $_POST['txtId']; 
		$fechaVenta = $_POST['txtFecha'];
		$doc = $_POST['txtDocumento'];
		$idProducto = $_POST['txtIdProducto'];  

		echo ("Código de venta: $codigoVenta <br><br>"); 
		echo ("Fecha de venta: $fechaVenta <br><br>"); 
		echo ("Documento del cliente: $doc <br><br>"); 
		echo ("Código del Producto: $idProducto <br><br>"); 

		$modificar = "UPDATE ventas SET fechaVenta='$fechaVenta',documento='$doc',productoID='$idProducto' WHERE ventaID = $codigoVenta"; 
		$ejecutar = mysqli_query($con, $modificar);

		if($ejecutar){

			echo '<script> alert ("Registro modificado");
			location.href = "modificarVenta.php"
			</script>';
		}
		else
		{
			echo '<script> alert ("Error en la modificación.");
			location.href = "modificarVenta.php"
			</script>';
		}
	}

	else
	{
		echo '<script> alert ("¿Se está embobando? Ya nos dimos cuenta que no ingresó datos.");
			location.href = "modificarVenta.php"
			</script>';
	}
?>