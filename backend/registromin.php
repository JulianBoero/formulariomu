<?php 
		$servidor    = "localhost";
		$usuario     = "root";
		$contraseña  = "";
		$db          = "registromumendoza";

		$nombredeusuario  			= $_GET['nombredeusuario'];
		$nombre     	  			= $_GET['nombre'];
		$apellido        			= $_GET['apellido'];
		$email 			  			= $_GET['email'];
		$contrasenia        		= $_GET['contrasenia'];
		$preguntadeseguridad        = $_GET['preguntadeseguridad'];
		$respuestadeseguridad 		= $_GET['respuestadeseguridad'];
		$idseguridad 				= $_GET['idseguridad'];
		
		
		$conn = new mysqli($servidor, $usuario, $contraseña, $db);
		if ($conn->connect_error) {
			$data= array('mensaje'=> "Conexión con la base de datos fallida:   $conn->error", 'status' => 3);
		}
		else
		{	
			$sql = "INSERT INTO usuariomumendoza (nombredeusuario,nombre,apellido,email,contrasenia,preguntadeseguridad,respuestadeseguridad,idseguridad) 
			         VALUES ('$nombredeusuario','$nombre','$apellido','$email','$contrasenia','$preguntadeseguridad','$respuestadeseguridad','$idseguridad')";
			if ($conn->query($sql) == TRUE) {
				$data= array('mensaje'=> "Registro exitoso. Bienvenido a MMUS", 'status' => 0);
			} 
			else 
			{
				$data= array('mensaje'=> "Error en $sql2  $conn->error", 'status' => 1);
			}
		}
		$myJSON = json_encode($data);
		echo $myJSON;

		
	// ----------------------------------------------------------------------------------------- //
		$conn->close();
	// -------------------------------------------------------------------------------------------------------------
?>


