<meta charset="utf-8">
<?php

	include ("conectar.php");

	if (isset($_POST['btnRegistrar'])) {


		$con = conecta(); 

		$codigoVenta = $_POST['txtId']; 
		$fechaVenta = $_POST['txtFecha'];
		$doc = $_POST['txtDocumento'];
		$idProducto = $_POST['txtIdProducto'];  

		echo ("Código de venta: $codigoVenta <br><br>"); 
		echo ("Fecha de venta: $fechaVenta <br><br>"); 
		echo ("Documento del cliente: $doc <br><br>"); 
		echo ("Código del Producto: $idProducto <br><br>"); 


		 
		$insertar = "Insert into Ventas Values ('$codigoVenta', '$fechaVenta', '$doc', '$idProducto' ) ";
		$ejecutar = mysqli_query($con, $insertar); 

	 	if($ejecutar){

			echo '<script> alert ("Registro ingresado");
			location.href = "registrarVenta.php"
			</script>';
		}
		else
		{
			echo '<script> alert ("Error de entrada.");
			location.href = "registrarVenta.php"
			</script>';

		}
	

	}
	else
	{
		echo '<script> alert ("¿Se está embobando? Ya nos dimos cuenta que no ingresó datos.");
			location.href = "registrarVenta.php"
			</script>';
	}

?>