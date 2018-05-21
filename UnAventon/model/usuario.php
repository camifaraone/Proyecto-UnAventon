<?php

	 class usuario{ 
	 	 var $usu; //atributos clase usuario
	 	function ingresar($email, $contrasenia, $conex){

	 		try{
		 		if($email != "" && $contrasenia != ""){
					
					

					//Inicio de variables de sesión
					if(!session_id()){
						session_start();
					}
					
					//Consultar si los datos están guardados en la base de datos
					$consulta= "SELECT * FROM usuario WHERE email='$email' AND contrasenia='$contrasenia'"; 
					$resultado= mysqli_query($conex, $consulta) or die ('error'); //ejecuta consulta
					$fila=mysqli_fetch_array($resultado);//arreglo con todos los resultados obtenidos de la consulta
					
					//OPCIÓN 1: Si el usuario no existe o los datos son incorrectos
					if (!$fila){ //!$ pregunta negada
						throw new Exception("Error al completar datos");
					}
					else{

						//OPCIÓN 2: Usuario logueado correctamente
						//Definimos las variables de sesión y redirigimos a la página de usuario
						$_SESSION['idautoincremental'] = $fila['idautoincremental']; //SESSION: arreglo donde se guardan variables de sesión - numero único
						$idautoincremental=$_SESSION['idautoincremental'];
						$_SESSION['nombre'] = $fila['nombre'];
						$_SESSION['cantidadAccesos']=$fila['cantidadAccesos'] +1;
						$cantidadAccesos=$_SESSION['cantidadAccesos'];
						$sql="UPDATE usuario SET cantidadAccesos='$cantidadAccesos' WHERE usuario='$idautoincremental'";
						$resultado= mysqli_query($conex,$sql) or die ('error');
					
						//generamos dos variables de sesión, en id_usuario ingresamos el id_usuario obtenido que se esta logeando, en nombre ingresamos el nombre de el usuario
						header("Location:backend.php");
					}
					
				}
				else {
					throw new Exception("Error al completar datos");
					
				}
			}
			catch (Exception $e) { //si llego al catch es porque tuve un error
					
					$_SESSION['error'] = $e->getMessage(); 
					header("Location:ingresar.php");	
				
			}

		}
	 	function desconectar(){
			if(isset($_SESSION['idautoincremental'])){	
				unset($_SESSION['idautoincremental']); //borro la variable nombre
				session_destroy(); //destruye la sesion
			}
			header("location:ingresar.php");
	 	}
	 	function estaRegistrado(){
			try{
				if(!isset($_SESSION['idautoincremental'])){
					throw new Exception();
				}
			}
			catch (Exception $e){
				header('Location:ingresar.php');
			}

	 	}
	 }
?>
