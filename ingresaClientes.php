<meta charset="utf-8">
<?php

	include ("conectar.php");

	if (isset($_POST['btnRegistrar'])) {


		$con = conecta(); 

		$doc = $_POST['txtDocumento']; 
		$nombre = $_POST['txtNombre'];
		$apellidos = $_POST['txtApellidos']; 
		$direccion = $_POST['txtDireccion']; 
		$tel = $_POST['txtTelefono']; 
		$deuda = $_POST['txtDeuda']; 

		echo ("Documento: $doc <br><br>"); 
		echo ("Nombre: $nombre <br><br>"); 
		echo ("Apellido: $apellidos <br><br>"); 
		echo ("Dirección: $direccion <br><br>");
		echo ("Teléfono: $tel <br><br>");
		echo ("Deuda: $deuda <br><br>"); 
		$insertar = "Insert into Clientes Values ('$doc','$nombre','$apellidos','$direccion','$tel','$deuda')";
		$ejecutar = mysqli_query($con, $insertar); 

		if($ejecutar){

			echo '<script> alert ("Registro ingresado");
			location.href = "registrarClientes.php"
			</script>';
		}
		else
		{
			echo '<script> alert ("Error de entrada.");
			exit(); 
			</script>';

		}
	}
	else
	{
		echo '<script> alert ("¿Se está embobando? Ya nos dimos cuenta que no ingresó datos.");
			location.href = "registrarClientes.php"
			</script>';
	}

?>