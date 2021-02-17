<meta charset="utf-8">
<?php

	include ("conectar.php");

	if (isset($_POST['btnModificar'])) {


		$con = conecta(); 

		$codigo = $_POST['txtId']; 
		$nombre = $_POST['txtNombreP'];
		$valor = $_POST['txtValor']; 

		echo ("Código del Producto: $codigo <br><br>"); 
		echo ("Nombre: $nombre <br><br>"); 
		echo ("Valor Unitario: $valor <br><br>");
		$modificar = "UPDATE productos SET nombreProducto='$nombre',valorUnitario='$valor' WHERE productoID = $codigo";
		$ejecutar = mysqli_query($con, $modificar); 

		if($ejecutar){

			echo '<script> alert ("Registro modificado");
			location.href = "modificarProducto.php"
			</script>';
		}
		else
		{
			echo '<script> alert ("Error en la modificación.");
			location.href = "modificarProducto.php"
			</script>';
		}
	}
	else
	{
		echo '<script> alert ("¿Se está embobando? Ya nos dimos cuenta que no ingresó datos.");
			location.href = "modificarProducto.php"
			</script>';
	}

?>