<?php 
	
	include('../model/db.php');
	$conn = conectar();
	include('../model/usuario.php');
	$user= new usuario(); //instancia de una clase
	$user->estaRegistrado();
	
					    
	if($_POST['nombre'] == '' or $_POST['apellido'] == '' or $_POST['nombreusuario'] == '' or $_POST['email'] == '' or $_POST['telefono'] == '' $_POST['fechanacimiento'] == '')
	{ 
	    $_SESSION['error'] = 'Por favor llene todos los campos.';
		header("Location:../controller/editarinformacion.php");
		exit;
	} else { 
		
		if(!session_id()){
			session_start();
		}
		
		$idautoincremental=$_SESSION['idautoincremental'];
		$email=$_POST['email'];
		$sql= "SELECT * FROM usuario WHERE email='$email' and idautoincremental<>'$idautoincremental'";
		$result = mysqli_query($conn,$sql); 
		if(mysqli_num_rows($result) >= 1 )//cant de filas que me devuelve la consulta
		{ 
			$_SESSION['error'] = 'Ya existe este email.';
			header("Location:../controller/editarinformacion.php");
			exit;
		}
		else{ 
			$nombre= $_POST['nombre'];
			$apellido= $_POST['apellido'];
			$nombreusuario= $_POST['nombreusuario'];
			$email=$_POST['email'];
			$telefono= $_POST['telefono'];
			$fechanacimiento= $_POST['fechanacimiento'];
			$sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', nombreusuario='$nombreusuario', email='$email', telefono='$telefono', 'fechanacimiento'='$fechanacimiento' WHERE idautoincremental='$idautoincremental'";
			$result = mysqli_query($conn,$sql);//ejecuto la consulta
			$_SESSION['mensaje'] = 'Haz editado correctamente los datos.';
			header("Location:../controller/micuenta.php");
			exit;
		} 
	}		            
?> 
