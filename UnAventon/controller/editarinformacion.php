<?php
	include ('../model/db.php')
	$conn = conectar();
	if(!session_id()){ 
		session_start();
	}
	if (isset($_SESSION['idautoincremental'])){
	$idautoincremental= $_SESSION['idautoincremental'];
	$consulta="SELECT nombre, apellido, nombreusuario, email, telefono, fechanacimiento FROM usuarios WHERE idautoincremental='$idautoincremental'";
	$resultado=mysqli_query($conn,$consulta) or die('Error');
	$usuario=mysqli_fetch_array($resultado);
	
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>UnAventon | Editar información de la cuenta</title>
	<link rel="stylesheet" type="text/css">
</head>
<script type="text/javascript" src="css-js/../js.editarvalidar.js"></script>
<body "background-color: #FEF9E7;">
	<div id="global">
	<?php
		
		
		include('../model/usuario.php');
		$user= new usuario(); //instancia de una clase
		$user->estaRegistrado();
	?>
	
	<article>
		<section>
				<form class="contact_form" action="../model/editarinformacion2.php" method="post" name="contact_form" onsubmit="return runSubmit(this)">
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
								<label for="nombre">Nombre:</label>
								<input value="<?php echo $usuario['nombre'];?>" 
								type="text" name="nombre"/>
							</li>
							<li> 
								<label for="apellido">Apellido:</label>
								<input value="<?php echo $usuario['apellido'];?>" type="text" name="apellido"/>
							</li> 
							<li> 
								<label for="nombreusuario">Nombre usuario:</label>
								<input value="<?php echo $usuario['nombreusuario'];?>" 
								type="text" name="nombreusuario"/>
							</li>
							<li>
								<label for="email">Email:</label>
								<input value="<?php echo $usuario['email']; ?>" type="email" name="email"required />
								<span class="form_hint"></span>
							</li>
							<li> 
								<label for="telefono">Teléfono:</label>
								<input value="<?php echo $usuario['telefono'];?>" name="telefono" required/>
							</li>
							<li> 
								<label for="date">Fecha de nacimiento</label>
								<input value="<?php echo $usuario['fechadenacimiento'];?>" name="fechadenacimiento" required/>
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
