<meta charset="utf-8">
<?php

	include ("conectar.php");

	if(isset($_POST['btnModificar'])){

		$con = conecta(); 

		$codigoDetalle = $_POST['txtId']; 
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

		$modificar = "UPDATE detallev SET ventaID='$codigoVenta',fechaVenta='$fechaVenta',documento='$docCliente', nombreCliente='$nomCli',productoID='$codigoProducto',nombreProducto='$NomProd',precioUnitario='$precioUni',cantidad='$cantidad',precioTotal ='$precioTotal' WHERE detalleID = '$codigoDetalle'"; 

		$ejecutar = mysqli_query($con, $modificar); 

		if($ejecutar){

			echo '<script> alert ("Registro ingresado");
			location.href = "modificarDetalle.php"
			</script>';
		}
		else
		{
			echo '<script> alert ("Error de entrada.");
			location.href = "modificarDetalle.php"
			</script>';

		}  
	}

	else
	{
		echo '<script> alert ("¿Se está embobando? Ya nos dimos cuenta que no ingresó datos.");
			location.href = "modificarDetalle.php"
			</script>';
	}


?>