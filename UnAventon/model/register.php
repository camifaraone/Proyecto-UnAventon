<?php


function registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia, $foto){
		
	require ("db.php");
	
	try{
		$sql= $conn->prepare("INSERT INTO usuario
				(nombreusuario, email, nombre,apellido,telefono,fechanacimiento,contrasenia,confirmarcontrasenia, foto) 
				VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)" );

		$sql ->execute(array("$nombreusuario", "$email", "$nombre", "$apellido", "$telefono","$fechanacimiento","$contrasenia","$confirmarcontrasenia","$foto"));
				
		//$sql ->execute();
	
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
	
 
 function get_baja($email)
 {
	  require ("db.php");
	try{
		
		$sql = $conn->prepare("select * from usuario where email=:email");
		$sql->bindParam(":email",$email,PDO::PARAM_STR);
		
		$sql ->execute();
		$result=$sql->fetchAll();
 
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

						
					$baja = get_baja($email);
					$cant = count($baja);
					if($baja != '') {
						$x = 0;
					for($i=0; $i<count($baja);$i++) {
						if($baja[$i]['bajalogica'] == 1){
							$x = $x +1;
						}
					
					}
					if ( $cant == $x) {
						$valor = registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia, $foto);
						header("Location: ../controller/login.php");
					}
					else {
						echo "<script type=\"text/javascript\">alert(\"El mail utilizado ya está registrado\");</script>";
					}
					
					}
					else {
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