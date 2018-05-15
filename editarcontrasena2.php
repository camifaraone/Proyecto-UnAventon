<?php 
	
	include('conexion.php');
	$conex = conectar();
	
	include('usuario.php');
	$user= new usuario(); //instancia de una clase
	$user->estaRegistrado();
			
					    
	if($_POST['clave'] == '' or $_POST['nuevaclave'] == '' or $_POST['confirmarclave'] == '')
	{ 
	    $_SESSION['error'] = 'Por favor llene todos los campos.';
		header("Location:editarcontrasena.php");
		exit;
	} else { 

		if(!session_id()){
			session_start();
		}
		
		$idautoincremental=$_SESSION['idautoincremental'];
		$sql= "SELECT * FROM usuario WHERE idautoincremental=$idautoincremental";
		$result = mysqli_query($conex,$sql); 
		$usuario=mysqli_fetch_array($result);
		$clave= $_POST['contrasenia']; //por formulario
		$nueva= $_POST['nuevaclave'];
		$confirmar=$_POST['confirmarclave'];
		if($usuario['contrasenia'] != $contrasenia){
			$_SESSION['error'] = 'La contraseña actual no es correcta.';
			header("Location:editarcontrasena.php");
			exit;
		}
		else{ 
			if($nueva != $confirmar){
				$_SESSION['error'] = 'Las contraseñas no coinciden.';
				header("Location:editarcontrasena.php");
				exit;
			}
			else{
				$sql = "UPDATE usuario SET contrasenia='$nueva' WHERE idautoincremental='$idautoincremental'";
				$result = mysqli_query($conex,$sql);//ejecuto la consulta
				$_SESSION['mensaje'] = 'Haz editado correctamente los datos.';
				header("Location:micuenta.php");
				exit;
			}	
		}			
					
	}	            
?> 

