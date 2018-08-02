<?php

function chequear_usuario($usuario){
	require ('db.php');
	$sql= $conn->prepare("SELECT COUNT(*) FROM usuario WHERE nombreusuario=:usuario");
	$sql->bindParam(':usuario',$usuario,PDO::PARAM_STR);
	$sql->execute();
	$result=$sql->fetchColumn();
	echo "".$result;
	return($result=='');
}

function registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia, $foto){

	require ("db.php");
	if (chequear_usuario($nombreusuario)) {
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
	}else{
		return false;
	}
	
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


				if(!empty($_POST['nombreusuario']) && !empty($_POST['contrasenia']) && !empty($_POST['confirmarcontrasenia']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['fechanacimiento']) && (!empty($_POST['foto']) || empty($_POST['foto']))) {
					$nombreusuario=$_POST['nombreusuario'];
					$email=$_POST['email'];
					$nombre=$_POST['nombre'];
					$apellido=$_POST['apellido'];
					$telefono=$_POST['telefono'];
					$fechanacimiento=$_POST['fechanacimiento'];
					$contrasenia=$_POST['contrasenia'];
					$confirmarcontrasenia=$_POST['confirmarcontrasenia'];
					$foto=$_POST['foto'];

						if (empty($_POST['foto'])){
		$foto="../img/img6.png";
	}
					$baja = get_baja($email);
					$cant = count($baja);
					if($baja != '') {
						$x = 0;
					for($i=0; $i<count($baja);$i++) {
						if($baja[$i]['bajalogica'] == 1){
							$x = $x +1;
						}
					
					}

				}
				if ( $cant == $x) {
					$valor = registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia, $foto);
					if ($valor==true) {
						echo "<script>alert('Usuario registrado con éxito.');</script>";
						header("Location: ../controller/login.php");
					}else{
						echo "<script>alert('El nombre de usuario ya está utilizado.');</script>";
					}
					
					}
					else {
						$valor = registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia, $foto);
						
		echo "<html><script> document.location.href='../controller/login.php';</script></html>";
echo "<html><script> alert('Usuario registrado');</script></html>"; 

						
						
					}
				
				
				
				}

			}
			else {
				$valor = registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia, $foto);
				if ($valor==true) {
					echo "<script>alert('Usuario registrado con éxito.');</script>";
					//header("Location: ../controller/login.php");
				}else{
					echo "<script>alert('El nombre de usuario ya está utilizado.');</script>";
				}
			}



		}


		else {
			$message = "Todos los campos deben estar completos";
		}
	}
}









?>