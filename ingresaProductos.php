<meta charset="utf-8">
<?php

	include ("conectar.php");

	if (isset($_POST['btnRegistrar'])) {


		$con = conecta(); 

		$codigo = $_POST['txtId']; 
		$nombre = $_POST['txtNombreP'];
		$valor = $_POST['txtValor']; 

		echo ("Código del Producto: $codigo <br><br>"); 
		echo ("Nombre: $nombre <br><br>"); 
		echo ("Valor Unitario: $valor <br><br>"); 
		 
		$insertar = "Insert into Productos Values ('$codigo','$nombre','$valor')";
		$ejecutar = mysqli_query($con, $insertar); 

		if($ejecutar){

			echo '<script> alert ("Registro ingresado");
			location.href = "registrarProductos.php"
			</script>';
		}
		else
		{
			echo '<script> alert ("Error de entrada.");
			location.href = "registrarProductos.php"
			</script>';

		}
	}
	else
	{
		echo '<script> alert ("¿Se está embobando? Ya nos dimos cuenta que no ingresó datos.");
			location.href = "registrarProductos.php"
			</script>';
	}

?>