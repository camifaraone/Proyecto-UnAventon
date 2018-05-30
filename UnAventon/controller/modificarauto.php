<?php
	if(!session_id()){ //para ver si la sesión está iniciada
		session_start();
	}
?><!DOCTYPE html>
<html>
<head>
	<title>UnAventon | Editar datos del auto</title>
<link rel="stylesheet" type="text/css" href="../js/estilo.css">
</head>
<script type="text/javascript" src="../js/editarauto.js"></script>
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
								<h3>EDITAR DATOS DEL VEHÍCULO</h3>
								<?php
									if(isset($_SESSION['error'])){
										echo $_SESSION['error'];
										unset($_SESSION['error']);
									}

								?>
								<span class="required_notification">* Datos requeridos</span> 
							</li>
							<li> 
								<label for="name">Marca:</label>
								<input value="<?php echo $vehiculo['marca'];?>" 
								type="text" name="marca"/>
							</li>
							<li> 
								<label for="name">Modelo:</label>
								<input value="<?php echo $vehiculo['modelo'];?>" 
								type="text" name="modelo"/>
							</li>
							<li> 
								<label for="name">Color:</label>
								<input value="<?php echo $vehiculo['color'];?>" 
								type="text" name="color"/>
							</li>
							<li> 
								<label for="name">Patente:</label>
								<input value="<?php echo $vehiculo['patente'];?>" 
								type="text" name="patente"/>
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
