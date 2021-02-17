<meta charset="utf-8">
<?php

	include ("conectar.php");

	if (isset($_POST['btnRegistrar'])) {
		
		$con = conecta(); 

		$codigoDetalle = $_POST['txtID']; 
		$codigoVenta = $_POST['txtIdVenta']; 
		$fechaVenta = $_POST['txtFecha']; 
		$docCliente = $_POST['txtDocumento'];
		$nomCli = $_POST['txtnombreCliente'];
		$codigoProducto = $_POST['txtIdProducto']; 
		$NomProd = $_POST['txtnombreProducto']; 
		$precioUni = $_POST['txtPrecioUnitario']; 
		$cantidad = $_POST['txtCantidad']; 
		$precioTotal = $_POST['txtPrecioTotal']; 

		echo ("Código de detalle: $codigoDetalle <br><br>");
		echo ("Fecha de venta: $fechaVenta <br><br>");
		echo ("Documento del Cliente: $docCliente <br><br>");
		echo ("Nombre del Cliente: $nomCli <br><br>");
		echo ("Código del Producto: $codigoProducto <br><br>");
		echo ("Nombre del Producto: $NomProd <br><br>");
		echo ("Precio Unitario: $precioUni <br><br>");
		echo ("Cantidad: $cantidad <br><br>");
		echo ("Precio Total $precioTotal <br><br>");

		$insertar = "Insert into detalleV VALUES ('$codigoDetalle', '$codigoVenta', '$fechaVenta', '$docCliente', '$nomCli', '$codigoProducto', '$NomProd', '$precioUni', '$cantidad', '$precioTotal')";

		$ejecutar = mysqli_query($con, $insertar); 

		if($ejecutar){

			echo '<script> alert ("Registro ingresado");
			location.href = "registrarDetalle.php"
			</script>';
		}
		else
		{
			echo '<script> alert ("Error de entrada.");
			location.href = "registrarDetalle.php"
			</script>';

		}  

	}
	else
	{
		echo '<script> alert ("¿Se está embobando? Ya nos dimos cuenta que no ingresó datos.");
			location.href = "registrarDetalle.php"
			</script>';
	}

?>