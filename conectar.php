<?php



	function conecta(){

		$servidor = 'localhost'; 
		$usuario = 'root'; 
		$clave= ''; 
		$base = 'tienda';  


		 if (!($con = mysqli_connect($servidor, $usuario, $clave, $base))) 
		 {
		 	echo "Error de conexión."; 
		 } 

		return $con; 
	}

?>