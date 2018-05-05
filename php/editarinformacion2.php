<?php 
	
	include('conexion.php');
	$conex = conectar();
	
	include('usuario.php');
	$user= new usuario(); //instancia de una clase
	$user->estaRegistrado();
	
					    
	if($_POST['nombre'] == '' or $_POST['apellido'] == '' or $_POST['email'] == '' or $_POST['nombreusuario'] == '' or $_POST['telefono'] == '' or $_POST['fechanacimiento'] == '')
	{ 
	    $_SESSION['error'] = 'Por favor llene todos los campos.';
		header("Location:editarinformacion.php");
		exit;
	} else { 
		
		if(!session_id()){
			session_start();
		}
		
		$idUsuario=$_SESSION['idautoincremental'];
		$email=$_POST['email'];
		$sql= "SELECT * FROM usuario WHERE email='$email' and idautoincremental<>'$idautoincremental'";
		$result = mysqli_query($conex,$sql); 
		if(mysqli_num_rows($result) >= 1 )//cant de filas que me devuelve la consulta
		{ 
			$_SESSION['error'] = 'Ya existe este email.';
			header("Location:editarinformacion.php");
			exit;
		}
		else{ 
			$nombre= $_POST['nombre'];
			$apellido= $_POST['apellido'];
			$email=$_POST['email'];
			$nombreusuario=$_POST['nombreusuario'];
			$telefono= $_POST['telefono'];
			$fechanacimiento= $_POST['fechanacimiento'];
			$sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', email='$email', nombreusuario='$nombreusuario',telefono='$telefono', fechanacimiento='$fechanacimiento' WHERE idautoincremental='$idautoincremental'";
			$result = mysqli_query($conex,$sql);//ejecuto la consulta
			$_SESSION['mensaje'] = 'Haz editado correctamente los datos.';
			header("Location:micuenta.php");
			exit;
		} 
	}		            
?> 
