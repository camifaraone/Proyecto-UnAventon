<?php


function registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia, $foto){
		
	require ("db.php");
	
	try{
		$sql= $conn->prepare("INSERT INTO usuario
				(nombreusuario, email, nombre,apellido,telefono,fechanacimiento,contrasenia,confirmarcontrasenia, foto) 
				VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)" );

		$sql ->execute(array("$nombreusuario", "$email", "$nombre", "$apellido", "$telefono","$fechanacimiento","$contrasenia","$confirmarcontrasenia","$foto"));
				
		$sql ->execute();
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
 
 function comprobar($email)
 {
	  require ("db.php");
	try{
		
		$sql = $conn->prepare("select * from usuario where email=:email");
		$sql->bindParam(":email",$email,PDO::PARAM_STR);
		
		$sql ->execute();
		$result=$sql->fetch();
 
	}
    catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return $result;	 
	 
 
 
 }		 
	
 
 
 
 
 
 
 
 
 
 
 

 function comprobar_usuario()
 {
	
			if(isset($_POST["register"])){


				if(!empty($_POST['nombreusuario']) && !empty($_POST['contrasenia']) && !empty($_POST['confirmarcontrasenia']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['fechanacimiento']) && !empty($_POST['foto'])) {
					$nombreusuario=$_POST['nombreusuario'];
					$email=$_POST['email'];
					$nombre=$_POST['nombre'];
					$apellido=$_POST['apellido'];
					$telefono=$_POST['telefono'];
					$fechanacimiento=$_POST['fechanacimiento'];
					$contrasenia=$_POST['contrasenia'];
					$confirmarcontrasenia=$_POST['confirmarcontrasenia'];
					$foto=$_POST['foto'];
					
					$a = comprobar($email);
				
					if( $a != '') {
						
						echo "<script type=\"text/javascript\">alert(\"El mail utilizado ya está registrado\");</script>";

					
						 
	                }
					else
				    {
						$valor = registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia, $foto);
						header("Location: ../controller/login.php");
				
				    }
					
					
					

				}
				else {
						$message = "Todos los campos deben estar completos";
					}
			}
		
		
	}
 
 	

	

?>