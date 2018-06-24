<?php


function registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia){
		
	require ("db.php");
	
	try{
		$sql= $conn->prepare("INSERT INTO usuario
				(nombreusuario, email, nombre,apellido,telefono,fechanacimiento,contrasenia,confirmarcontrasenia) 
				VALUES(:nombreusuario,:email, :nombre, :apellido, :telefono, :fechanacimiento, :contrasenia, :confirmarcontrasenia)" );
		$sql->bindParam(":nombreusuario",$nombreusuario,PDO::PARAM_STR,100);
		$sql->bindParam(":email",$email,PDO::PARAM_STR,100);
		$sql->bindParam(":nombre",$nombre,PDO::PARAM_STR,100);
		$sql->bindParam(":apellido",$apellido,PDO::PARAM_STR,8);	
		$sql->bindParam(":telefono",$telefono,PDO::PARAM_INT,15);
		$sql->bindParam(":fechanacimiento",$fechanacimiento,PDO::PARAM_STR);
		$sql->bindParam(":contrasenia",$contrasenia,PDO::PARAM_STR,8);
		$sql->bindParam(":confirmarcontrasenia",$confirmarcontrasenia,PDO::PARAM_STR,8);
				
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


				if(!empty($_POST['nombreusuario']) && !empty($_POST['contrasenia']) && !empty($_POST['confirmarcontrasenia']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['fechanacimiento'])) {
					$nombreusuario=$_POST['nombreusuario'];
					$email=$_POST['email'];
					$nombre=$_POST['nombre'];
					$apellido=$_POST['apellido'];
					$telefono=$_POST['telefono'];
					$fechanacimiento=$_POST['fechanacimiento'];
					$contrasenia=$_POST['contrasenia'];
					$confirmarcontrasenia=$_POST['confirmarcontrasenia'];
					
					$a = comprobar($email);
				
					if( $a != '') {
						
						$message = "El email utilizado ya está registrado.";
						
						echo '<script language="javascript">alert("';
						echo $message;
						echo '");</script>';
						
	                }
					else
				    {
						$valor = registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia);
						header("Location: ../controller/login.php");
				
				    }
					
					
					

				}
				else {
						$message = "Todos los campos deben estar completos";
					}
			}
		
		
	}
 
 	

	

?>