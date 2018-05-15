<?php
	if(!session_id()){ //para ver si la sesión está iniciada
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon"> //href="../img/icono.ico"/
	<title>UnAventon | Editar información de la cuenta</title>
	<link rel="stylesheet" type="text/css" href="materialize.css">
</head>
<script type="text/javascript" src="css-js/editarvalidar.js"></script>
<body>
	<div id="global">
	<?php
		include('header.php');
		
		include('usuario.php');
		$user= new usuario(); //instancia de una clase
		$user->estaRegistrado();
	?>
	
	<article>
		<section>
				<form class="contact_form" action="editarinformacion2.php" method="post" name="contact_form" onsubmit="return runSubmit(this)">
					<div> 
						<ul>
							<li> 
								<h3>EDITAR INFORMACIÓN DE LA CUENTA</h3>
								<p>Información de la cuenta</p>
								<?php
									if(isset($_SESSION['error'])){
										echo $_SESSION['error'];
										unset($_SESSION['error']);
									}

								?>
								<span class="required_notification">* Datos requeridos</span> 
							</li>
							<li> 
								<label for="nombre"><em>*</em>Nombre:</label>
								<input value="<?php echo $usuario['nombre']; ?>" type="text" name="nombre"/>
							</li>
							<li> 
								<label for="apellido"><em>*</em>Apellido:</label>
								<input value="<?php echo $usuario['apellido'];?>" type="text" name="apellido"/>
							</li> 
							<li>
								<label for="email"><em>*</em>Email:</label>
								<input value="<?php echo $usuario['email']; ?>" type="email" name="email"  required />
								<span class="form_hint"></span>
							</li>
							<li> 
								<label for="nombreusuario"><em>*</em>Nombre usuario:</label>
								<input value="<?php echo $usuario['nombreusuario'];?>" type="text" name="nombreusuario"/>
							</li>
							<li> 
								<label for="telefono"><em>*</em>Teléfono:</label>
								<input value="<?php echo $usuario['telefono'];?>" name="telefono" required/>
							</li>
							<li> 
								<label for="date"><em>*</em>Fecha nacimiento:</label>
								<input value="<?php echo $usuario['fechanacimiento'];?>" type="date" name="fechanacimiento"/>
							</li>
							<li>
								<button class="submit" type="submit">GUARDAR</button>
							</li>						
						</ul> 
					</div>
				</form>		
				<p>cantidad de accesos: <?echo $_SESSION['cantidadAccesos'];?></p>					
		</section>
		
	</article>
	<?php 
			include('footer.php');
	?>
</body>

</html>
