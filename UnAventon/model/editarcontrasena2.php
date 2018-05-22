<?php 
	
	include('../model/db.php');
	$conn = conectar();
	include('../model/usuario.php');
	$user= new usuario(); //instancia de una clase
	$user->estaRegistrado();
	
			
					    
	if($_POST['contrasenia'] == '' or $_POST['nuevacontrasenia'] == '' or $_POST['confirmarcontrasenia'] == '')
	{ 
	    $_SESSION['error'] = 'Por favor llene todos los campos.';
		header("Location:../controller/editarcontrasena.php");
		exit;
	} else { 

		if(!session_id()){
			session_start();
		}
		
		$idautoincremental=$_SESSION['idautoincremental'];
		$sql= "SELECT * FROM usuario WHERE email='$email' and idautoincremental<>'$idautoincremental'";
		$result = mysqli_query($conn,$sql); 
		$usuario=mysqli_fetch_array($result);
		$contrasenia= $_POST['contrasenia']; //por formulario
		$nueva= $_POST['nuevacontrasenia'];
		$confirmar=$_POST['confirmarcontrasenia'];
		if($usuario['contrasenia'] != $contrasenia){
			$_SESSION['error'] = 'La contraseña actual no es correcta.';
			header("Location:../controller/editarcontrasena.php");
			exit;
		}
		else{ 
			if($nueva != $confirmar){
				$_SESSION['error'] = 'Las contraseñas no coinciden.';
				header("Location:../controller/editarcontrasena.php");
				exit;
			}
			else{
				$sql = "UPDATE usuario SET contrasenia='$nueva' WHERE idautoincremental='$idautoincremental'";
				$result = mysqli_query($conn,$sql);//ejecuto la consulta
				$_SESSION['mensaje'] = 'Haz editado correctamente los datos.';
				header("Location:../controller/micuenta.php");
				exit;
			}	
		}			
					
	}	            
?> 

