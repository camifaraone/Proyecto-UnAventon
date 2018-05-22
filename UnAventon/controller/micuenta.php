<?php
	if(!session_id()){
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>UnAventon | Información de la cuenta</title>
	<link rel="stylesheet" type="text/css">
</head>
<body style="background-color: #FEF9E7;">
	<div id="global">
	<?php
		include('header.php');

		//if(!isset($_SESSION['id_usuario'])){
			//header('Location:ingresar.php');
		//}	cumple la misma funcion que las lineas 23 24 25
		

		include('../model/usuario.php');
		$user= new usuario(); //instancia de una clase
		$user->estaRegistrado();
	?>
	<article>
		<section>
			
				<div class="usuario"> 
					<ul>
							<li> 
								<h3>MI CUENTA</h3>
								<p>Datos de contacto</p>
								<?php if( isset($_SESSION['mensaje']) ){
									echo ($_SESSION['mensaje']);
								}
								unset($_SESSION['mensaje']);
								?>
							</li>
							<li> 
								<label for="name">Nombre: <?php echo $usuario['nombre']; ?></label>
								
							</li>
							<li> 
								<label for="surname">Apellido: <?php echo $usuario['apellido']; ?></label>
								
							</li> 
							<li>
								<label for="email">Email: <?php echo $usuario['email']; ?></label>
								
								<span class="form_hint"></span>
							</li>
							<li> 
								<label for="nombreusuario">Nombre usuario: <?php echo $usuario['nombreusuario']; ?></label>
								
							</li> 
							<li> 
								<label for="phone">Teléfono: <?php echo $usuario['telefono']; ?></label>
								
							</li>
							<li> 
								<label for="date">Fecha de nacimiento: <?php echo $usuario['fechanacimiento']; ?></label>
								
							</li>
                    		<li>
								<div >
									<a  class="submit" href="../controller/editarinformacion.php">EDITAR</a> 
								</div>
							</li><li><div >
									<a  class="submit" href="../controller/editarcontrasena.php">EDITAR CONTRASEÑA</a> 
								</div></li>					
						</ul> 
					</div>
						
		</section>
			
	</article>
	<?php
  		include "../controller/footer.php";
	?>
	
		
		
	</div>
</body>
</html>
