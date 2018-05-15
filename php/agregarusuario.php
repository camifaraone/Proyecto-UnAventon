<?php 
	
	if(!session_id()){
		session_start();
	}
	
	include('conexion.php');
	$conex = conectar();
	
	include('usuario.php');
	$user= new usuario(); //instancia de una clase
	$user->estaRegistrado();
	
					    
	if($_POST['nombre'] == '' or $_POST['apellido'] == '' or $_POST['email'] == '' or $_POST['nombreusuario'] == '' or $_POST['telefono'] == '' or $_POST['contrasenia'] == '' or $_POST['fechanacimiento'] == '')
	{ 
	    $_SESSION['error'] = 'Por favor llene todos los campos.';
		header("Location:perfil.php");
		exit;
	} else { 
		$email= $_POST['email'];
		$sql= "SELECT * FROM usuarios WHERE email='$email'";
		$result = mysqli_query($conex,$sql); 
	
				  
					        if( mysqli_num_rows($result) == 0 )
					        { 
					            if($_POST['contrasenia'] == $_POST['confirmarclave'])//Si los campos son iguales, continua el registro y caso contrario saldrá un mensaje de error.
					            { 
									$nombre= $_POST['nombre'];
									$apellido= $_POST['apellido'];
									$nombreusuario= $_POST['nombreusuario'];
									$telefono= $_POST['telefono'];
									$contrasenia= $_POST['contrasenia'];
									$fechanacimiento= $_POST['fechanacimiento'];
									$sql = "INSERT INTO usuarios (nombre,apellido, email, nombreusuario, telefono,contrasenia, fechanacimiento, activo) VALUES ('$nombre','$apellido','$email','$`nombreusuario','$telefono','$contrasenia','$fechanacimiento','1')";//Se insertan los datos a la base de datos y el usuario ya fue registrado con exito.
					                $result = mysqli_query($conex,$sql);
					                
					                
					            	


					                
									
									$_SESSION['error'] = 'Usted se ha registrado correctamente.';
									header("Location:ingresar.php");
									exit;
					                
					            } 
					            else 
					            { 
									$_SESSION['error'] = 'Las claves no son iguales, intente nuevamente.';
									header("Location:perfil.php");
									exit;
					          
					            } 
					        } 
					        else 
					        { 
								$_SESSION['error'] = 'Ya existe un usuario con este email.';
								header("Location:perfil.php");
								exit;
					            
					        } 
					    } 
?> 
