<meta charset="utf-8">
<?php

	include ("conectar.php");

	if (isset($_POST['btnModificar'])) {


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
		$modificar = "UPDATE clientes SET nombres ='$nombre',apellidos='$apellidos',direccion='$direccion',telefono= '$tel', deuda= $deuda WHERE documento = $doc";
		$ejecutar = mysqli_query($con, $modificar); 

		if($ejecutar){

			echo '<script> alert ("Registro modificado");
			location.href = "modificarClientes.php"
			</script>';
		}
		else
		{
			echo '<script> alert ("Error en la modificación.");
			location.href = "modificarClientes.php"
			</script>';
		}
	}
	else
	{
		echo '<script> alert ("¿Se está embobando? Ya nos dimos cuenta que no ingresó datos.");
			location.href = "modificarClientes.php"
			</script>';
	}

?>