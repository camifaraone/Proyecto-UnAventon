<?php 
	if(!session_id()){
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon"/> //href="../img/icono.ico"/
	<title>UnAventon | Registrarse</title>
	<link rel="stylesheet" type="text/css"> //href="css-js/estilo1.css"
</head>
<script type="text/javascript" src="css-js/perfilvalidar.js"></script>
<body>
	<div id="global">
		
		<article>
		<?php
			include('header.php');
			if(isset($_SESSION['idautoincremental'])){
				header('Location:micuenta.php');
			}
			
		?>	
			<?php
				if(isset($_SESSION['error'])){
					echo $_SESSION['error'];
					unset($_SESSION['error']);
				}
			?>
			<section>
				<form class="contact_form" action="agregarusuario.php" method="post" name="contact_form" onsubmit="return runSubmit(this)">
					<div> 
						<ul> 
							<li> 
								<h3>DATOS PERSONALES</h3>
								<span class="required_notification">* Datos requeridos</span> 
							</li>
							<li> 
								<label for="nombre"><em>*</em>Nombre:</label>
								<input type="text" name="nombre" required />
							</li>
							<li> 
								<label for="apellido"><em>*</em>Apellido:</label>
								<input type="text" name="apellido" required/>
							</li> 
							<li>
								<label for="email"><em>*</em>Email:</label>
								<input type="email" name="email" required />
								<span class="form_hint"></span>
							</li>
							<li> 
								<label for="nombreusuario"><em>*</em>Nombre usuario:</label>
								<input type="text" name="nombreusuario" required/>
							</li>
							<li> 
								<label for="telefono"><em>*</em>Teléfono:</label>
								<input name="telefono" required/>
							</li>
							<li> 
								<label for="fechanacimiento"><em>*</em>Fecha nacimiento:</label>
								<input type="date" name="fechanacimiento" required/>
							</li>
							<li>
								<div class="field">
                        			<label for="contrasenia" class="required" ><em>*</em>Clave:</label>
                        			
                        			<div class="input-box">
                            			<input type="password" name="contrasenia" title="Contraseña" required/>
                        			</div> 
                    			</div>
                    		</li>
                    		<li>
                    			<div class="field">
                        			<label for="confirmarclave" ><em>*</em>Confirmar clave:</label>
                        			
                        			<div class="input-box">
                            			<input type="password" name="confirmarclave" title="Confirmar la contraseña" required/>
                        			</div>
                    			</div>
                    		</li>
							<li>
								<button class="submit" type="submit" >REGISTRARME</button>
							</li> 							
						</ul> 
					</div>
				</form>	
			</section>	
		</article>
		<?php 
			include('footer.php');
		?>
	</div>
</body>

</html>
